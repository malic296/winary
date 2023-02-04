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
                    <a href = "index.php"><li class = "selected" id = "menu-item-id1" onmouseenter = "larger1()" onmouseleave="shrink1()">Domů</li></a>
                    <a href = "story.php"><li id = "menu-item-id2"  onmouseenter = "larger2()" onmouseleave="shrink2()">Náš Příběh</li></a>
                    <a href = "vinarstvi.php"><li id = "menu-item-id3"  onmouseenter = "larger3()" onmouseleave="shrink3()">Vinařství</li></a>
                    <a href = "degustace.php"><li id = "menu-item-id4"  onmouseenter = "larger4()" onmouseleave="shrink4()">Degustace</li></a>
                    <a href = "Eshop.php"><li id = "menu-item-id5"  onmouseenter = "larger5()" onmouseleave="shrink5()">E-shop</li></a>
                    <a href = "Kontakt.php"><li id = "menu-item-id6"  onmouseenter = "larger6()" onmouseleave="shrink6()">Kontakt</li></a>
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

    <div class = "landscape-background">
        <img src="vinarstvi/krajina.png" class = "landscape-background-pic">
    </div>
    <div id = "text-krajina" class="text-krajina">
        <div class="krajina1">Jsme rodinné vinařství</div>
        <div class="krajina2">...z Velkých Bílovic<br>s dlouholetou rodinou tradicí<br>s kvalitním českým vínem</div>
    </div>




    <div class="zapletal-text">
        <h2>Vinné sklepy Zapletal</h2>
        <p>Velké Bílovice jsou plné tradic, folklóru a dobrého vína.<br>
        Objevte i vy kouzlo našeho kraje.</p>
    </div>

    <div class="zapletal-nav">
        <div class="zapletal-nav1">
            <a class = "nav-zapletal" id = "nav-zapletal1" onmouseenter = "cernazlata1()" onmouseleave="zlatacerna1()" href = "vinarstvi.php"><div class="nav1-1"><div class="nav3" id = "nav3-1">Vinařství</div></div></a>
            <div class="nav1-2">
                Ochutnejte kouzlo našeho vinařství poblíž vinohradu a frekventované cyklostezky...<br><br>
                <div class="nocontent"></div>
                <a href = "vinarstvi.php" onmouseenter = "cernazlata1()" onmouseleave="zlatacerna1()"><div class="nav1-btn" id = "nav1-btn">Více</div></a>
            </div>

        </div>

        <div class="zapletal-nav1">
            <a class = "nav-zapletal" id = "nav-zapletal2" onmouseenter = "cernazlata2()" onmouseleave="zlatacerna2()" href = "story.php"><div class="nav2-1"><div class="nav3" id = "nav3-2">Náš Příběh</div></div></a>
            <div class="nav2-2">
                Snažíme se vytvářet především suchá a polosuchá vína s osobitým charakterem...<br><br>
                <div class="nocontent"></div>
                <a href = "story.php" onmouseenter = "cernazlata2()" onmouseleave="zlatacerna2()"><div class="nav2-btn" id = "nav2-btn">Více</div></a>
            </div>

        </div>

        <div class="zapletal-nav1">
            <a class = "nav-zapletal" id = "nav-zapletal3" onmouseenter = "cernazlata3()" onmouseleave="zlatacerna3()" href = "degustace.php"><div class="nav3-1"><div class="nav3" id = "nav3-3">Degustace</div></div></a>
            <div class="nav3-2">
                Příběh našeho vína se začal psát na nejlépe položených velkobílovických vinicích...<br><br>
                <div class="nocontent"></div>
                <a href = "degustace.php" onmouseenter = "cernazlata3()" onmouseleave="zlatacerna3()"><div class="nav3-btn" id = "nav3-btn">Více</div></a>
            </div>

        </div>
    </div>

    <div class="blur-all">
        <div class="blur1">
            <div class="blur-text">Nakupujte u nás v e-shopu</div>
            <a href = "Eshop.php"><div class="blur-btn">Do E-shopu</div></a>
        </div>
        <div class="blur2">
            <img src = "vinarstvi/cervena_flaska.png" class = "blur-pic">
        </div>
    </div>

    <div class="bottles">
        <div class="bottle-silver">
            <div class="bottle-content"><h2 class = "bottle_header bot1">Stříbrná</h2>
                <img src = "vinarstvi/bila_lezata.png" class = "laid_bottle">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. At dolor doloribus ipsa consequuntur vitae, ipsum sequi illo soluta repellat quis atque quibusdam sed repellendus impedit distinctio accusamus laudantium consequatur tempora.<br>                
            </div>
            <div class="nocontent">
                
            </div>
            <a href = "degustace.php"><div class="bottle-btn">Více</div></a>
        </div>

        <div class="bottle-gold">
            <div class="bottle-content"><h2 class = "bottle_header bot2">Zlatá</h2>
                <img src = "vinarstvi/cerna_lezata.png" class = "laid_bottle">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste debitis, maxime voluptas, iusto deserunt sint vitae sequi rem adipisci repudiandae modi facere officia! Similique molestiae architecto dignissimos blanditiis, rem aliquam?<br>
            </div>
            <div class="nocontent">
                
            </div>
            <a href = "degustace.php"><div class="bottle-btn">Více</div></a>
        </div>

        <div class="bottle-mystery">
            <div class="bottle-content"><h2 class = "bottle_header">Mystery</h2>
                <img src = "vinarstvi/mystery_lezata.png" class = "laid_bottle">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque maxime sapiente mollitia fugit, odio doloribus quam natus, aliquam in praesentium iste distinctio assumenda eos, id ratione dolore ipsam delectus excepturi!<br>           
             </div>
            <div class="nocontent">
                
            </div>
            <a href = "degustace.php"><div class="bottle-btn">Více</div></a>
        </div>
    </div>

    <div class="degustace-container">
        <div class="degustace">
            <div class="degustace1">
                <img src = "vinarstvi/restaurace.png" class = "degustace-pic">
            </div>
            <div class="degustace2">
                <div class="degustace-txt">
                    <h2>Zážitek z degustace</h2>
                    Na 4 hektarech obděláváme vinici v ekologickém režimu a snažíme se, abychom získlali
                    co nejkvalitnější hrozen při co nejmenším zatížení přírody. Proto ve vinici nepoužíváme
                    žádné pesticidy ani herbicidy a všechny vinice jsou kompletně zatravněny.<br><br><br>
                </div>
                <div class="degustace-btn">Mám Zájem</div>
            </div>
        </div>

    </div>
    <div class="zakaznici-header"><h2>Spokojení Zákazníci</h2></div>
    <div class="zakaznici">
        <div class="zakaznik">
            <i class="fa-regular fa-user zakaznik-user-icon"></i><br>
            <div class="recenze">
                Výborná poloha, krásné prostředí, zejména víno z řady Mystery skvělé,
                originální sýry a sympatický personál.
            </div>
            <div class="autor"><b>David Schuch</b></div>
            <div class="platforma"><b>Facebook</b></div>
        </div>
        <div class="zakaznik zakaznik-border">
            <i class="fa-regular fa-user zakaznik-user-icon"></i><br>
            <div class="recenze">
                Krásné prostředí, super lidi no a to vínečko, no co
                vám budu povídat, raději si tam zajeďte!
            </div>
            <div class="autor"><b>Aleš Čermák</b></div>
            <div class="platforma"><b>Facebook</b></div>
        </div>
        <div class="zakaznik">
            <i class="fa-regular fa-user zakaznik-user-icon"></i></i><br>
            <div class="recenze">
                Jako vždy super přístup. Několikrát navštíveno i s noclehem.
                Vynikající vína, vřele doporučuji.
            </div>
            <div class="autor"><b>Kamil Raszka</b></div>
            <div class="platforma"><b>Facebook</b></div>
        </div>
    </div>

    <div class="oceneni">
        <img src = "vinarstvi/salon.png" class = "medaile">
        <img src = "vinarstvi/deutchland_2014.png" class = "medaile">
        <img src = "vinarstvi/wine_trophy.png" class = "medaile">
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