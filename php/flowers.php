<?php


function build_plant() {
    require 'connection.php';
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link));

    $query_p ="SELECT * FROM plant";
    $result_p = mysqli_query($link, $query_p) or die("Ошибка " . mysqli_error($link));



    foreach ($result_p as $plant) {
        $query_s ="SELECT * FROM sizes WHERE ID=\"".$plant['size']."\"";
        $result_s = mysqli_query($link, $query_s) or die("Ошибка " . mysqli_error($link));
        $size_text="";
        foreach ($result_s as $row_s) {
            $size_text=$row_s['name'];
        }

        include("../html/parts/plant.php");
    }
}


?>