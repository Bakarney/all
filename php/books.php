<?php
require_once "util.php";

function build_fruit() {
    $data = get_data("greenhouse");
    foreach($data as $item) {
        if ($item->plant) {
            $plant = get_item("plant", ['_id'=>$item->plant]);
            if ($item->time > $plant->time_seed + $plant->time_sprout + $plant->time_grow + $plant->time_flower) {
                echo "<li> Теплиця " . $item->name . " - " . $plant->name . "</li>";
            }
        }
    }
}

function build_ready() {
    $data = get_data("greenhouse", ['plant'=>null]);
    foreach($data as $item) {
        if ($item->time > $item->kd_time) {
            echo "<li> Теплиця " . $item->name . "</li>";
        }
    }
}

function build_other() {
    $data = get_data("greenhouse");
    foreach($data as $item) {
        if ($item->plant == null) {
            if ($item->time <= $item->kd_time) {
                echo "<li> Теплиця " . $item->name . " - відпочіває, залишилось " . $item->kd_time - $item->time + 1 . "</li>";
            }
        }
        else {
            $plant = get_item("plant", ['_id'=>$item->plant]);
            $plant_time = $plant->time_seed + $plant->time_sprout + $plant->time_grow + $plant->time_flower + 1;
            if ($item->time < $plant_time) {
                echo "<li> Теплиця " . $item->name . " - посаджено " . $plant->name . ", залишилось " . $plant_time - $item->time . "</li>";
            }
        }
    }
}
?>