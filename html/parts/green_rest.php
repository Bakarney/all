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
        <div class="main_greenhouse_void main_greenhouse_2">
            <div class="main_greenhouse_void_size" style='<?php echo "background-image: url($size);"; ?>'></div>
            
        </div>
        <div class="main_greenhouse_text">
            <p>Час до відновлення: <?php echo $left; ?></p>
        </div>
    </div>
</div>