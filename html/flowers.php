<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    
    <link rel="stylesheet" href="../css/flowers.php">

    <script defer src="../js/slideshow_1.js"></script>
    <link rel="stylesheet" href="../css/slideshow_1.css">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Gabriela&display=swap" rel="stylesheet">
</head>
<body>

    <?php
    require_once "../php/flowers.php";
    ?>

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
              <li><a class="menu__item" href="./flowers.php">Рослини</a></li>
              <li><a class="menu__item" href="./books.php">Звіт</a></li>
              <li><a class="menu__item" href="./index.php">Теплиці</a></li>
            </ul>
        </div>
    </header>
    
    <div class="main">
        <div class="line">
            
                <?php
                build_plant();
                ?>

        </div>
    </div>





    <div class="side_buttons">
        <div class="side_buttons_filler"></div>
        <div class="side_buttons_rcenter">
            <button class="side_button btn_add" onclick="document.location='./add_plant.php'"></button>
            <button class="side_button btn_delete"></button>
        </div>
    </div>
</body>
</html>