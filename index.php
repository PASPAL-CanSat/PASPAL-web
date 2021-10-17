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
        <a href="#home" class="w3-bar-item w3-button"><?= _NAV ?></a>
        <a href="#about" class="w3-bar-item w3-button w3-hide-small w3-hide-medium"><?= _NAV2 ?></a>
        <a href="#cansat" class="w3-bar-item w3-button w3-hide-small w3-hide-medium"><?= _NAV3 ?></a>
        <a href="#satelit" class="w3-bar-item w3-button w3-hide-small w3-hide-medium"><?= _NAV4 ?></a>
        <a href="#team" class="w3-bar-item w3-button w3-hide-small w3-hide-medium"><?= _NAV5 ?></a>
        <a href="#news" class="w3-bar-item w3-button w3-hide-small w3-hide-medium"><?= _NAV6 ?></a>
        <a href="#sponzors" class="w3-bar-item w3-button w3-hide-small w3-hide-medium"><?= _NAV7 ?></a>
        <a href="galerie.php" class="w3-bar-item w3-button w3-hide-small w3-hide-medium"><?= _NAV9 ?></a>
        <a href="https://live.paspal.space/" class="w3-bar-item w3-button w3-hide-small w3-hide-medium"><?= _NAV8 ?></a>

        <a href="https://paspal.space/?lang=cz" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-right">CZ</a>
        <a href="https://paspal.space/?lang=en" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-right">EN</a>
    </div>

    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large">
        <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()"><?= _NAV2 ?></a>
        <a href="#cansat" class="w3-bar-item w3-button" onclick="toggleFunction()"><?= _NAV3 ?></a>
        <a href="#satelit" class="w3-bar-item w3-button" onclick="toggleFunction()"><?= _NAV4 ?></a>
        <a href="#team" class="w3-bar-item w3-button" onclick="toggleFunction()"><?= _NAV5 ?></a>
        <a href="#news" class="w3-bar-item w3-button" onclick="toggleFunction()"><?= _NAV6 ?></a>
        <a href="#sponzors" class="w3-bar-item w3-button" onclick="toggleFunction()"><?= _NAV7 ?></a>
        <a href="galerie.php" class="w3-bar-item w3-button" onclick="toggleFunction()"><?= _NAV9 ?></a>
        <a href="https://live.paspal.space/" class="w3-bar-item w3-button" onclick="toggleFunction()"><?= _NAV8 ?></a>

        <a href="https://paspal.space/?lang=cz" class="w3-bar-item w3-button w3-right">CZ</a>
        <a href="https://paspal.space/?lang=en" class="w3-bar-item w3-button w3-right">EN</a>
    </div>
</div>

<div class="bgimg-1 w3-display-container" id="home">
    <div class="w3-display-middle" style="white-space:nowrap;">
        <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">PASPAL</span>
    </div>
</div>

<div class="w3-content w3-container w3-padding-64" id="about">
    <h3 class="w3-center"><?= _NAV2 ?></h3>
    <p class="w3-center"><em></em></p>
    <p id="text-size"><?= _TEXT1 ?></p>
    <div class="w3-row">
        <div class="w3-col m6 w3-center" style="margin-top: 25px; padding-right: 9%;">
            <img src="images/logo.png" class="w3-round w3-image" alt="Photo" width="250" height="150">
        </div>

        <div class="w3-col m6">
            <p><?= _TEXT2 ?></p>
        </div>
    </div>
    <iframe width="100%" height="512px" class="container" src="https://www.youtube.com/embed/A83C6GE7m7s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

<div class="w3-row w3-center w3-dark-grey w3-padding-16">
    <div class="w3-quarter w3-section">
        <span class="w3-xlarge">28</span><br>
        <?= _DATA1 ?>
    </div>
    <div class="w3-quarter w3-section">
        <span class="w3-xlarge">0</span><br>
        <?= _DATA2 ?>
    </div>
    <div class="w3-quarter w3-section">
        <span class="w3-xlarge">900</span>+<br>
        <?= _DATA3 ?>
    </div>
    <div class="w3-quarter w3-section">
        <span class="w3-xlarge">1</span><br>
        <?= _DATA4 ?>
    </div>
</div>


<div class="bgimg-2 w3-display-container">
    <div class="w3-display-middle">
        <span class="w3-xxlarge w3-text-white w3-wide"><strong>CANSAT</strong></span>
    </div>
</div>

<div class="w3-content w3-container w3-padding-64" id="cansat">
    <h3 class="w3-center"><?= _TEXT3 ?></h3>
    <p class="w3-center"><?= _TEXT4 ?></p>
</div>

<div class="bgimg-2 w3-display-container">
    <div class="w3-display-middle">
        <span class="w3-xxlarge w3-text-white w3-wide"><strong><?= _NAV4 ?></strong></span>
    </div>
</div>

<div class="w3-content w3-container w3-padding-64" id="satelit">
    <h3 class="w3-center">SpaceCan</h3>
    <p class="w3-center"><?= _TEXT5 ?></p>
</div>

<div class="bgimg-2 w3-display-container">
    <div class="w3-display-middle">
        <span class="w3-xxlarge w3-text-white w3-wide"><strong><?= _NAV5 ?></strong></span>
    </div>
</div>

<div class="w3-content w3-container w3-padding-64" id="team">
    <h3 class="w3-center"><?= _TEXT6 ?></h3>
    <p class="w3-center"><em></em></p>
    <p></p>
    <div class="w3-container">
        <ul class="w3-ul w3-card-4">
            <li class="w3-bar">
                <img src="images/profily/Jirka.png" class="w3-bar-item w3-circle w3-hide-small" style="width:100px">
                <div class="w3-bar-item">
                    <span class="w3-large">Jiří Ryška</span><br>
                    <span><?= _TEAM1 ?> |</span>
                    <span>Management</span>
                </div>
            </li>

            <li class="w3-bar">
                <img src="images/profily/Marek.png" class="w3-bar-item w3-circle w3-hide-small" style="width:100px">
                <div class="w3-bar-item">
                    <span class="w3-large">Marek Kozel</span><br>
                    <span>Hardware</span>
                </div>
            </li>

            <li class="w3-bar">
                <img src="images/profily/Jonáš.png" class="w3-bar-item w3-circle w3-hide-small" style="width:100px">
                <div class="w3-bar-item">
                    <span class="w3-large">Jonáš Židek</span><br>
                    <span>Website |</span>
                    <span>Software</span>
                </div>
            </li>

            <li class="w3-bar">
                <img src="images/profily/Partik.png" class="w3-bar-item w3-circle w3-hide-small" style="width:100px">
                <div class="w3-bar-item">
                    <span class="w3-large">Patrik Glomb</span><br>
                    <span><?= _TEAM4 ?> |</span>
                    <span><?= _TEAM10 ?></span>
                </div>
            </li>

            <li class="w3-bar">
                <img src="images/profily/Filip.png" class="w3-bar-item w3-circle w3-hide-small" style="width:100px">
                <div class="w3-bar-item">
                    <span class="w3-large">Filip Gardoš</span><br>
                    <span><?= _TEAM5 ?> |</span>
                    <span><?= _TEAM11 ?></span>
                </div>
            </li>

            <li class="w3-bar">
                <img src="images/profily/Ondra.png" class="w3-bar-item w3-circle w3-hide-small" style="width:100px">
                <div class="w3-bar-item">
                    <span class="w3-large">Ondřej Zahorán</span><br>
                    <span><?= _TEAM6 ?> |</span>
                    <span><?= _TEAM12 ?></span>
                </div>
            </li>
        </ul>
    </div>
</div>

<div class="bgimg-2 w3-display-container">
    <div class="w3-display-middle">
        <span class="w3-xxlarge w3-text-white w3-wide"><strong><?= _NAV6 ?></strong></span>
    </div>
</div>

<div class="w3-content w3-container w3-padding-64" id="news">
    <h3 class="w3-center"><?= _TEXT7 ?></h3>
    <p class="w3-center"><em></em></p>
    <p></p>
    <div class="w3-row">
        <a class="twitter-timeline" data-lang="cs" data-height="750" data-dnt="true" data-theme="dark" href="https://twitter.com/PaspalCanSat?ref_src=twsrc%5Etfw">Tweets by PaspalCanSat</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
</div>

<div class="bgimg-2 w3-display-container">
    <div class="w3-display-middle">
        <span class="w3-xxlarge w3-text-white w3-wide"><strong><?= _NAV7 ?></strong></span>
    </div>
</div>

<div class="w3-content w3-container w3-padding-64" id="sponzors">
    <h3 class="w3-center"><?= _TEXT8 ?> ❤️️</h3>
    <p class="w3-center"><em></em></p>
    <p></p>
    <div class="w3-row w3-hide-small w3-hide-medium">
        <div class="w3-col s2">
            <center><a href="https://pojfm.cz/" target="_blank"><img src="images/pojfm.PNG" class="w3-bar-item" style="width:100%;max-width:150px"></a></center>
        </div>
        <div class="w3-col s2">
            <center><a href="https://palkovice.cz/index.php/cs/" target="_blank"><img src="images/Logo-Palkovice.jpg" class="w3-bar-item" style="width:100%;max-width:200px; margin-top: -25px"></a></center>
        </div>
        <div class="w3-col s2">
            <center><a href="http://www.ekologicky-outsourcing.cz/" target="_blank"><img src="images/ekologicky_outsourcing-logo.bmp" class="w3-bar-item" style="width:100%;max-width:140px; margin-top: -5px"></a></center>
        </div>
        <div class="w3-col s2">
            <center><a href="https://www.pepsi.cz/" target="_blank"><img src="images/Logo-Pepsi.png" class="w3-bar-item w3-circle" style="width:100%;max-width:100px; margin-top: -5px"></a></center>
        </div>
        <div class="w3-col s2">
            <center><a href="https://www.facebook.com/cansatspsoafm/" target="_blank"><img src="images/Logo%20Ajťáci%20spsoafm.jpg" class="w3-bar-item" style="width:100%;max-width:100px; margin-top: -5px"></a></center>
        </div>
        <div class="w3-col s2">
            <center><a href="https://www.facebook.com/2itcan/" target="_blank"><img src="images/Logo%20ITCan.png" class="w3-bar-item w3-circle" style="width:100%;max-width:100px; margin-top: -5px"></a></center>
        </div>
    </div>
    <div class="w3-row w3-hide-small w3-hide-medium">
        <div class="w3-col s2">
            <center><a href="https://www.vsb.cz/cs/" target="_blank"><img src="images/vsb_cs.svg" class="w3-bar-item" style="width:100%;max-width:140px; margin-top: 20px"></a></center>
        </div>
        <div class="w3-col s2">
            <center><a href="https://www.facebook.com/CombiPrint-111574463628316/" target="_blank"><img src="images/logo-combiprint.jpg" class="w3-bar-item w3-circle" style="width:100%;max-width:130px; margin-top: 15px"></a></center>
        </div>
        <div class="w3-col s2">
            <center><a href="https://www.facebook.com/ogcansat/" target="_blank"><img src="images/Logo%20OGSat.jpg" class="w3-bar-item" style="width:100%;max-width:100px; margin-top: -5px"></a></center>
        </div>
        <div class="w3-col s2">
            <center><a href="https://www.facebook.com/stratocan/" target="_blank"><img src="images/Logo%20Stratocan.jpg" class="w3-bar-item w3-circle" style="width:100%;max-width:100px; margin-top: -5px"></a></center>
        </div>
        <div class="w3-col s2">
            <center><a href="https://www.mobility.siemens.com/cz/cs.html" target="_blank"><img src="images/Logo%20siemens.png" class="w3-bar-item w3-circle" style="width:100%;max-width:120px; margin-top: 20px"></a></center>
        </div>
        <div class="w3-col s2">
            <center><a href="https://dratek.cz/" target="_blank"><img src="images/logo-dratek%20-%20bily.png" class="w3-bar-item" style="width:100%;max-width:120px; margin-top: 35px"></a></center>
        </div>
    </div>
    <div class="w3-row w3-hide-small w3-hide-medium">
        <div class="w3-col s2">
            <center><a href="http://www.polar.cz/" target="_blank"><img src="images/polar.png" class="w3-bar-item" style="width:100%;max-width:200px; margin-top: 40px"></a></center>
        </div>
        <div class="w3-col s2">
            <center><a href="http://www.kuncicepo.cz/" target="_blank"><img src="images/kunčice.png" class="w3-bar-item" style="width:100%;max-width:70px; margin-top: 20px"></a></center>
        </div>
        <div class="w3-col s2">
            <center><a href="https://raskovice.cz/" target="_blank"><img src="images/raskovice.png" class="w3-bar-item" style="width:100%;max-width:140px; margin-top: 20px"></a></center>
        </div>
        <div class="w3-col s2">
            <center><a href="https://www.przno.cz/" target="_blank"><img src="images/pržno.png" class="w3-bar-item" style="width:100%;max-width:190px; margin-top: 30px"></a></center>
        </div>
        <div class="w3-col s2">
            <center><a href="https://inzep.cz/" target="_blank"><img src="images/inzep.png" class="w3-bar-item" style="width:100%;max-width:190px; margin-top: 30px"></a></center>
        </div>
        <div class="w3-col s2">
            <center><a href="https://vyrobareklamy.info/" target="_blank"><img src="images/výroba%20reklamy.png" class="w3-bar-item" style="width:100%;max-width:170px; margin-top: 30px"></a></center>
        </div>
    </div>
    <div class="w3-row w3-hide-small w3-hide-medium">
        <div class="w3-col s2">
            <p></p>
        </div>
        <div class="w3-col s2">
            <center><a href="https://www.chapes.cz/" target="_blank"><img src="images/chapes.png" class="w3-bar-item w3-circle" style="width:100%;max-width:95px;"></a></center>
        </div>
        <div class="w3-col s2">
            <center><a href="https://www.plotbase.cz/" target="_blank"><img src="images/plotbase.png" class="w3-bar-item" style="width:100%;max-width:170px;padding-top: 30px;"></a></center>
        </div>
        <div class="w3-col s2">
            <center><a href="https://www.o2.cz/" target="_blank"><img src="images/o2.png" class="w3-bar-item" style="width:100%;max-width:110px;"></a></center>
        </div>
        <div class="w3-col s2">
            <center><a href="https://www.solartec.eu/" target="_blank"><img src="images/SOLARTEC.jpeg" class="w3-bar-item" style="width:100%;max-width:150px;padding-top: 20px;"></a></center>
        </div>
        <div class="w3-col s2">
            <p></p>
        </div>
    </div>
    <div class="w3-row w3-hide-small w3-hide-medium">
        <div class="w3-col s2">
            <strong><a href="https://www.facebook.com/stepan.sebela.7" target="_blank"><p style="text-align: center; padding: 10px;">Šebela Štěpán</p></a></strong>
        </div>
        <div class="w3-col s2">
            <strong><a href="https://www.facebook.com/petr.poboril.7731" target="_blank"><p style="text-align: center; padding: 10px;">Petr Pobořil</p></a></strong>
        </div>
        <div class="w3-col s2">
            <strong><a href="https://www.facebook.com/petr.gres.3" target="_blank"><p style="text-align: center; padding: 10px;">Petr Gřes</p></a></strong>
        </div>
        <div class="w3-col s2">
            <strong><p style="text-align: center; padding: 10px;">Letiště Bahno</p></strong>
        </div>
        <div class="w3-col s2">
            <strong><a href="http://www.elektropenco.cz/" target="_blank"><p style="text-align: center; padding: 10px;">Elektro Penco</p></a></strong>
        </div>
        <div class="w3-col s2">
            <strong><a href="http://www.onyxmedia.cz/" target="_blank"><p style="text-align: center; padding: 10px;">onyxmedia</p></a></strong>
        </div>
    </div>

    <iframe class="w3-hide-large" src="phone-sponzors.html" style="border: 2px solid; width: 100%; height: 300px;"></iframe>
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
