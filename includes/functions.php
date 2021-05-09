
<?php
include "db.php";
function search_query($query){
    $count = mysqli_num_rows($query);
    if($count === 0){
        echo "<h1 class='text-center'>NO RESULT</h1>";
    }else{
        $index = 1;
        while($row = mysqli_fetch_assoc($query)){
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
    }
}

function confirm($query){
    global $connection;
    if(!$query){
        die("QUERY FAILED" . mysqli_error($connection));
    }
}
?>