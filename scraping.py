import requests
import pandas as pd
import httplib2
from bs4 import BeautifulSoup, SoupStrainer


def listToString(s):
    str = ""
    for i in s:
        str += i
    return str


def isfloat(value):
    try:
        float(value)
        return True
    except ValueError:
        return False


def index_in_list(a_list, index):
    return index < len(a_list)


# Data frame to hold all information
d = {'Name': [], 'Links': [], 'Percentage': []}
df = pd.DataFrame(d)
links = []
name = ""

http = httplib2.Http()
linkPartOne = 'https://apps.cra-arc.gc.ca/ebci/hacc/srch/pub/bscSrch?dsrdPg='
linkPartTwo = '&q.stts=0007&q.ordrClmn=NAME&q.ordrRnk=ASC'

for page in range(1, 200):
    status, response = http.request(linkPartOne + str(page) + linkPartTwo)
    # Finds all <a> in page
    for link in BeautifulSoup(response, parse_only=SoupStrainer('a'), features="html.parser"):
        name = ""

        linkToString = str(link)
        # Finds all links with "/ebci/hacc/srch/pub/dsplyRprtngPrd" in the page
        if link.has_attr('href'):
            linkCopy = link['href']
            if "/ebci/hacc/srch/pub/dsplyRprtngPrd" in linkCopy:
                for i in range(len(linkToString) - 5, 1, -1):
                    if linkToString[i] == ">":
                        break
                    else:
                        name = linkToString[i] + name
                linkToSave = "https://apps.cra-arc.gc.ca" + linkCopy

                r = requests.get(linkToSave)
                soup = BeautifulSoup(r.content, "html.parser")

                results = soup.find_all('div', attrs={"class": "container"})
                result2 = str(results).split("Charitable programs ")

                # Gets percentage of money used for charitable programs
                percentage = ""
                for i in result2:
                    if index_in_list(result2, 1):
                        if i[0] == "$":
                            for x in range(30):
                                if i[x] == "(":
                                    for y in range(1, 7):
                                        if i[x + y] == "%":
                                            break
                                        else:
                                            percentage += i[x + y]
                                else:
                                    continue
                                break
                        else:
                            continue
                        break
                if isfloat(percentage):
                    floatPercentage = float(percentage)
                    if floatPercentage > 0:
                        df = df.append({'Name': name, 'Links': linkToSave, 'Percentage': floatPercentage},
                                       ignore_index=True)
df.sort_values(by=['Percentage'])

# Saves df as csv file to specified directory
df.to_csv(r"C:\Users\lukea\Documents\Charify Data\data.csv")
