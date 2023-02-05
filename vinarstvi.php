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
                    <a href = "vinarstvi.php"><li class = "selected" id = "menu-item-id3"  onmouseenter = "larger3()" onmouseleave="shrink3()">Vinařství</li></a>
                    <a href = "degustace.php"><li id = "menu-item-id4"  onmouseenter = "larger4()" onmouseleave="shrink4()">Degustace</li></a>
                    <a href = "eshop.php"><li id = "menu-item-id5"  onmouseenter = "larger5()" onmouseleave="shrink5()">E-shop</li></a>
                    <a href = "kontakt.php"><li id = "menu-item-id6"  onmouseenter = "larger6()" onmouseleave="shrink6()">Kontakt</li></a>
                    <a href = "ubytovani.php"><li id = "menu-item-id8"  onmouseenter = "larger8()" onmouseleave="shrink8()">Ubytování</li></a>                   
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
    <div class="header-kontakt-vin">
        <div class="header-text-vin">
            <div class="header-nadpis-vin">Naše Vinařství</div>
            <div class="header-podnadpis-vin">Vyrábíme jednoduchý sortiment vín<br> z typických moravských odrůd.</div>
        </div>
        <img src = "fotky-vinarstvi/sudy-black.png" class = "kontakt-pic">        
    </div>


    <div class="vinarstvi-nadpis">
        <h2>Naše vinice</h2>
        Příběh našich vín se začal psát na nejlépe položených velkobílovických vinicích - Panské, Haňby nebo Úlehle. Tam pěstovali vinohrad už naši stařečci a pro nás je poslání v této rodinné tradici pokračovat.
    </div>

    <div class="vinarstvi-nadpis">ZDE BUDE VIDEO</div>

    <div class="vinarstvi-nadpis">
        <h2>Moderní technologie<br> v poctivých rukách</h2>
        V posledních letech se usilovně věnujeme inovacím technologií, která tak nadále umužňují obstarávat produkci z řad rodinných příslušníků a přátel.<br> Z naší produkce vychází především suchá a polosuchá vína.<br> Snažíme se vytvářet vína s osobitým charakterem typická pro naši oblast.
    </div>

    <div class="vinarstvi-pictures">
        <div class="vin-pic1"><img src = "fotky-vinarstvi/vyroba.png" class = "vin-pic-legit"></div>
        <div class="vin-pic2"><img src = "fotky-vinarstvi/baleni.png" class = "vin-pic-legit"></div>
        <div class="vin-pic3"><img src = "fotky-vinarstvi/kvasirna.png" class = "vin-pic-legit"></div>
    </div>

    <div class="blur-all">
        <div class="blur1">
            <div class="blur-text">Nakupujte u nás v e-shopu</div>
            <a href = "Eshop.php">
                <div class="vice eshop-vice">
                    <div class="vice-left shopleft"></div>
                    <div class="shopstred">E-Shop</div>
                    <div class="vice-right shopright"></div>
                </div>
            </a>
        </div>
        <div class="blur2">
            <img src = "vinarstvi/flaskyShop.png" class = "blur-pic">
        </div>
    </div>

    <div class="vinarstvi-pictures1">
        <div class="vinarstvi-pictures2">
            <div class="vin-pic1-1"></div>
            <div class="vin-pic2-1"></div>
            <div class="vin-pic3-1"></div>
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