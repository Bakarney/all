<?php

$url="../html/index.php";
require_once 'util.php';

if(isset($_POST['add_size_green']) && isset($_POST['add_kd_time_green'])){
    // добавление теплицы
    
    $new_size= (int)htmlentities($_POST['add_size_green']);
    $new_kd_time = (int)htmlentities($_POST['add_kd_time_green']);
    
    $green_data = get_data('greenhouse');
    foreach ($green_data as $item) {
        $new_id = $item->name;
    }
    ++$new_id;

    insert_item("greenhouse", ["name"=>"$new_id", "size"=>$new_size, "kd_time"=>$new_kd_time, "plant"=>NULL, "time"=>$new_kd_time+1]);

    unset($_POST['add_size_green']);
    unset($_POST['add_kd_time_green']);
    // header("Cache-Control: no-store,no-cache,mustrevalidate");
    // header("Location: $url");
    

}

elseif(isset($_POST['id_del'])){
    // удаление теплицы по крестику
    
    $id= htmlentities($_POST['id_del']);
    
    delete_item("greenhouse", ["name"=>$id]);
    
    unset($_POST['id_del']);
    // header("Cache-Control: no-store,no-cache,mustrevalidate");
    // header("Location: $url");
}

elseif(isset($_POST['id_harvest'])){
    // сбор растения
    
    $id= htmlentities($_POST['id_harvest']);

    update_item("greenhouse", ["name"=>$id], ['$set'=>["plant"=>NULL, "time"=>1]]);
    
    unset($_POST['id_harvest']);
    // header("Cache-Control: no-store,no-cache,mustrevalidate");
    // header("Location: $url");
}


elseif(isset($_POST['id_set_plant_seed']) && isset($_POST['id_set_seed_greenhouse'])){
    // посадка растения
    
    $id_plant= htmlentities($_POST['id_set_plant_seed']);
    $id_greenhouse= htmlentities($_POST['id_set_seed_greenhouse']);

    $id_plant = get_item("plant", ["name"=>$id_plant])->_id;

    update_item("greenhouse", ["name"=>$id_greenhouse], ['$set'=>["plant"=>$id_plant, "time"=>1]]);
    
    unset($_POST['id_set_plant_seed']);
    unset($_POST['id_set_seed_greenhouse']);
    // header("Cache-Control: no-store,no-cache,mustrevalidate");
    // header("Location: $url");

}
elseif(isset($_POST['run'])){
    
    // run
    
    $run_i= htmlentities($_POST['run']);
    
    $green_data = get_data("greenhouse");
    foreach ($green_data as $green) {
        update_item("greenhouse", ["name"=>$green->name], ['$set'=>["time"=>$green->time+$run_i]]);
    }
    
    unset($_POST['run']);
    // header("Cache-Control: no-store,no-cache,mustrevalidate");
    // header("Location: $url");
    
}



              
?>