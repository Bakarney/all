<!-- <script>
        function test(id) {
            elem = document.getElementById(id);
            elem.value = window.pageYOffset;
            alert("высота экрана на момент нажатия реади "+id+" "+elem.value);
        }
    </script> -->

<div class="main_element_greenhouse">
    <div class="main_greenhouse_control">
        <p class="main_greenhouse_control_number"><?php echo $res_ID_greenhouse ?></p>
        <form method="POST" onsubmit="test('delete_greenhouse_block')">
            <input type='hidden' name='id_del' value='<?php echo  $res_ID_greenhouse?>' />
            <input id="detete_greenhouse_block" type="hidden" name="scroll" value="">     
            <button class='main_greenhouse_control_delete' type='submit' ></button>
        </form>
    </div>
    <div class="main_greenhouse_1_in_row">
        <div class="main_greenhouse_void main_greenhouse_1">
            <div class="main_greenhouse_void_size <?php echo $size_greenhouse_class ?>"></div>

        </div>
        <form class="main_greenhouse_text" method="POST">
            <div class="select">
                <select required class="main_select_greenhouse" name="id_set_plant_seed">
                    <option disabled selected="selected" value=''>Рослина</option>
                    <?php
                    // вывод доступных растений в зависимости от размеров теплицы
                        select_plant($res_ID_greenhouse);
                    ?>
                </select>
            </div>
            <input type='hidden' name='id_set_seed_greenhouse' value='<?php echo  $res_ID_greenhouse?>' />
            <input id="add_plant_in_greenhouse_block" type="hidden" name="scroll" value="">  
            <button class="main_btn_greenhouse" type='submit' onclick="test('add_plant_in_greenhouse_block')">Посадити</button>
        </form>
    </div>
</div>