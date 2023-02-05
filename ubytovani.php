<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9d291e9016.js" crossorigin="anonymous"></script>
    <script src = "script.js"></script>
</head>
<body>
    <div class="strip"></div>
    <header id = "header">
        <div id="sidebar">  
            <div class="logo-menu">
            <a href = "index.php"><img src = "vinarstvi/logoTibor.png" id = "menu-item-id7" class = "logo_menu_pic" onmouseenter = "larger7()" onmouseleave="shrink7()"></a>

            </div>  
            <div class="logo-nav">
                <ul>
                    <a href = "index.php"><li id = "menu-item-id1" onmouseenter = "larger1()" onmouseleave="shrink1()">Domů</li></a>
                    <a href = "story.php"><li id = "menu-item-id2"  onmouseenter = "larger2()" onmouseleave="shrink2()">Náš Příběh</li></a>
                    <a href = "vinarstvi.php"><li id = "menu-item-id3"  onmouseenter = "larger3()" onmouseleave="shrink3()">Vinařství</li></a>
                    <a href = "degustace.php"><li id = "menu-item-id4"  onmouseenter = "larger4()" onmouseleave="shrink4()">Degustace</li></a>
                    <a href = "eshop.php"><li id = "menu-item-id5"  onmouseenter = "larger5()" onmouseleave="shrink5()">E-shop</li></a>
                    <a href = "kontakt.php"><li id = "menu-item-id6"  onmouseenter = "larger6()" onmouseleave="shrink6()">Kontakt</li></a>
                    <a href = "ubytovani.php"><li class = "selected" id = "menu-item-id8"  onmouseenter = "larger8()" onmouseleave="shrink8()">Ubytování</li></a>                   
                </ul>
            </div> 
            <div class="kontakt-menu">
                <i class="fa-solid fa-phone menu-icon-left"></i>
                +420 606 715 417 <a href = "Kontakt.php" target = "__blank"><i class="fa-brands fa-facebook menu-icon-right"></i></a>
                <a href = "Kontakt.php" target = "__blank"><i class="fa-brands fa-instagram menu-icon-right"></i></a>
            </div>
        </div>
        <div id="toggle-btn" onclick="show(), move(), btn(), krajina()">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>
    <div class="header-kontakt">
        <div class="header-text">
            <div class="header-nadpis">Ubytování</div>
            <div class="header-podnadpis">V sezóně máme otevřeno<br> každý čtvrtek až neděle.</div>
        </div>
        <img src = "fotky-ubytovani/pic1.png" class = "kontakt-pic">        
    </div>

    <div class="ubyt-header"><h2>Ubytování</h2>Velké Bílovice jsou plné tradic, folklóru a dobrého vína.<br> Objevte i vy kouzlo našeho kraje.</div>




    <div class="ubyt-content">
        <div class="ubyt">
            <div class="ubyt-picture1"><img src = "fotky-ubytovani/pic3.png" class = "ubyt-pic-legit"></div>
            <div class="ubyt-text1">
                <h2>Apartmán 1</h2>
                Vinotéka je součástí vinařství, kde se může každý stavit pro víno nejlépe po telefonické dohodě, celoročně od 8:00 do 16:00hod.<br>Objednávky příjímáme na telefonním čísle +420 606 715 417.<br><br>Počet osob:<br>-max. 6 + možnost přistýlky<br>Vybavení:<br>- kuchyňka<br>- sociální zařízení<br>- wifi<br>- tv<br>- lednice<br>- klimatizace<br>
            </div>
        </div>
        <div class="ubyt">
            <div class="ubyt-text2">
                <h2>Apartmán 2</h2>
                Vinotéka je součástí vinařství, kde se může každý stavit pro víno nejlépe po telefonické dohodě, celoročně od 8:00 do 16:00hod.<br>Objednávky příjímáme na telefonním čísle +420 606 715 417.<br><br>Počet osob:<br>-max. 6 + možnost přistýlky<br>Vybavení:<br>- kuchyňka<br>- sociální zařízení<br>- wifi<br>- tv<br>- lednice<br>- klimatizace<br>
            </div>
            <div class="ubyt-picture2 pomoc-ubyt2"><img src = "fotky-ubytovani/pic5.png" class = "ubyt-pic-legit"></div>
        </div>
        <div class="ubyt">
            <div class="ubyt-picture1 pomoc-ubyt3"><img src = "fotky-ubytovani/pic2.png" class = "ubyt-pic-legit"></div>
            <div class="ubyt-text1">
                <h2>Apartmán 3</h2>
                Vinotéka je součástí vinařství, kde se může každý stavit pro víno nejlépe po telefonické dohodě, celoročně od 8:00 do 16:00hod.<br>Objednávky příjímáme na telefonním čísle +420 606 715 417.<br><br>Počet osob:<br>-max. 6 + možnost přistýlky<br>Vybavení:<br>- kuchyňka<br>- sociální zařízení<br>- wifi<br>- tv<br>- lednice<br>- klimatizace<br>
            </div>
        </div>
        <div class="ubyt">
            <div class="ubyt-text2">
                <h2>Apartmán 4</h2>
                Vinotéka je součástí vinařství, kde se může každý stavit pro víno nejlépe po telefonické dohodě, celoročně od 8:00 do 16:00hod.<br>Objednávky příjímáme na telefonním čísle +420 606 715 417.<br><br>Počet osob:<br>-max. 6 + možnost přistýlky<br>Vybavení:<br>- kuchyňka<br>- sociální zařízení<br>- wifi<br>- tv<br>- lednice<br>- klimatizace<br>
            </div>
            <div class="ubyt-picture2"><img src = "fotky-ubytovani/pic4.png" class = "ubyt-pic-legit"></div>
        </div>
    </div>




    <div class="map-container">
        <div class="help-map">
            <div class="text-mapa">
                <img src = "vinarstvi/logoTibor.png" class = "text-mapa-logo"><br>
                <div class="mapa-adresa">
                    Tibor Zapletal<br>
                    Ke Kapličce<br>
                    69102, Velké Bílovice<br>
                    Česká Republika<br><br>
                </div>
                <div class="mapa-kontakt">
                    tibor@vinarstvi.cz<br>
                    +420 606 715 417
                </div>
            </div>
            <img src = "vinarstvi/mapa.png" class = "mapa">
        </div>
    </div>



    <footer>
        © 2021 | www.vinozapletal.cz


    </footer>
    
</body>
</html>