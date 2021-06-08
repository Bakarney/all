<!-- <script>
        function test(id) {
            elem = document.getElementById(id);
            elem.value = window.pageYOffset;
            alert("высота экрана на момент нажатия гроу"+id+"  "+elem.value);
        }
    </script> -->
<div class="main_element_greenhouse">
    <div class="main_greenhouse_control">
        <p class="main_greenhouse_control_number"><?php echo $res_ID_greenhouse ?></p>
        <form method="POST">
            <input type='hidden' name='id_del' value='<?php echo  $res_ID_greenhouse?>' />
            <input id="detete_greenhouse_block" type="hidden" name="scroll" value="">     
            <button class='main_greenhouse_control_delete' type='submit' onclick="test('delete_greenhouse_block')"></button>
        </form>
    </div>
    <div class="main_greenhouse_1_in_row">
        <div class="main_greenhouse_void main_greenhouse_1">
            <div class="main_greenhouse_void_size <?php echo $size_greenhouse_class ?>"></div>
            <div class="main_greenhouse_plant <?php echo $name_of_plant_stage ?>"></div>
        </div>
        
        <div class="main_greenhouse_text">
            <p>
                Час до плодів: <?php echo $res_time_to_fruit ?>
            </p>    
            <p>
                Час до наступного етапу: <?php echo $res_time_to_next_stage ?>
            </p>
        </div>
    </div>
</div>
                        