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
        <div class="main_greenhouse_void main_greenhouse_1">
            <div class="main_greenhouse_void_size" style='<?php echo "background-image: url($size);"; ?>'></div>

        </div>
        <form class="main_greenhouse_text" method="POST">
            <div class="select">
                <select required class="main_select_greenhouse" name="id_set_plant_seed">
                    <option disabled selected="selected" value=''>Рослина</option>
                    <?php
                        foreach ($all_plants as $item) {
                            if ($item->size <= $green->size) echo "<option value=" . $item->name . ">" . $item->name . "</option>";
                        } // передача данных
                    ?> 
                </select>
            </div>
            <input type='hidden' name='id_set_seed_greenhouse' value='<?php echo $number; ?>' />
            <input id="add_plant_in_greenhouse_block" type="hidden" name="scroll" value="">  
            <button class="main_btn_greenhouse" type='submit' onclick="test('add_plant_in_greenhouse_block')">Посадити</button>
        </form>
    </div>
</div>