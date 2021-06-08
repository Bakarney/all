<?php
require_once "util.php";

function build_plant() {
    $data_plants = get_data("plant");
    foreach ($data_plants as $plant) {
        include("../html/parts/plant.php");
    }
}
?>