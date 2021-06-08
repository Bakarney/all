<?php
//all functions
    function select_sizes(){
        require 'connection.php';
        $link = mysqli_connect($host, $user, $password, $database) 
            or die("Ошибка " . mysqli_error($link));

        $query ="SELECT name,number FROM sizes";
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

        if($result) {
            foreach($result as $row) {

                echo "<option value=".$row['number'].">".$row['name']."</option>";
            }
        }
        mysqli_close($link);
    }

    function show_greenhouses(){
        require 'connection.php';
        $link = mysqli_connect($host, $user, $password, $database) 
            or die("Ошибка " . mysqli_error($link));

        $query_greenhouse ="SELECT * FROM greenhouse ORDER BY ID";
        $result_greenhouse = mysqli_query($link, $query_greenhouse) or die("Ошибка " . mysqli_error($link));

        if($result_greenhouse) {
            foreach($result_greenhouse as $row) {

                $res_ID_greenhouse=$row['ID'];
                $res_time_to_next_stage=1;
                $res_time_to_fruit=1;
                $res_kd_time=1;

                $way_to_size_greenhouse="";
                $size_greenhouse_class="";
                $way_to_plant_stage="";
                $name_of_plant_stage="";
                $class=0;

                $query_plant ="SELECT * FROM plant WHERE ID=\"".$row['plant']."\"";
                $result_plant = mysqli_query($link, $query_plant) or die("Ошибка " . mysqli_error($link));

                if(empty($row['plant'])){
                    if($row['time']>$row['kd_time']){
                        //vremya sadit
                        $class=3;
                    }
                    else{
                        //vremya jdat vozobnovleniya teplicy
                        $res_kd_time+=$row['kd_time']-$row['time'];
                        $class=2;
                    }
                }
                else{
                    foreach($result_plant as $item) {
                        $time_fruit=$item['time_seed']+$item['time_sprout']+$item['time_grow']+$item['time_flower'];
                        if($time_fruit<=$row['time']){
                            //vremya cobirat urojai
                            $way_to_plant_stage=$item['img_fruit'];
                            $class=4;
                        }
                        else{
                            $res_time_to_fruit=$time_fruit-$row['time'];
                            //vremya nablyudat za etapami
                            $class=1;

                            if($row['time']<=$item['time_seed']){
                                //vremya seed
                                $res_time_to_next_stage+=$item['time_seed']-$row['time'];
                                $way_to_plant_stage=$item['img_seed'];
                            }
                            elseif($row['time']<=$item['time_seed']+$item['time_sprout']){
                                //vremya sprout
                                $res_time_to_next_stage+=$item['time_seed']+$item['time_sprout']-$row['time'];
                                $way_to_plant_stage=$item['img_sprout'];
                            }
                            elseif($row['time']<=$item['time_seed']+$item['time_sprout']+$item['time_grow']){
                                //vremya grow
                                $res_time_to_next_stage+=$item['time_seed']+$item['time_sprout']+$item['time_grow']-$row['time'];
                                $way_to_plant_stage=$item['img_grow'];
                            }
                            elseif($row['time']<=$item['time_seed']+$item['time_sprout']+$item['time_grow']+$item['time_flower']){
                                //vremya flower
                                $res_time_to_next_stage=$res_time_to_fruit;
                                $way_to_plant_stage=$item['img_flower'];
                            }
                            else{
                                //esli ono syuda, zaidet ya budu udivlena
                                echo "error show_greenhouses()";
                                die("Ошибка " . mysqli_error($link));
                            }
                        }                        
                    }
                }

                $query_s ="SELECT * FROM sizes WHERE ID=\"".$row['size']."\"";
                $result_s = mysqli_query($link, $query_s) or die("Ошибка " . mysqli_error($link));
                foreach($result_s as $row_s) {
                    $way_to_size_greenhouse=$row_s['img_size_greenhouse'];
                    $size_greenhouse_class="main_".str_replace("1","size",pathinfo($way_to_size_greenhouse, PATHINFO_FILENAME));
                }
                $name_of_plant_stage=pathinfo($way_to_plant_stage, PATHINFO_FILENAME);              
                //class teplicy i znacheniya dlya vyvedeniya opredeleny

                switch ($class) {
                    case 3:
                        //vremya sadit
                        include("../html/main_greens/green_ready.php");
                        break;
                    case 2:
                        //vremya jdat vozobnovleniya teplicy
                        include("../html/main_greens/green_rest.php");
                        break;
                    case 4:
                        //vremya cobirat urojai
                        include("../html/main_greens/green_fruit.php");
                        break;
                    case 1:
                        //vremya nablyudat za etapami
                        include("../html/main_greens/green_grow.php");
                        break;
                    default:
                        //esli ono syuda, zaidet ya budu udivlena
                        echo "error show_greenhouses()";
                        die("Ошибка " . mysqli_error($link));
                  }
            }
        }


        mysqli_close($link);
    }

    function select_plant($greenhouse_id){
        require 'connection.php';
        $link = mysqli_connect($host, $user, $password, $database) 
            or die("Ошибка " . mysqli_error($link));
        

        $query ="SELECT pl.ID, pl.name, pl.number, gr.number FROM 
        (SELECT greenhouse.*, sizes.number FROM (sizes INNER JOIN greenhouse ON sizes.ID = greenhouse.size) ) AS gr, 
        (SELECT plant.*, sizes.number FROM sizes INNER JOIN (plant) ON (sizes.ID = plant.size) ) AS pl 
        WHERE pl.number<=gr.number AND gr.ID=\"".$greenhouse_id."\"";

        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

        if($result) {
            $rows = mysqli_num_rows($result);
            for ($i = 0 ; $i < $rows ; $i+=1){
                $row = mysqli_fetch_row($result);
                
                echo "<option value=".$row[0].">".$row[1]."</option>";
                
            }
        }
        mysqli_close($link);
    

    }

?>