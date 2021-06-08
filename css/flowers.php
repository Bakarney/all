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
    width: 10vw;
    min-width: 200px;
    order: 1;
}
.btn_books {
    order: 2;
}
.btn_greenhouse{
    order: 3;
}
.btn_books p{
    display: none;
}
.btn_greenhouse p{
    display: none;
}
.btn_books, .btn_greenhouse {
    width: 3vw;
    min-width:80px;
}
.btn_books:hover, .btn_greenhouse:hover{
    width: 10vw;
    min-width: 200px;
}
.btn_books:hover ~ .btn_plant{
    width: 3vw;
    min-width:80px;
}
.btn_books:hover>p{
    display: inline;
}
.btn_books:hover  ~ .btn_plant>p{
    display: none;
}
.btn_greenhouse:hover ~ .btn_plant{
    width: 3vw;
    min-width:80px;
}
.btn_greenhouse:hover>p{
    display: inline;
}
.btn_greenhouse:hover  ~ .btn_plant>p{
    display: none;
}

    




.main {
    background-color: var(--gr);
    z-index: 5;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}

.line {
    width: 100%;
    height: 100%;
    border-left: var(--gr_border) var(--wh) solid;
    border-right: var(--gr_border) var(--wh) solid;
    display: flex;
    justify-content: center;
    align-items: center;
}
.main_sheet {
    width: 95%;
    height: 90%;
    background-color: var(--lb);
    display: flex;
    justify-content: space-between;
}
.main_info {
    display: flex;
    flex-direction: column;
}
.main_title {
    margin: 2% 3%;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.main_title p {
    margin: 3% 2%;
    padding: 0;
    text-align: center;
}
.main_title img {
    cursor: pointer;
}
.main_text {
    margin: 0% 3%;
    text-align: justify;
    line-height: 100%;
}
@media all and (max-width: 2000px) {
    .main {
        width: 90%;
        height: 91vh;
    }
    .main_sheet  {
        flex-direction: column;
    }
    .main_info {
        height: 90%;       
    }
    .main_title {
        height: 17%;
        font-size: 250%;
    }
    .main_title img {
        height: 100%;
        min-height: 50px;
        max-height: 50px;
        width: 100%;
        min-width: 50px;
        max-width: 50px;
    }
    .main_text {
        font-size: 130%;
    }
    .main_tape {
        flex-direction: column;
    }
    .tape_time_info {
        flex-direction: row;
    }
    .tape_cells {
        flex-direction: row;
    }
}
@media all and (max-width: 1000px) {
    .main {
        width: 100%;
        height: 92.5vh;
    }
    .main_sheet {
        flex-direction: row;
        align-items: center;
    }
    .main_info {
        width: 70%;
        height: 100%;
        margin-left: 3%;
        
    }
    .main_title {
        height: 10%;
        font-size: 160%;
    }
    
    .main_text {
        height: 80%;
        font-size: 130%;
    }
    .main_tape {
        flex-direction: row;
    }
    .tape_time_info {
        flex-direction: column;
    }
    .tape_cells {
        flex-direction: column-reverse;
        align-items: center;
    }
}
@media all and (max-width: 600px) {
    .main_title {
        
        line-height:80%;
        font-size: 140%;
    }
    .main_info {
        width: 60%;
        margin-left: 3%;
        
    }
    .main_text {
        margin: 3% 3% 3% 0;
        height: 80%;
        font-size: 110%;
    }
    
}
@media all and (max-width: 2000px) {
    .main_tape {
        border-top: var(--gr) var(--gr_border) solid;
    }
    .tape_cell {
        width: 17%;
    }
    .tape_age_left, .tape_age_right {
        border-top: solid var(--gr) var(--gr_border);
        border-bottom: solid var(--gr) var(--gr_border);
        width: 1%;
    }
    .tape_age_left {
        border-right: solid var(--gr) var(--gr_border);
        margin: 1% 1% 1% 0;
    }
    .tape_age_right {
        border-left: solid var(--gr) var(--gr_border);
        margin: 1% 0 1% 1%;
    }
}
@media all and (max-width: 1000px) {
    .main_tape {
        height: 100%;
        width: 25%;
        border: none;
        border-left: var(--gr) var(--gr_border) solid;
        
    }
    .tape_time_info {
        width: 27%;
        flex-direction: column-reverse;
    }
    .tape_cells{
        width: 70%;
    }
    .tape_cell {
        
        width: 80%;
        height: 18%;
    }
    .tape_cell img {
        
        max-width: 80%;
        max-height: 80%;
    }
    .tape_age_left, .tape_age_right {
        border: none;
        border-right: solid var(--gr) var(--gr_border);
        border-left: solid var(--gr) var(--gr_border);
        height: 1%;
        width: 80%;
    }
    .tape_age_left {
        border-top: solid var(--gr) var(--gr_border);
        margin: 1% 1% 0 1%;
    }
    .tape_age_right {
        border-bottom: solid var(--gr) var(--gr_border);
        margin: 0 1% 1% 1%;
    }
}
@media all and (max-width: 600px) {
    .main_tape {
        width: 35%;
    }
    
}
.main_tape {
    display: flex;
    background-color: var(--wh);
    justify-content: space-between;
    
}
.tape_time_info {
    display: flex;
    justify-content: space-around;
    align-items: center;
    font-size: 150%;
    margin: -0.5% 2% -1% 2%;
    
}
.tape_time p{
    margin: 0;
    padding: 0;
}
.tape_cells {
    display: flex;
    justify-content: space-between;
    min-width: 80px;
    
}
.tape_cell {
    
    border: solid var(--gr) var(--gr_border);
    
    margin: 1%;
    display: flex;
    justify-content: center;
    align-items: flex-end;
}
.tape_cell img {
    margin: 5%;
}

.inside_buttons_block{



    display: none;
}
@media all and (max-width: 1000px) {
    .inside_buttons_block{
        height: 10%;
        width:100%;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        margin: var(--gr_border1-2);


        display: none;
        
    }
    .inside_button{
        width: 40px;
        height: 40px;
        margin: 0 var(--gr_border1-2);
        border: var(--wh) 2px solid;
        cursor: pointer;
        border-radius: 50%;
        background-position: center, center;
        background-repeat: no-repeat;
        /* z-index: 9999; */
    }
    .inside_button:hover {
        box-shadow: inset 0 0 10px rgba(0,0,0,.2),
        0 2px 0 rgba(255,255,255,.4),
        inset 0 2px 0 rgba(0,0,0,.1);
    }

}





.side_buttons{
    width:100%;
    display: flex;
    flex-direction: row;
    top: 10vh;

    display: none;
    
}
.side_buttons_filler{
    width: 95%;
}

.side_buttons_rcenter{
    display: flex;
    align-items: center;
    z-index: 10;
}
.side_button{
    width: 40px;
    height: 40px;
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
}
.btn_add{
    background-image: url("../media/btn/add.png");
    background-size: 50%;
}
.btn_delete{
    background-image: url("../media/btn/delete.png");
    background-size: 50%;
}
@media all and (max-width: 2000px) {
    .side_buttons{
        position: fixed;

        display: none;
    }
    .side_buttons_rcenter{
        flex-direction: column;
    }
    .side_buttons_rcenter{
        width: 5%;
    }
}
@media all and (max-width: 1000px) {
    .side_buttons{
        display: none;
        background-color: red;
        position: absolute;
        /* margin: 60% 110% -45% 0; */

        display: none;
        
    }
    .side_buttons_rcenter{
        flex-direction: row;
    }
    .side_buttons_rcenter{
        display: flex;
        width: 20%;
        
    }
}
