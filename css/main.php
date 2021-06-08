<?php
    header("Content-type: text/css; charset: UTF-8");
?>

:root {
    --br: #b6a48b;
    --br_dark: #8d7c65;
    --gr: #d6efbf;
    --wh: white;
    --lb: #fffbf5;
    --shadow: rgba(0,0,0,0.5);
    --gr_border: 7px;
    --gr_border1-2: 3.5px;
}


body {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    min-width: 375px;
    height: 100%;
    min-height: 500px;
    margin: 0;
    background-color: var(--br);
    font-family: Gabriola;
    box-sizing: border-box;
    z-index: -999;
}
@media all and (max-width: 600px) {
    body{
        align-items: start;
    }
}

#menu__toggle {
    opacity: 0;
}
.menu__btn {
    display: flex;
    align-items: center;
    position: absolute;
    top: 2vh;
    right: 6vw;
    width: 26px;
    height: 26px;
    cursor: pointer;
    z-index: 11;
}
/* добавляем "гамбургер" */
.menu__btn > span,
.menu__btn > span::before,
.menu__btn > span::after {
    display: block;
    position: absolute;
    width: 100%;
    height: 2px;
    background-color: var(--br_dark);
}
.menu__btn > span::before {
    content: '';
    top: -8px;
}
.menu__btn > span::after {
    content: '';
    top: 8px;
}
/* контейнер меню */
.menu__box {
    display: block;
    position: absolute;
    visibility: hidden;
    top: -10000%;
    left: 50vw;
    
    width: 50vw;
    height: 30vh;
    margin: 0;
    padding: 10vh 0 1vh 0;
    list-style: none;
    text-align: center;
    background-color: var(--lb);
    box-shadow: 1px 0px 6px rgba(0, 0, 0, .2);
    z-index: 10;
}
/* элементы меню */
.menu__item {
    display: block;
    padding: 1vh 10vw;
    color: #333;
    font-size: 150%;
    font-weight: bold;
    text-decoration: none;
}
.menu__item:hover {
    background-color: var(--gr);
}
#menu__toggle:checked ~ .menu__btn > span {
    transform: rotate(45deg);
}
#menu__toggle:checked ~ .menu__btn > span::before {
    top: 0;
    transform: rotate(0);
}
#menu__toggle:checked ~ .menu__btn > span::after {
    top: 0;
    transform: rotate(90deg);
}
#menu__toggle:checked ~ .menu__box {
    visibility: visible;
    top:0;
}
.menu__btn > span,
.menu__btn > span::before,
.menu__btn > span::after {
    transition-duration: .25s;
}
.menu__box {
    transition-duration: .25s;
}
.menu__item {
    transition-duration: .25s;
}



@media all and (max-width: 2000px) {
    .header_img {
        height: 100%;
    }
    .site_name {
        font-size: 300%;
    }
    .hamburger-menu {
        display: none;
    }
    .page_buttons button {
        display: flex;
    }
}
@media all and (max-width: 1000px) {
    .header_img {
        height: 80%;
    }
    .site_name {
        font-size: 250%;
    }
    .hamburger-menu {
        display: inline;
    }
    .page_buttons button {
        display: none;
    }
}
header {
    width: 94%;
    height: 7vh;
    min-height: 40px;

    padding: 0.5% 5% .5% 1%;
    box-shadow: 0 0 10px var(--shadow);
    
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    
    background-color: var(--gr);
    z-index: 6;
}
.site_name {
    color: var(--wh);
    text-shadow: var(--br_dark) 1px 1px 0, var(--br_dark) -1px -1px 0, 
    var(--br_dark) -1px 1px 0, var(--br_dark) 1px -1px 0;
}
.page_buttons{
    height: 90%;
    min-height: 36px;
    display: flex;
    flex-direction: row;
}
.page_button {
    display: flex;
    flex-direction: row;
    align-items: center;
    font-size: 200%;
    justify-content: space-evenly;

    cursor: pointer; 
    /* min-width: 36px; */
    background-color: var(--wh);
    border: var(--br) 2px solid;
    margin-right: var(--gr_border);
    font-family: Gabriola;

    transition: 0.5s all;
}
.page_button:hover {
    box-shadow: inset 0 0 10px rgba(0,0,0,.2),
    0 2px 0 rgba(255,255,255,.4),
    inset 0 2px 0 rgba(0,0,0,.1);
    transition: 0.5s all;
}
.page_button img {
    height: 85%;
    margin: 0 0.3vw;
}
p.clip {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: clip;
}
.btn_plant {
    order: 1;
}
.btn_books {
    order: 2;
}
.btn_greenhouse{
    width: 10vw;
    min-width: 200px;
    order: 3;
}
.btn_books p{
    display: none;
}
.btn_plant p{
    display: none;
}
.btn_plant, .btn_books {
    width: 3vw;
    min-width:80px;
}
.btn_plant:hover, .btn_books:hover{
    width: 10vw;
    min-width: 200px;
}
.btn_plant:hover ~ .btn_greenhouse{
    width: 3vw;
    min-width:80px;
}
.btn_books:hover ~ .btn_greenhouse{
    width: 3vw;
    min-width:80px;
}
.btn_books:hover>p{
    display: inline;
}
.btn_books:hover  ~ .btn_greenhouse>p{
    display: none;
}
.btn_plant:hover>p{
    display: inline;
}
.btn_plant:hover  ~ .btn_greenhouse>p{
    display: none;
}
    









.main {
    width: 90%;
    min-height: 63.5vh;
    padding: var(--gr_border1-2);
    background-color: var(--wh);
    z-index: 5;
    display: flex;
    flex-direction: row;
    justify-content: center;
    flex-wrap: wrap;
}
.main_element_greenhouse {
    width: 31%;
    min-width: 180px;
    height: 300px;
    background-color: var(--lb);
    margin: var(--gr_border1-2);
    border: var(--gr_border) solid var(--gr);
    display: flex;
    flex-direction: column;
    align-items: center;
}
.main_greenhouse_control{
    width: 100%;
    height:15%;
    font-family: 'Times New Roman';
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    position: relative;
}
.main_greenhouse_control_number{
    width: 10%;
    margin-left: 5%;
}
.main_greenhouse_control_delete{
    margin-right: 5%;
    width: 30px;
    height: 30px;
    border: var(--br) 2px solid;
    cursor: pointer;
    border-radius: 50%;
    background-color: var(--wh);
    background-position: center, center;
    background-repeat: no-repeat;
    background-image: url(../media/btn/delete.png);
    background-size: 50%;
    position: absolute;
    z-index: 5;
    top: 50%;
    right: 0;
    transform:translate(0, -50%);
}
.main_greenhouse_control_delete:hover {
    box-shadow: inset 0 0 10px rgba(0,0,0,.2),
    0 2px 0 rgba(255,255,255,.4),
    inset 0 2px 0 rgba(0,0,0,.1);
    transition: 0.5s all;
  }
.main_greenhouse_control_delete_void{
    width: 30px;
    height: 30px;
}
.main_greenhouse_1_in_row{
    height: 85%;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.main_greenhouse_void{
    width: 100%;
    max-width: 191.7px;
    min-width: 100px;
    height: 100%;
    position: relative;
    background-position: center, center;
    background-repeat: no-repeat;
    background-size: 90%;
    display: flex;
    align-items: flex-end;
}
.main_greenhouse_1{
    background-image: url(../media/greenhouse_1_void.png);
}
.main_greenhouse_2{
    background-image: url(../media/greenhouse_2_void.png);
}
.main_greenhouse_new{
    background-image: url(../media/greenhouse_new.png);
}
.main_greenhouse_void_size{
    width: 100%;
    max-width: 191.7px;
    min-width: 100px;
    height: 100%;
    position: absolute;
    background-position: center, center;
    background-repeat: no-repeat;
    background-size: 90%;
}
.main_greenhouse_size_m{
    background-image: url(../media/greenhouse_1_m.png);
}
.main_greenhouse_size_c{
    background-image: url(../media/greenhouse_1_c.png);
}
.main_greenhouse_size_b{
    background-image: url(../media/greenhouse_1_b.png);
}
.main_greenhouse_plant{
    width: 100%;
    height: 100%;
    background-position: bottom;
    background-repeat: no-repeat;
    margin-bottom: 25%;
}
.main_greenhouse_text{
    width: 100%;
    height:30%;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    align-items: center;
    margin: 5%;
}
.main_greenhouse_text p{
    line-height: 95%;
    text-indent: -10%;
    width: 90%;
    margin: 0 0 0 10%; 
}
.main_btn_greenhouse{
    width: 70%;
    font-size: 110%;
    cursor: pointer; 
    height: 25%;
    min-height: 20px;
    background-color: var(--wh);
    border: var(--br) 2px solid;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: Gabriola;
}
.main_btn_greenhouse:hover {
    box-shadow: inset 0 0 10px rgba(0,0,0,.2),
    0 2px 0 rgba(255,255,255,.4),
    inset 0 2px 0 rgba(0,0,0,.1);
    transition: 0.5s all;
}
.select {
    width: 95%;
    min-width: 100px;
    height: 25%;
    min-height: 20px;
    background-color: var(--wh);
    border: var(--br) 2px solid;
    overflow: hidden;
    position: relative;
    display: flex;
    justify-content: center;
    cursor: pointer;
}

.select select {
    width: 100%;
    font-family: Gabriola;
    font-size: 110%;
    
    margin: 0;
    border: 0;
    position: relative;
    z-index: 99;
    background: none;
    outline: none;
    cursor: pointer;

    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
  }
.select:after{
    width: 30px;
    height: 30px;
    background-position: center, center;
    background-repeat: no-repeat;
    background-image: url(../media/btn/down.png);
    background-size: 50%;
    position: absolute;
    z-index: 98;
    
    top: 50%;
    right: 0;
    content: "";
    transform:translate(0, -50%);
    background-color: var(--wh);
}
.input {
    width: 95%;
    min-width: 100px;
    height: 25%;
    min-height: 20px;
    background-color: var(--wh);
    border: var(--br) 2px solid;
    overflow: hidden;
    position: relative;
    display: flex;
    justify-content: center;
    cursor: pointer;
}
.input input{
    width: 100%;
    font-family: Gabriola;
    font-size: 110%;
    
    margin: 0;
    border: 0;
    position: relative;
    z-index: 99;
    background: none;
    outline: none;
    cursor: pointer;
    display: flex;
    justify-content: center;
}
.input input::placeholder {
    color: black;
    margin: 0;
    padding: 0;
}












.side_buttons{
    width:100%;
    position: fixed;
    display: flex;
    flex-direction: row;
    z-index: 4;
    top: 10vh;
}
.side_buttons_filler{
    width: 95%; 
}
.side_buttons_rcenter{
    width: 5%;
    display: flex;
    flex-direction: column;
    align-items: center;
    
}
.side_button{
    position: relative;
    z-index: 999;
    width: 30px;
    height: 30px;
    border: var(--wh) 2px solid;
    margin-bottom: 1vh;
    cursor: pointer;
    border-radius: 50%;
    background-position: center, center;
    background-repeat: no-repeat;
    
}
.side_button:hover {
    box-shadow: inset 0 0 10px rgba(0,0,0,.2),
    0 2px 0 rgba(255,255,255,.4),
    inset 0 2px 0 rgba(0,0,0,.1);
    transition: 0.5s all;
  }
.btn_run{
    background-image: url("../media/btn/run.png");
    background-size: 40%;
}
.btn_runrun{
    background-image: url("../media/btn/runrun.png");
    background-size: 50%;
}
.btn_add{
    background-image: url("../media/btn/add.png");
    background-size: 50%;
}
.btn_up{
    background-image: url("../media/btn/up.png");
    background-size: 50%;
}
@media screen  and (max-width: 1000px){
    .main {
        width: 80%;  
    }
    .side_buttons_filler{
        width: 91%; 
    }
    .side_buttons_rcenter{
        width: 9%;
    }
}
@media screen  and (max-width: 600px){
    .side_buttons_filler{
        width: 81%; 
    }
    .side_buttons_rcenter{
        width: 19%;
    }
}






.footer_name {
    display: flex;
    justify-content: flex-end;
}


footer {
    width: 100%;
    height: 25vh;
    min-height: 200px;
    box-shadow: 0 0 10px var(--shadow);
    
    display: flex;
    flex-direction: row;
    justify-content: space-evenly;
    justify-self: center;
    
    background-color: var(--gr);
    z-index: 6;
}
.footer_img {
    height: 90%;
    z-index: 6;
    
    display: flex;
    align-items: flex-end;
} 
.footer_text {
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.footer_text p {
    margin: 0;
    line-height: 95%;
}
@media all and (max-width: 2000px) {
    .footer_img img {
        height: 160%;
    }
    .footer_text {
        width: 70%;
        font-size: 200%;
        
    }
}
@media all and (max-width: 1000px) {
    .footer_text {
        margin-left: 2%;
        width: 50%;
        font-size: 120%;
        
    }
    footer {
        height: 20vh;
        min-height: 200px;
    }
}
@media all and (max-width: 600px) {
    .footer_img img {
        height: 120%;
    }
    .footer_text {
        margin-left: 1%;
        width: 50%;
        font-size: 110%;
        
    }
    footer {
        height: 30vh;
        min-height: 200px;
    }
}














@media screen and (max-width: 600px){
    .main {
        width: 80%;
    }
    .main_element_greenhouse {
        width: 90%;
        height: 200px;
    }
    .main_greenhouse_control{
        height:30%;
    }
    .main_greenhouse_1_in_row{
        height: 70%;
        flex-direction: row;
        align-items: center;
    }
    .main_greenhouse_void{
        max-width: 150px;
        min-width: 150px;
    }
    .main_greenhouse_void_size{
        max-width: 150px;
        min-width: 150px;
    }
    .main_greenhouse_plant{
        background-size: 40%;
    }
    .main_greenhouse_text{
        margin: 1%;
        height:70%;
    }
}



.durian_seed{background-image: url(../media/plants/durian_seed.png);}
.durian_sprout{background-image: url(../media/plants/durian_sprout.png);}
.durian_grow{background-image: url(../media/plants/durian_grow.png);}
.durian_flower{background-image: url(../media/plants/durian_flower.png);}
.durian_fruit{background-image: url(../media/plants/durian_fruit.png);}

.pomegranate_seed{background-image: url(../media/plants/pomegranate_seed.png);}
.pomegranate_sprout{background-image: url(../media/plants/pomegranate_sprout.png);}
.pomegranate_grow{background-image: url(../media/plants/pomegranate_grow.png);}
.pomegranate_flower{background-image: url(../media/plants/pomegranate_flower.png);}
.pomegranate_fruit{background-image: url(../media/plants/pomegranate_fruit.png);}

.watermelon_seed{background-image: url(../media/plants/watermelon_seed.png);}
.watermelon_sprout{background-image: url(../media/plants/watermelon_sprout.png);}
.watermelon_grow{background-image: url(../media/plants/watermelon_grow.png);}
.watermelon_flower{background-image: url(../media/plants/watermelon_flower.png);}
.watermelon_fruit{background-image: url(../media/plants/watermelon_fruit.png);}

.dragon_seed{background-image: url(../media/plants/dragon_seed.png);}
.dragon_sprout{background-image: url(../media/plants/dragon_sprout.png);}
.dragon_grow{background-image: url(../media/plants/dragon_grow.png);}
.dragon_flower{background-image: url(../media/plants/dragon_flower.png);}
.dragon_fruit{background-image: url(../media/plants/dragon_fruit.png);}

.garlic_seed{background-image: url(../media/plants/garlic_seed.png);}
.garlic_sprout{background-image: url(../media/plants/garlic_sprout.png);}
.garlic_grow{background-image: url(../media/plants/garlic_grow.png);}
.garlic_flower{background-image: url(../media/plants/garlic_flower.png);}
.garlic_fruit{background-image: url(../media/plants/garlic_fruit.png);}

.eggplant_seed{background-image: url(../media/plants/eggplant_seed.png);}
.eggplant_sprout{background-image: url(../media/plants/eggplant_sprout.png);}
.eggplant_grow{background-image: url(../media/plants/eggplant_grow.png);}
.eggplant_flower{background-image: url(../media/plants/eggplant_flower.png);}
.eggplant_fruit{background-image: url(../media/plants/eggplant_fruit.png);}

.carrot_seed{background-image: url(../media/plants/carrot_seed.png);}
.carrot_sprout{background-image: url(../media/plants/carrot_sprout.png);}
.carrot_grow{background-image: url(../media/plants/carrot_grow.png);}
.carrot_flower{background-image: url(../media/plants/carrot_flower.png);}
.carrot_fruit{background-image: url(../media/plants/carrot_fruit.png);}

.corn_seed{background-image: url(../media/plants/corn_seed.png);}
.corn_sprout{background-image: url(../media/plants/corn_sprout.png);}
.corn_grow{background-image: url(../media/plants/corn_grow.png);}
.corn_flower{background-image: url(../media/plants/corn_flower.png);}
.corn_fruit{background-image: url(../media/plants/corn_fruit.png);}

.onion_seed{background-image: url(../media/plants/onion_seed.png);}
.onion_sprout{background-image: url(../media/plants/onion_sprout.png);}
.onion_grow{background-image: url(../media/plants/onion_grow.png);}
.onion_flower{background-image: url(../media/plants/onion_flower.png);}
.onion_fruit{background-image: url(../media/plants/onion_fruit.png);}

.pepper_seed{background-image: url(../media/plants/pepper_seed.png);}
.pepper_sprout{background-image: url(../media/plants/pepper_sprout.png);}
.pepper_grow{background-image: url(../media/plants/pepper_grow.png);}
.pepper_flower{background-image: url(../media/plants/pepper_flower.png);}
.pepper_fruit{background-image: url(../media/plants/pepper_fruit.png);}

.potato_seed{background-image: url(../media/plants/potato_seed.png);}
.potato_sprout{background-image: url(../media/plants/potato_sprout.png);}
.potato_grow{background-image: url(../media/plants/potato_grow.png);}
.potato_flower{background-image: url(../media/plants/potato_flower.png);}
.potato_fruit{background-image: url(../media/plants/potato_fruit.png);}

.pumpkin_seed{background-image: url(../media/plants/pumpkin_seed.png);}
.pumpkin_sprout{background-image: url(../media/plants/pumpkin_sprout.png);}
.pumpkin_grow{background-image: url(../media/plants/pumpkin_grow.png);}
.pumpkin_flower{background-image: url(../media/plants/pumpkin_flower.png);}
.pumpkin_fruit{background-image: url(../media/plants/pumpkin_fruit.png);}

.tomato_seed{background-image: url(../media/plants/tomato_seed.png);}
.tomato_sprout{background-image: url(../media/plants/tomato_sprout.png);}
.tomato_grow{background-image: url(../media/plants/tomato_grow.png);}
.tomato_flower{background-image: url(../media/plants/tomato_flower.png);}
.tomato_fruit{background-image: url(../media/plants/tomato_fruit.png);}



