<?php
session_start();

// Set Language variable
if(isset($_GET['lang']) && !empty($_GET['lang'])){
    $_SESSION['lang'] = $_GET['lang'];

    if(isset($_SESSION['lang']) && $_SESSION['lang'] != $_GET['lang']){
        echo "<script type='text/javascript'> location.reload(); </script>";
    }
}

// Include Language file
if(isset($_SESSION['lang'])){
    include "lang_".$_SESSION['lang'].".php";
}else{
    include "lang_cz.php";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PASPAL | Letíme do vesmíru!</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Toto je oficiální stránka skupiny PASPAL, která se zúčastnila soutěže CanSat.">
    <meta name="keywords" content="Satelit, PASPAL, CanSat, 2020">
    <meta name="author" content="Jonáš Židek (Johno95)">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <link rel="icon" href="images/logo.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

<div class="w3-top">
    <div class="w3-bar" id="myNavbar">
        <a class="w3-bar-item w3-button w3-hover-black w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
            <i class="fa fa-bars"></i>
        </a>
        <a href="index.php" class="w3-bar-item w3-button"><?= _NAV ?></a>

        <a href="https://paspal.space/?lang=cz" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-right">CZ</a>
        <a href="https://paspal.space/?lang=en" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-right">EN</a>
    </div>

    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large">
        <a href="index.php" class="w3-bar-item w3-button" onclick="toggleFunction()"><?= _NAV ?></a>

        <a href="https://paspal.space/?lang=cz" class="w3-bar-item w3-button w3-right">CZ</a>
        <a href="https://paspal.space/?lang=en" class="w3-bar-item w3-button w3-right">EN</a>
    </div>
</div>

<div class="bgimg-2 w3-display-container">
    <div class="w3-display-middle">
        <span class="w3-xxlarge w3-text-white w3-wide"><strong><?= _TEXT9 ?></strong></span>
    </div>
</div>

<div class="w3-content w3-container w3-padding-64" id="news">
    <p></p>
    <div class="w3-row">
        <section>
            <div class="rt-container">
                <div class="col-rt-12">
                    <div class="Scriptcontent">
                        <section>
                            <div class="gallery">
                                <div class="gallery-item item-4x4">
                                    <img class="thumb placeholder" src="images/ostatni/mensi/IMG_4031.jpg" data-src="images/ostatni/mensi/IMG_4031.jpg" data-image="images/ostatni/IMG_4031.jpg" data-title="Galerie fotek ze dne 10.09.2021" alt="Galerie fotek ze dne 10.09.2021">
                                </div>
                                <div class="gallery-item item-4x4">
                                    <img class="thumb placeholder" src="images/ostatni/mensi/IMG_4033.jpg" data-src="images/ostatni/mensi/IMG_4033.jpg" data-image="images/ostatni/IMG_4033.jpg" data-title="Galerie fotek ze dne 10.09.2021" alt="Galerie fotek ze dne 10.09.2021">
                                </div>
                                <div class="gallery-item item-4x4">
                                    <img class="thumb placeholder" src="images/ostatni/mensi/IMG_4040.jpg" data-src="images/ostatni/mensi/IMG_4040.jpg" data-image="images/ostatni/IMG_4040.jpg" data-title="Galerie fotek ze dne 10.09.2021" alt="Galerie fotek ze dne 10.09.2021">
                                </div>
                                <div class="gallery-item item-4x4">
                                    <img class="thumb placeholder" src="images/ostatni/mensi/IMG_4041.jpg" data-src="images/ostatni/mensi/IMG_4041.jpg" data-image="images/ostatni/IMG_4041.jpg" data-title="Galerie fotek ze dne 10.09.2021" alt="Galerie fotek ze dne 10.09.2021">
                                </div>
                                <div class="gallery-item item-4x4">
                                    <img class="thumb placeholder" src="images/ostatni/mensi/IMG_4044.jpg" data-src="images/ostatni/mensi/IMG_4044.jpg" data-image="images/ostatni/IMG_4044.jpg" data-title="Galerie fotek ze dne 10.09.2021" alt="Galerie fotek ze dne 10.09.2021">
                                </div>
                                <div class="gallery-item item-4x4">
                                    <img class="thumb placeholder" src="images/ostatni/mensi/IMG_4046.jpg" data-src="images/ostatni/mensi/IMG_4046.jpg" data-image="images/ostatni/IMG_4046.jpg" data-title="Galerie fotek ze dne 10.09.2021" alt="Galerie fotek ze dne 10.09.2021">
                                </div>
                                <div class="gallery-item item-4x4">
                                    <img class="thumb placeholder" src="images/ostatni/mensi/IMG_4048.jpg" data-src="images/ostatni/mensi/IMG_4048.jpg" data-image="images/ostatni/IMG_4048.jpg" data-title="Galerie fotek ze dne 10.09.2021" alt="Galerie fotek ze dne 10.09.2021">
                                </div>
                                <div class="gallery-item item-4x4">
                                    <img class="thumb placeholder" src="images/ostatni/mensi/IMG_4050.jpg" data-src="images/ostatni/mensi/IMG_4050.jpg" data-image="images/ostatni/IMG_4050.jpg" data-title="Galerie fotek ze dne 10.09.2021" alt="Galerie fotek ze dne 10.09.2021">
                                </div>
                                <div class="gallery-item item-4x4">
                                    <img class="thumb placeholder" src="images/ostatni/mensi/IMG_4069.jpg" data-src="images/ostatni/mensi/IMG_4069.jpg" data-image="images/ostatni/IMG_4069.jpg" data-title="Galerie fotek ze dne 10.09.2021" alt="Galerie fotek ze dne 10.09.2021">
                                </div>
                                <div class="gallery-item item-4x4">
                                    <img class="thumb placeholder" src="images/ostatni/mensi/IMG_4080.jpg" data-src="images/ostatni/mensi/IMG_4080.jpg" data-image="images/ostatni/IMG_4080.jpg" data-title="Galerie fotek ze dne 10.09.2021" alt="Galerie fotek ze dne 10.09.2021">
                                </div>
                                <div class="gallery-item item-4x4">
                                    <img class="thumb placeholder" src="images/ostatni/mensi/IMG_4084.jpg" data-src="images/ostatni/mensi/IMG_4084.jpg" data-image="images/ostatni/IMG_4084.jpg" data-title="Galerie fotek ze dne 10.09.2021" alt="Galerie fotek ze dne 10.09.2021">
                                </div>
                                <div class="gallery-item item-4x4">
                                    <img class="thumb placeholder" src="images/ostatni/mensi/IMG_4092.jpg" data-src="images/ostatni/mensi/IMG_4092.jpg" data-image="images/ostatni/IMG_4092.jpg" data-title="Galerie fotek ze dne 10.09.2021" alt="Galerie fotek ze dne 10.09.2021">
                                </div>
                                <div class="gallery-item item-4x4">
                                    <img class="thumb placeholder" src="images/ostatni/mensi/IMG_4093.jpg" data-src="images/ostatni/mensi/IMG_4093.jpg" data-image="images/ostatni/IMG_4093.jpg" data-title="Galerie fotek ze dne 10.09.2021" alt="Galerie fotek ze dne 10.09.2021">
                                </div>
                                <div class="gallery-item item-4x4">
                                    <img class="thumb placeholder" src="images/ostatni/mensi/IMG_4098.jpg" data-src="images/ostatni/mensi/IMG_4098.jpg" data-image="images/ostatni/IMG_4098.jpg" data-title="Galerie fotek ze dne 10.09.2021" alt="Galerie fotek ze dne 10.09.2021">
                                </div>
                                <div class="gallery-item item-4x4">
                                    <img class="thumb placeholder" src="images/ostatni/mensi/IMG_4101.jpg" data-src="images/ostatni/mensi/IMG_4101.jpg" data-image="images/ostatni/IMG_4101.jpg" data-title="Galerie fotek ze dne 10.09.2021" alt="Galerie fotek ze dne 10.09.2021">
                                </div>
                                <div class="gallery-item item-4x4">
                                    <img class="thumb placeholder" src="images/ostatni/mensi/IMG_4103.jpg" data-src="images/ostatni/mensi/IMG_4103.jpg" data-image="images/ostatni/IMG_4103.jpg" data-title="Galerie fotek ze dne 10.09.2021" alt="Galerie fotek ze dne 10.09.2021">
                                </div>
                                <div class="gallery-item item-4x4">
                                    <img class="thumb placeholder" src="images/ostatni/mensi/IMG_4108.jpg" data-src="images/ostatni/mensi/IMG_4108.jpg" data-image="images/ostatni/IMG_4108.jpg" data-title="Galerie fotek ze dne 10.09.2021" alt="Galerie fotek ze dne 10.09.2021">
                                </div>
                                <div class="gallery-item item-4x4">
                                    <img class="thumb placeholder" src="images/ostatni/mensi/IMG_4110.jpg" data-src="images/ostatni/mensi/IMG_4110.jpg" data-image="images/ostatni/IMG_4110.jpg" data-title="Galerie fotek ze dne 10.09.2021" alt="Galerie fotek ze dne 10.09.2021">
                                </div>
                                <div class="gallery-item item-4x4">
                                    <img class="thumb placeholder" src="images/ostatni/mensi/IMG_4112.jpg" data-src="images/ostatni/mensi/IMG_4112.jpg" data-image="images/ostatni/IMG_4112.jpg" data-title="Galerie fotek ze dne 10.09.2021" alt="Galerie fotek ze dne 10.09.2021">
                                </div>
                                <div class="gallery-item item-4x4">
                                    <img class="thumb placeholder" src="images/ostatni/mensi/IMG_4130.jpg" data-src="images/ostatni/mensi/IMG_4130.jpg" data-image="images/ostatni/IMG_4130.jpg" data-title="Galerie fotek ze dne 10.09.2021" alt="Galerie fotek ze dne 10.09.2021">
                                </div>
                                <div class="gallery-item item-4x4">
                                    <img class="thumb placeholder" src="images/ostatni/mensi/IMG_4133.jpg" data-src="images/ostatni/mensi/IMG_4133.jpg" data-image="images/ostatni/IMG_4133.jpg" data-title="Galerie fotek ze dne 10.09.2021" alt="Galerie fotek ze dne 10.09.2021">
                                </div>
                                <div class="gallery-item item-4x4">
                                    <img class="thumb placeholder" src="images/ostatni/mensi/IMG_4137.jpg" data-src="images/ostatni/mensi/IMG_4137.jpg" data-image="images/ostatni/IMG_4137.jpg" data-title="Galerie fotek ze dne 10.09.2021" alt="Galerie fotek ze dne 10.09.2021">
                                </div>
                                <div class="gallery-item item-4x4">
                                    <img class="thumb placeholder" src="images/ostatni/mensi/IMG_4143.jpg" data-src="images/ostatni/mensi/IMG_4143.jpg" data-image="images/ostatni/IMG_4143.jpg" data-title="Galerie fotek ze dne 10.09.2021" alt="Galerie fotek ze dne 10.09.2021">
                                </div>
                                <div class="gallery-item item-4x4">
                                    <img class="thumb placeholder" src="images/ostatni/mensi/IMG_4149.jpg" data-src="images/ostatni/mensi/IMG_4149.jpg" data-image="images/ostatni/IMG_4149.jpg" data-title="Galerie fotek ze dne 10.09.2021" alt="Galerie fotek ze dne 10.09.2021">
                                </div>
                                <div class="gallery-item item-4x4">
                                    <img class="thumb placeholder" src="images/ostatni/mensi/IMG_4153.jpg" data-src="images/ostatni/mensi/IMG_4153.jpg" data-image="images/ostatni/IMG_4153.jpg" data-title="Galerie fotek ze dne 10.09.2021" alt="Galerie fotek ze dne 10.09.2021">
                                </div>
                                <div class="gallery-item item-4x4">
                                    <img class="thumb placeholder" src="images/ostatni/mensi/IMG_4159.jpg" data-src="images/ostatni/mensi/IMG_4159.jpg" data-image="images/ostatni/IMG_4159.jpg" data-title="Galerie fotek ze dne 10.09.2021" alt="Galerie fotek ze dne 10.09.2021">
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </section>

        <script src="script.js"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    </div>
</div>

<footer class="w3-center w3-black w3-padding-64">
    <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i><?= _BUTTON1 ?></a>
    <div class="w3-xlarge w3-section">
        <a href="https://facebook.com/CanSatPaspal" target="_blank"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
        <a href="https://instagram.com/paspalcansat" target="_blank"><i class="fa fa-instagram w3-hover-opacity"></i></a>
        <a href="https://twitter.com/PaspalCanSat" target="_blank"><i class="fa fa-twitter w3-hover-opacity"></i></a>
        <a href="https://www.youtube.com/channel/UC7gtm3pSgp-xXV9Ppiytk7A" target="_blank"><i class="fa fa-youtube w3-hover-opacity"></i></a>
        <a href="mailto: info@paspal.space" target="_blank"><i class="fa fa-envelope w3-hover-opacity"></i></a>
    </div>
    <p>&copy; PASPAL.SPACE <?= date("Y") ?> | <?= _VERSION ?>: v.1.13.0</p>
    <p> Email: info@paspal.space | <?= _TELCISLO ?>: 778 076 787</p>
</footer>

<script>
    function onClick(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("modal01").style.display = "block";
        var captionText = document.getElementById("caption");
        captionText.innerHTML = element.alt;
    }

    window.onscroll = function() {myFunction()};
    function myFunction() {
        var navbar = document.getElementById("myNavbar");
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
        } else {
            navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
        }
    }

    function toggleFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
</script>
</body>
</html>
