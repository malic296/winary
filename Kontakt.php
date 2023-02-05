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
                    <a href = "kontakt.php"><li class = "selected" id = "menu-item-id6"  onmouseenter = "larger6()" onmouseleave="shrink6()">Kontakt</li></a>
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
    <div class="header-kontakt">
        <div class="header-text">
            <div class="header-nadpis">Kontakt</div>
            <div class="header-podnadpis">Žádný dotaz<br> není zbytečný.</div>
        </div>
        <img src = "fotky-kontakt/kontakt-dum.png" class = "kontakt-pic">        
    </div>

    <div class="dotaz-container">
        <div class="dotaz-texty">
            <div class="dotaz-firma">
                <h2>Firma</h2>
                Tibor Zapletal<br>
                Slíny 1380<br>
                69102 Velké Bílovice<br>
                IČ: 65808754<br>
                DIČ: CZ7612034067
            </div>
            <div class="dotaz-vinarstvi">
                <h2>Vinařství</h2>
                Ke Kapličce<br>
                691 02 Velké Bílovice<br>
                <b>+420 606 715 417</b>
                tibor@vinarstvi.cz
            </div>
        </div>

        <div class="dotaznik">
            <h2 class = "dotaz-nadpis">Máte dotaz?</h2>
            <form method = "POST" class = "form-dotaz">
                <input class = "input-dotaz" type = "text" placeholder = "Vaše jméno">
                <input class = "input-dotaz" type = "text" placeholder = "Váš e-mail">
                <input class = "input-dotaz" type = "text" placeholder = "Telefon">
                <textarea id = "textbox" class = "text-dotaz" placeholder = "Zde napište svou zpráva..." maxlength = "180"></textarea>
                <div class="letter-counter" id = "lettercounter"><span id = "count">0</span>/180 znaků</div>
                <script src = "lettercount.js"></script>
                <div class="dotaz-btn">
                    <div class="dotaz-celek">
                        <div class="dotaz-but-left"></div>
                        <input type = "submit" value = "Odeslat" class = "dotaz-submit">
                        <div class="dotaz-but-right"></div>
                    </div>
                </div>
            
            </form>
            
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