<?php include "includes/header.php";?>
<?php include "includes/functions.php";?>

    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="assets/favicon.ico" width="30" height="30" alt="">
        </a>
        <h1 class="navbar-brand"><i>Charify</i></h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            </ul>
        </div>
    </nav>
        <!-- Masthead-->
        <header class="masthead text-white text-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto"><h1 class="mb-5">Charify</h1></div>
                    <div class="col-xl-9 mx-auto"><h3 class="mb-5">13,000 of Canada's Charities based on the Percentage of Revenue going to supporting their Mission</h3></div>
                    <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                        <form method="post" action="./search.php">
                            <div class="form-row">
                                <div>
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="select">
                                        <option value="">Search By:</option>
                                        <option value="name">Name</option>
                                        <option value="link">Link</option>
                                        <option value="percentage">Percent</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-7 mb-2 mb-md-0"><input class="form-control form-control-lg" type="text" placeholder="Search for Charities..." name="search_input"/></div>
                                <div class="col-12 col-md-2"><button class="btn btn-block btn-lg btn-primary" type="submit" name="search_submit" href="includes/search.php">Search</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </header>
        <div id="page-content-wrapper">

<table class="table table-bordered table-hover">
        <thead>
          <tr>
          <th>Result</th>
          <th>Name</th>
          <th>Link</th>
          <th>Percentage</th>
        </tr>
        </thead>

<tbody>
<?php
if(isset($_POST['search_submit'])){
    if(!empty($_POST['search_input']) && !empty($_POST['select'])){
        $search_input = $_POST['search_input'];
        $search = $_POST['select'];
        switch($search){
            case "name":
                $query = "SELECT * FROM charity WHERE name LIKE '%$search_input%' ";
                $search_query_name = mysqli_query($connection, $query);
                confirm($search_query_name);
                search_query($search_query_name);
            break;
            case "link":
                $query = "SELECT * FROM charity WHERE link LIKE '%$search_input%' ";
                $search_query_link = mysqli_query($connection, $query);
                confirm($search_query_link);
                search_query($search_query_link);
            break;
            case "percentage":
                $query = "SELECT * FROM charity WHERE percentage LIKE '%$search_input%' ";
                $search_query_percent = mysqli_query($connection, $query);
                confirm($search_query_percent);
                search_query($search_query_percent);
            break;
        }
    }else{
        if(empty($_POST['search_input'])){
            echo "<h3 class='text-center'>Please Input Something</h3>";
        }else{
            echo "<h3 class='text-center'>Please Select a Category</h3>";
        }
    }

}

?>

</tbody>
</table>
    </div>
