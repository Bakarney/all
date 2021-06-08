<?php


function build_fruit() {
    require 'connection.php';
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link));

    $query_g ="SELECT * FROM greenhouse";
    $result_g = mysqli_query($link, $query_g) or die("Ошибка " . mysqli_error($link));

    foreach($result_g as $row) {
        $query_plant ="SELECT * FROM plant WHERE ID=\"".$row['plant']."\"";
        $result_plant = mysqli_query($link, $query_plant) or die("Ошибка " . mysqli_error($link));
        foreach($result_plant as $row_p) {
            
            if ($row['time'] >= $row_p['time_seed'] + $row_p['time_sprout'] + $row_p['time_grow'] + $row_p['time_flower']) {
                echo "<li> Теплиця " . $row['ID'] . " - " . $row_p['name'] . "</li>";
            }
            
        }
    }
}

function build_ready() {
    //работает
    require 'connection.php';
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link));

    $query_g ="SELECT * FROM greenhouse WHERE plant is NULL";
    $result_g = mysqli_query($link, $query_g) or die("Ошибка " . mysqli_error($link));

    foreach($result_g as $row) {
        $query_s ="SELECT * FROM sizes WHERE ID=\"".$row['size']."\"";
        $result_s = mysqli_query($link, $query_s) or die("Ошибка " . mysqli_error($link));
        foreach($result_s as $row_s) {

            if ($row['time'] > $row['kd_time']) {
                echo "<li> Теплиця " . $row['ID']. " - розмір: ".$row_s['name']."". "</li>";
            }
        }
    }
}

function build_other() {
    require 'connection.php';
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link));

    $query_g ="SELECT * FROM greenhouse";
    $result_g = mysqli_query($link, $query_g) or die("Ошибка " . mysqli_error($link));
    if($result_g) {
        // echo 0;
        foreach($result_g as $row) {
            if (empty($row['plant'])) {
                // echo 1;
                if ($row['time'] <= $row['kd_time']) {
                    // echo 2;
                    echo "<li> Теплиця " . $row['ID'] . " - відпочиває, залишилось " . $row['kd_time'] - $row['time'] + 1 . "</li>";
                }
            }
            else {
                // echo 3;
                $query_plant ="SELECT * FROM plant WHERE ID=\"".$row['plant']."\"";
                $result_plant = mysqli_query($link, $query_plant) or die("Ошибка " . mysqli_error($link));
                foreach($result_plant as $row_p){
                    $plant_time = $row_p['time_seed'] + $row_p['time_sprout'] + $row_p['time_grow'] + $row_p['time_flower'];
                    if ($row['time'] < $plant_time) {
                        // echo 4;
                        echo "<li> Теплиця " . $row['ID'] . " - посаджено " . $row_p['name'] . ", залишилось " . $plant_time - $row['time'] . "</li>";
                    }
                }
            }
        }
    }
}



?>