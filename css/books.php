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
    width: 10vw;
    min-width: 200px;
    order: 2;
}
.btn_greenhouse{
    order: 3;
}
.btn_plant p{
    display: none;
}
.btn_greenhouse p{
    display: none;
}
.btn_plant, .btn_greenhouse {
    width: 3vw;
    min-width:80px;
}
.btn_plant:hover, .btn_greenhouse:hover{
    width: 10vw;
    min-width: 200px;
}
.btn_plant:hover ~ .btn_books{
    width: 3vw;
    min-width:80px;
}
.btn_greenhouse:hover ~ .btn_books{
    width: 3vw;
    min-width:80px;
}
.btn_plant:hover>p{
    display: inline;
}
.btn_plant:hover  ~ .btn_books>p{
    display: none;
}
.btn_greenhouse:hover>p{
    display: inline;
}
.btn_greenhouse:hover  ~ .btn_books>p{
    display: none;
}
    




.main {
    
    width: 90%;
    min-height: 63.5vh;
    padding: var(--gr_border1-2);
    background-color: var(--gr);
    
    display: flex;
    justify-content: center;
}
.line {
    width: 100%;
    margin: -1vh -1%;
    border-left: var(--gr_border) var(--wh) solid;
    border-right: var(--gr_border) var(--wh) solid;
}
.list {
    height: 100%;
    background-color: var(--wh);
}
.main ul {
    list-style: none;
}
.main ul li, ol li {
    line-height: 1.5;
}
  
.main ol {
    list-style: disc;
}
@media all and (max-width: 2000px) {
    .main{
        font-size: 150%;
    }
    .list {
        margin: -1vh 10%;
        padding: 3vh 5%;
        
    }
}
@media all and (max-width: 1000px) {
    .main{
        min-height: 68.4vh;
        font-size: 120%;
    }
    .list {
        margin: -2.5vh 3%;
        padding: 3vh 5% 0 0;
    }
    .main ul {
        margin-left: -5%;
    }
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
.btn_download{
    background-image: url("../media/btn/download.png");
    background-size: 60%;
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
@media all and (max-width: 600px){
    .side_buttons_filler{
        width: 81%; 
    }
    .side_buttons_rcenter{
        width: 19%;
    }
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
    z-index: 2;
}
.footer_img {
    height: 90%;
    z-index: 3;
    
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
        font-size: 160%;
        text-indent: -5%;
    }
}
@media all and (max-width: 1000px) {
    .footer_text {
        margin-left: 5%;
        width: 50%;
        font-size: 120%;
        text-indent: -15%;
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
        margin-left: 5%;
        width: 50%;
        font-size: 110%;
        text-indent: -15%;
    }
    footer {
        height: 30vh;
        min-height: 200px;
    }
}