<div class="main_element_greenhouse">
    <div class="main_greenhouse_control">
        <p class="main_greenhouse_control_number"><?php echo $number; ?></p>
        <form method="POST">
            <input type='hidden' name='id_del' value='<?php echo $number; ?>' />
            <input id="detete_greenhouse_block" type="hidden" name="scroll" value="">     
            <button class='main_greenhouse_control_delete' type='submit' onclick="test('delete_greenhouse_block')"></button>
        </form>
    </div>
    <div class="main_greenhouse_1_in_row">
        <div class=" main_greenhouse_void main_greenhouse_1">
            <div class=" main_greenhouse_void_size" style='<?php echo "background-image: url($size);"; ?>'></div>
            <div class="main_greenhouse_plant" style='<?php echo "background-image: url(" . $img . ");"; ?>'></div>
        </div>
        
        <form class="main_greenhouse_text" method="POST">
            <input type='hidden' name='id_harvest' value='<?php echo $number; ?>' />
            <input id="harvest_fruit_in_greenhouse_block" type="hidden" name="scroll" value="">
            <button class="main_btn_greenhouse" type="submit" onclick="test('harvest_fruit_in_greenhouse_block')">Зібрати</button>
        </form>
    </div>
</div>