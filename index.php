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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>


</head>
<body>
    <div class="strip"></div>
    <?php 
    //include header
    include 'header.php'; 
    
    //include těla + visuální označení stránky kde se uživatel vyskytuje
    if(isset($_POST["domu"])){
        include 'domu.php';
        echo "<script>document.getElementById('domu').classList.toggle('selected')</script>";
    }
    else if(isset($_POST["story"])){
        include 'story.php';
        echo "<script>document.getElementById('story').classList.toggle('selected')</script>";
    }
    else if(isset($_POST["vinarstvi"])){
        include 'vinarstvi.php';
        echo "<script>document.getElementById('vinarstvi').classList.toggle('selected')</script>";
    }
    else if(isset($_POST["degustace"])){
        include 'degustace.php';
        echo "<script>document.getElementById('degustace').classList.toggle('selected')</script>";
    }
    else if(isset($_POST["eshop"])){
        include 'eshop.php';
        echo "<script>document.getElementById('eshop').classList.toggle('selected')</script>";
    }
    else if(isset($_POST["kontakt"])){
        include 'kontakt.php';
        echo "<script>document.getElementById('kontakt').classList.toggle('selected')</script>";
    }
    else if(isset($_POST["ubytovani"])){
        include 'ubytovani.php';
        echo "<script>document.getElementById('ubytovani').classList.toggle('selected')</script>";
    }
    else if(isset($_POST["vina"])){
        include 'vina.php';
        echo "<script>document.getElementById('vina').classList.toggle('selected')</script>";
    }
    else{
        include 'domu.php';
        echo "<script>document.getElementById('domu').classList.toggle('selected')</script>";
    }
    
    
    //include patičky
    include 'footer.php'; 

    //script na swipování 
    ?>
    <script>
        const swiper = new Swiper('.swiper', {        
        loop: true,       
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },       
        });
    </script>
    
</body>
</html>