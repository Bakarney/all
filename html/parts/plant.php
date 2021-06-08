<div class="main_sheet fade">
    <div class="main_info">
        <div class="main_title">
            <img onclick="plusSlides(-1)" src="../media/btn/arrow_left.png">
            <p> <?php echo $plant->name; ?> </p>
            <img onclick="plusSlides(1)" src="../media/btn/arrow_right.png">
        </div>
        <div class="main_text">
            <p>
                Розмір рослини: <?php echo $plant->size; ?> 
            </p>
            <p>
                <?php echo $plant->description; ?>
            </p>
        </div>
        <div class="inside_buttons_block">
            <button class="inside_button btn_add"></button>
            <button class="inside_button btn_delete"></button>
        </div>
    </div>
    <div class="main_tape">
        <div class="tape_time_info">
            <div class="tape_time"><p> <?php echo $plant->time_seed; ?> </p></div>
            <div class="tape_time"><p> <?php echo $plant->time_sprout; ?> </p></div>
            <div class="tape_time"><p> <?php echo $plant->time_grow; ?> </p></div>
            <div class="tape_time"><p> <?php echo $plant->time_flower; ?> </p></div>
            <div class="tape_time"><p> <?php echo $plant->time_seed + $plant->time_sprout + $plant->time_grow + $plant->time_flower; ?> </p></div>
        </div>
        <div class="tape_cells">
            <div class="tape_age_left"></div>
            <div class="tape_cell">
                <img src=<?php echo $plant->img_seed; ?>>
            </div>
            <div class="tape_cell">
                <img src=<?php echo $plant->img_sprout; ?>>
            </div>
            <div class="tape_cell">
                <img src=<?php echo $plant->img_grow; ?>>
            </div>
            <div class="tape_cell">
                <img src=<?php echo $plant->img_flower; ?>>
            </div>
            <div class="tape_cell">
                <img src=<?php echo $plant->img_fruit; ?>>
            </div>
            <div class="tape_age_right"></div>
        </div>
    </div>
</div>