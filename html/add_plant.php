<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    
    <link rel="stylesheet" href="../css/flowers.php">
    <link rel="stylesheet" href="../css/add_plant.php">

    <script defer src="../js/slideshow_1.js"></script>
    <link rel="stylesheet" href="../css/slideshow_1.css">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Gabriela&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <img src="../media/hogwarts_1.png" alt="hogwarts emblem" class="header_img">
        <div class="site_name">Теплиці Cпраут</div>
        <div class="page_buttons">
            <button class="page_button btn_books" onclick="document.location='./books.php'">
                <img src="../media/btn/books.png" alt="книги">
                <p class="clip">Звіт</p>
            </button>
            <button class="page_button btn_greenhouse" onclick="document.location='./index.php'">
                <img src="../media/btn/greenhouse.png" alt="теплиця">
                <p class="clip">Теплиці</p>
            </button>
            <button class="page_button btn_plant" onclick="document.location='./flowers.php'">
                <img src="../media/btn/plant_flower_2.png" alt="квітка">
                <p class="clip">Рослини</p>
            </button>
        </div>
        <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
              <span></span>
            </label>
            <ul class="menu__box">
              <li><a class="menu__item" href="./flowers.html">Рослини</a></li>
              <li><a class="menu__item" href="./books.html">Звіт</a></li>
              <li><a class="menu__item" href="./index.html">Теплиці</a></li>
            </ul>
        </div>
    </header>
<form id="form" enctype="multipart/form-data" method="POST">   
    <div class="main">
        <div class="line">
            
            <div class="main_sheet fade">
                <div class="main_info">
                    <div class="main_title">
                        <input class="main_title_input" type="text" name="name" placeholder="Назва"></input>
                    </div>
                    <div class="main_text">
                        <p>
                            <select name="size" class="main_select_greenhouse">
                                <option disabled selected="selected">Розмір</option>
                                <option value="Мала">Мала</option>
                                <option value="Середня">Середня</option>
                                <option value="Велика">Велика</option>
                            </select> 
                        </p>
                        <p>
                            <textarea form="form" name="description" placeholder="Опис"></textarea>
                        </p>
                    </div>
                </div>
                <div class="main_tape">
                    <div class="tape_time_info">
                        <input class="time" type="number" name="time_seed" placeholder="time_seed"></input>
                        <input class="time" type="number" name="time_sprout" placeholder="time_sprout"></input>
                        <input class="time" type="number" name="time_grow" placeholder="time_grow"></input>
                        <input class="time" type="number" name="time_flower" placeholder="time_flower"></input>
                        <input class="time" type="number" name="time_fruit" value="" style="visibility: hidden;"></input>
                    </div>
                    <div class="tape_cells">
                        <div class="tape_age_left"></div>
                        <div class="tape_cell">
                            <input class="file" type="file" name="img_seed" size="10"></input>
                        </div>
                        <div class="tape_cell">
                            <input class="file" type="file" name="img_sprout" size="10"></input>
                        </div>
                        <div class="tape_cell">
                            <input class="file" type="file" name="img_grow" size="10"></input>
                        </div>
                        <div class="tape_cell">
                            <input class="file" type="file" name="img_flower" size="10"></input>
                        </div>
                        <div class="tape_cell">
                            <input class="file" type="file" name="img_fruit" size="10"></input>
                        </div>
                        <div class="tape_age_right"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>





    <div class="side_buttons">
        <div class="side_buttons_filler"></div>
        <div class="side_buttons_rcenter">
            <button type="submit" class="side_button btn_add"></button>
            <button type="reset" class="side_button btn_delete" onclick="document.location='./flowers.php'"></button>
        </div>
    </div>
</form>
</body>
</html>