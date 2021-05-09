<div id="page-content-wrapper">

<table class="table table-bordered table-hover">
        <thead>
          <tr>
          <th>Rank</th>
          <th>Name</th>
          <th>Link</th>
          <th>Percentage</th>
        </tr>
        </thead>

<tbody>

<div class="container">

<div class="row">

    <!-- Blog Entries Column -->
    <div class="col-md-8">
<?php
$per_page = 1000;
if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = "";
}

if($page == "" || $page == 1){
    $page_1 = 0;
}else{
    $page_1 = ($page * $per_page) - $per_page;
}
    $charity_query_count = "SELECT * FROM charity";
    $find_count = mysqli_query($connection, $charity_query_count);
    $count = mysqli_num_rows($find_count);

    $count = ceil($count / $per_page);

    $query = "SELECT * FROM charity ORDER BY percentage DESC LIMIT $page_1, $per_page ";
    $select_all_charities = mysqli_query($connection, $query);
    $index = $page_1 + 1;
    while($row = mysqli_fetch_assoc($select_all_charities)){
        $charity_rank = $index;
        $charity_name = $row['name'];
        $charity_link = $row['link'];
        $charity_percentage = $row['percentage'];
        echo "<tr>";
        echo "<td>$charity_rank</td>";
        echo "<td>$charity_name</td>";
        echo "<td><a href={$charity_link}>Charity Page</a></td>";
        echo "<td>$charity_percentage%</td>";
        echo "</tr>";
        $index++;
    }

?>
</div>
</div>
</div>

</tbody>
</table>
    </div>

<hr>
    <ul class="pagination" style="margin-left: 500px;">
            <?php
                for($i = 1; $i <= $count; $i++){
                    if($i == $page){
                        echo "<li class='page-item'><a class='page-link' href='donate.php?page={$i}'>{$i}</a></li>";
                    }else{
                        echo "<li><a class='page-link' href='donate.php?page={$i}'>{$i}</a></li>";

                    }
                }
            ?>
        </ul>