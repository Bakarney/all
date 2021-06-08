<?php

$url="../html/index.php";
require_once 'connection.php';

if(isset($_POST['add_size_green']) && isset($_POST['add_kd_time_green'])){
    // добавление теплицы
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link));
    
    $new_size= htmlentities(mysqli_real_escape_string($link, $_POST['add_size_green']));
    $new_kd_time = htmlentities(mysqli_real_escape_string($link, $_POST['add_kd_time_green']));
   
    $new_id=1;
    
    
    $query_greenhouse ="SELECT max(ID) as max FROM greenhouse";
    $result_greenhouse = mysqli_query($link, $query_greenhouse) or die("Ошибка " . mysqli_error($link));
    if($result_greenhouse) {
        foreach($result_greenhouse as $row) {
            $new_id+=$row['max'];
        }
    }

    $query_new_green ="INSERT INTO greenhouse VALUES('$new_id','$new_size','$new_kd_time', NULL, '$new_kd_time')";

    $result_new_green = mysqli_query($link, $query_new_green) or die("Ошибка " . mysqli_error($link)); 
    if($result_new_green){

    }
    mysqli_close($link);
    // unset($_POST['add_size_green']);
    // unset($_POST['add_kd_time_green']);
    // header("Cache-Control: no-store,no-cache,mustrevalidate");
    // header("Location: $url");
    

}

elseif(isset($_POST['id_del'])){
    // удаление теплицы по крестику
    $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
    
    $id= htmlentities(mysqli_real_escape_string($link, $_POST['id_del']));
    
    $query_del_greenhouse ="DELETE FROM greenhouse WHERE ID = '$id'";
    $result_del_greenhouse = mysqli_query($link, $query_del_greenhouse) or die("Ошибка " . mysqli_error($link));
                
    mysqli_close($link);
    // unset($_POST['id_del']);
    // header("Cache-Control: no-store,no-cache,mustrevalidate");
    // header("Location: $url");
}

elseif(isset($_POST['id_harvest'])){
    // сбор растения
    $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
    
    $id= htmlentities(mysqli_real_escape_string($link, $_POST['id_harvest']));

    $query_harvest ="UPDATE greenhouse SET plant=NULL, time=1 WHERE id='$id'";
    $result_harvest = mysqli_query($link, $query_harvest) or die("Ошибка " . mysqli_error($link));
                
    mysqli_close($link);
    // unset($_POST['id_harvest']);
    // header("Cache-Control: no-store,no-cache,mustrevalidate");
    // header("Location: $url");
}


elseif(isset($_POST['id_set_plant_seed']) && isset($_POST['id_set_seed_greenhouse'])){
    // посадка растения
    $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
    
    $id_plant= htmlentities(mysqli_real_escape_string($link, $_POST['id_set_plant_seed']));
    $id_greenhouse= htmlentities(mysqli_real_escape_string($link, $_POST['id_set_seed_greenhouse']));

    $query_set_seed ="UPDATE greenhouse SET plant=$id_plant, time=1 WHERE id='$id_greenhouse'";
    $result_set_seed = mysqli_query($link, $query_set_seed) or die("Ошибка " . mysqli_error($link));
                
    mysqli_close($link);
    // unset($_POST['id_set_plant_seed']);
    // unset($_POST['id_set_seed_greenhouse']);
    // header("Cache-Control: no-store,no-cache,mustrevalidate");
    // header("Location: $url");

}
elseif(isset($_POST['run'])){

    
    // run
    $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
    
    $run_i= htmlentities(mysqli_real_escape_string($link, $_POST['run']));
    
    $query_set_seed ="UPDATE greenhouse SET time=time+'$run_i'";
    $result_set_seed = mysqli_query($link, $query_set_seed) or die("Ошибка " . mysqli_error($link));
                
    mysqli_close($link);
    // unset($_POST['run']);
    // header("Cache-Control: no-store,no-cache,mustrevalidate");
    // header("Location: $url");
    
}




              
?>
<?php
// обязательно должно быть снизу всего кода выше
// для того чтоб не было повторной отправки формы при перезагрузке страницы или переходе вперед назад

    // if (!isset($_SESSION)) {
    //     // session_start(); 
    // } 
    // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //     $_SESSION['postdata'] = $_POST;
    //     unset($_POST);
    //     header("Location: ".$_SERVER['PHP_SELF']);
    //     exit;
    // }
?>