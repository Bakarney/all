<?php
require_once "util.php";

// Сборка блоков с теплицами
function build_greenhouses() {
    $data_green = get_data("greenhouse");
    foreach ($data_green as $green) {
        $number = $green->name;
        switch ($green->size) {
            case 1:
                $size = "../media/greenhouse_1_m.png";
                break;
            case 2:
                $size = "../media/greenhouse_1_c.png";
                break;
            case 3:
                $size = "../media/greenhouse_1_b.png";
                break;
            default:
                $size = "";
        }
        if ($green->plant) {
            // подсчет стадии роста
            $plant = get_item("plant", ['_id'=>$green->plant]);
            if ($green->time <= $plant->time_seed) {
                // Семечко
                $img = $plant->img_seed;
                $next_left = $plant->time_seed - $green->time+1;
                $all_left = $plant->time_seed+$plant->time_sprout+$plant->time_grow+$plant->time_flower - $green->time+1;
                include("../html/parts/green_grow.php");
            }
            elseif ($green->time <= $plant->time_seed+$plant->time_sprout) {
                // Росток
                $img = $plant->img_sprout;
                $next_left = $plant->time_seed+$plant->time_sprout - $green->time+1;
                $all_left = $plant->time_seed+$plant->time_sprout+$plant->time_grow+$plant->time_flower - $green->time+1;
                include("../html/parts/green_grow.php");
            }
            elseif ($green->time <= $plant->time_seed+$plant->time_sprout+$plant->time_grow) {
                // Растет
                $img = $plant->img_grow;
                $next_left = $plant->time_seed+$plant->time_sprout+$plant->time_grow - $green->time+1;
                $all_left = $plant->time_seed+$plant->time_sprout+$plant->time_grow+$plant->time_flower - $green->time+1;
                include("../html/parts/green_grow.php");
            }
            elseif ($green->time <= $plant->time_seed+$plant->time_sprout+$plant->time_grow+$plant->time_flower) {
                // Цветет
                $img = $plant->img_flower;
                $next_left = $plant->time_seed+$plant->time_sprout+$plant->time_grow+$plant->time_flower - $green->time+1;
                $all_left = $next_left;
                include("../html/parts/green_grow.php");
            }
            else {
                // Созрело
                $img = $plant->img_fruit;
                include("../html/parts/green_fruit.php");
            }
        }
        else {
            // подсчет готовности теплицы
            if ($green->time <= $green->kd_time) {
                // Отдыхает
                $left = $green->kd_time - $green->time + 1;
                include("../html/parts/green_rest.php");
            }
            else {
                // Готово
                $all_plants = get_data("plant");
                include("../html/parts/green_ready.php");
            }
        }
    }
}
?>