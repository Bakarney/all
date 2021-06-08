<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprout greenhouses: Notes</title>

    <link rel="stylesheet" href="../css/books.php">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Gabriela&display=swap" rel="stylesheet">
</head>
<body>

    <?php
        require_once "../php/books.php";
    ?>

    <header>
        <img src="../media/hogwarts_1.png" alt="hogwarts emblem" class="header_img">
        <div class="site_name">Теплиці Cпраут</div>
        <div class="page_buttons">
            <button class="page_button btn_plant" onclick="document.location='./flowers.php'">
                <img src="../media/btn/plant_flower_2.png" alt="квітка">
                <p class="clip">Рослини</p>
            </button>
            <button class="page_button btn_greenhouse" onclick="document.location='./index.php'">
                <img src="../media/btn/greenhouse.png" alt="теплиця">
                <p class="clip">Теплиці</p>
            </button>
            <button class="page_button btn_books" onclick="document.location='./books.php'">
                <img src="../media/btn/books.png" alt="книги">
                <p class="clip">Звіт</p>
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


    <div class="main">
        <div class="line">
            <div class="list">
                <ul>
                    <li>Зібрати:</li>
                    <ol>
                        <?php
                        build_fruit();
                        ?>
                    </ol>
                    <li>Посадити:</li>
                    <ol>
                        <?php
                        build_ready();
                        ?>
                    </ol>
                    <li>Інші:</li>
                    <ol>
                        <?php
                        build_other();
                        ?>
                    </ol>
                </ul>
            </div>
        </div>
    </div>




    <div class="side_buttons">
        <div class="side_buttons_filler"></div>
        <div class="side_buttons_rcenter">
            <button class="side_button btn_download"></button>
            <button class="side_button btn_up" onclick="document.location='#'"></button>
        </div>
    </div>
    
    
    
    <footer>
        <div class="footer_img">
            <img src="../media/hello_sprout_1.png" alt="Pomona Spraut" >
        </div>
        <div class="footer_text">
            <p>Професор П.Спраут: «Буботубери. Їх необхідно віджати. Ви зберете гній.»</p>
            <p>Сімус Фінніган: «Що-що?»</p>
            <p>Професор П.Спраут: «Гній, Фінніган, гній. І він дуже цінний, так що не витрачайте його задарма. Ви зберете гній, я кажу, у ці склянки».</p>
        </div>
    </footer>

</body>
</html>