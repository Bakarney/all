<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Gabriela&display=swap" rel="stylesheet">
</head>
<body>

    <?php
    require_once "../php/main.php";
    require_once "../php/post.php";
    ?>

    <header>
        <img src="../media/hogwarts_1.png" alt="hogwarts emblem" class="header_img">
        <div class="site_name">Теплиці Cпраут</div>
        <div class="page_buttons">
            <button class="page_button btn_books" onclick="document.location='./books.php'">
                <img src="../media/btn/books.png" alt="книги">
                <p class="clip">Звіт</p>
            </button>
            <button class="page_button btn_plant" onclick="document.location='./flowers.php'">
                <img src="../media/btn/plant_flower_2.png" alt="квітка">
                <p class="clip">Рослини</p>
            </button>
            <button class="page_button btn_greenhouse" onclick="document.location='./index.php'">
                <img src="../media/btn/greenhouse.png" alt="теплиця">
                <p class="clip">Теплиці</p>
            </button>
        </div>
        <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
              <span></span>
            </label>
            <ul class="menu__box">
              <li><a class="menu__item" href="./flowers.php">Рослини</a></li>
              <li><a class="menu__item" href="./books.php">Звіт</a></li>
              <li><a class="menu__item" href="./index.php">Теплиці</a></li>
            </ul>
        </div>
    </header>
    
    <div class="main">
        
        <?php
        build_greenhouses();
        ?>

        <form class="main_element_greenhouse" method="POST" id="add_greenhouse">
            
            <div class="main_greenhouse_control">
                <p class="main_greenhouse_control_number"></p>
                <div class="main_greenhouse_control_delete_void"></div>
            </div>
            <div class="main_greenhouse_1_in_row">
                <div class=" main_greenhouse_void main_greenhouse_new">
                </div>
                <div class="main_greenhouse_text">
                    <div class="select">
                        <select required class="main_select_greenhouse"  name="add_size_green" >
                            <option disabled selected="selected"  value=''>Розмір</option>
                            <option value="1">Мала</option>
                            <option value="2">Середня</option>
                            <option value="3">Велика</option>
                        </select> 
                    </div>
                    <div class="input">
                        <input required type="number" min="1" max="99" step="1" value='' placeholder="Час на відновлення" name="add_kd_time_green">
                        
                    </div>
                    <input required id="add_greenhouse_block" type="hidden" name="scroll" value="">
                    <button class="main_btn_greenhouse"  type="submit"  onclick="test('add_greenhouse_block')"> Створити</button>
                    
                </div>
            </div>
        </form>
        
    </div>




    <div class="side_buttons">
        <div class="side_buttons_filler"></div>
        <div class="side_buttons_rcenter">
            <form method="POST">
                <input type='hidden' name='run' class="run" value='1' />
                <input id="side_button_btn_run" type="hidden" name="scroll" value="">
                <button class="side_button btn_run" type="submit" onclick="test('side_button_btn_run')"></button>
            </form>
            <form method="POST">
                <input type='hidden' name="run" class="runrun" value='5' />
                <input id="side_button_btn_runrun" type="hidden" name="scroll" value="">
                <button class="side_button btn_runrun"  type="submit" onclick="test('side_button_btn_runrun')"></button>
                
            </form>
            
            <button class="side_button btn_add" onClick="document.getElementById('#add_greenhouse').scrollIntoView();"></button>
            <button class="side_button btn_up" onclick="document.location='#'"></button>
        </div>
    </div>
    
    
    
    <footer>
        <div class="footer_img">
            <img src="../media/hello_sprout_1.png" alt="Pomona Spraut" >
        </div>
        <div class="footer_text">
            <p>«Чотири на таці -  тут великий запас горщиків - компост в мішках он там - і будьте обережними із отруйною Tentacula, в них ріжуться зубки.»</p>
            <p class="footer_name">Професор П.Спраут</p>
        </div>
    </footer>

</body>
</html>