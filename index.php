<!DOCTYPE html>
<html>
<title>PASPAL | WE ARE THE FUTURE OF SPACE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
    body, html {
        height: 100%;
        color: #777;
        line-height: 1.8;
    }

    /* Create a Parallax Effect */
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    /* First image (Logo. Full height) */
    .bgimg-1 {
        background-image: url('images/bck.jpg');
        min-height: 100%;
    }

    /* Second image (Portfolio) */
    .bgimg-2 {
        background-image: url("images/bck.jpg");
        min-height: 400px;
    }

    /* Third image (Contact) */
    .bgimg-3 {
        background-image: url("images/bck.jpg");
        min-height: 400px;
    }

    .w3-wide {letter-spacing: 10px;}
    .w3-hover-opacity {cursor: pointer;}

    /* Turn off parallax scrolling for tablets and phones */
    @media only screen and (max-device-width: 1600px) {
        .bgimg-1, .bgimg-2, .bgimg-3 {
            background-attachment: scroll;
            min-height: 400px;
        }
    }
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
    <div class="w3-bar" id="myNavbar">
        <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
            <i class="fa fa-bars"></i>
        </a>
        <a href="#home" class="w3-bar-item w3-button">HOME</a>
        <a href="#about" class="w3-bar-item w3-button w3-hide-small">O NÁS</a>
        <a href="#satelit" class="w3-bar-item w3-button w3-hide-small">NÁŠ SATELIT</a>
        <a href="#team" class="w3-bar-item w3-button w3-hide-small">TEAM</a>
        <a href="#news" class="w3-bar-item w3-button w3-hide-small">NEWS</a>
        <a href="#sponzors" class="w3-bar-item w3-button w3-hide-small">SPONZORS</a>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
        <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">O NÁS</a>
        <a href="#satelit" class="w3-bar-item w3-button" onclick="toggleFunction()">NÁŠ SATELIT</a>
        <a href="#team" class="w3-bar-item w3-button w3-hide-small">TEAM</a>
        <a href="#news" class="w3-bar-item w3-button" onclick="toggleFunction()">NEWS</a>
        <a href="#sponzors" class="w3-bar-item w3-button w3-hide-small">SPONZORS</a>
    </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container" id="home">
    <div class="w3-display-middle" style="white-space:nowrap;">
        <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">PASPAL</span>
    </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
    <h3 class="w3-center">O nás</h3>
    <p class="w3-center"><em></em></p>
    <p></p>
    <div class="w3-row">
        <div class="w3-col m6 w3-center w3-padding-large">
            <img src="/w3images/avatar_hat.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo" width="500" height="333">
        </div>

        <!-- Hide this text on small devices -->
        <div class="w3-col m6 w3-hide-small w3-padding-large">
            <p></p>
        </div>
    </div>
</div>

<div class="w3-row w3-center w3-dark-grey w3-padding-16">
    <div class="w3-quarter w3-section">
        <span class="w3-xlarge">0</span><br>
        Partnerů
    </div>
    <div class="w3-quarter w3-section">
        <span class="w3-xlarge">0</span><br>
        Úspěšných testů
    </div>
    <div class="w3-quarter w3-section">
        <span class="w3-xlarge">250+</span><br>
        Řádků kódů
    </div>
    <div class="w3-quarter w3-section">
        <span class="w3-xlarge">...</span><br>
        něco
    </div>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container">
    <div class="w3-display-middle">
        <span class="w3-xxlarge w3-text-white w3-wide"><strong>Náš satelit</strong></span>
    </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="satelit">
    <h3 class="w3-center">v.1.0</h3>
    <p class="w3-center"><em>něco....</em></p><br>

    <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
    <div class="w3-row-padding w3-center">
        <div class="w3-col m3">
            <img src="/w3images/p1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="1">
        </div>

        <div class="w3-col m3">
            <img src="/w3images/p2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="2">
        </div>

        <div class="w3-col m3">
            <img src="/w3images/p3.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="3">
        </div>

        <div class="w3-col m3">
            <img src="/w3images/p4.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="4">
        </div>
    </div>

    <div class="w3-row-padding w3-center w3-section">
        <div class="w3-col m3">
            <img src="/w3images/p5.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="5">
        </div>

        <div class="w3-col m3">
            <img src="/w3images/p6.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="6">
        </div>

        <div class="w3-col m3">
            <img src="/w3images/p7.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="7">
        </div>

        <div class="w3-col m3">
            <img src="/w3images/p8.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="8">
        </div>
        <button class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px">NAČÍST VÍCE</button>
    </div>
</div>

<div class="bgimg-2 w3-display-container">
    <div class="w3-display-middle">
        <span class="w3-xxlarge w3-text-white w3-wide"><strong>NÁŠ TEAM</strong></span>
    </div>
</div>

<div class="w3-content w3-container w3-padding-64" id="team">
    <h3 class="w3-center">NÁŠ TEAM</h3>
    <p class="w3-center"><em></em></p>
    <p></p>
    <div class="w3-row">
        něco....
    </div>
</div>

<div class="bgimg-2 w3-display-container">
    <div class="w3-display-middle">
        <span class="w3-xxlarge w3-text-white w3-wide"><strong>NEWS</strong></span>
    </div>
</div>

<div class="w3-content w3-container w3-padding-64" id="news">
    <h3 class="w3-center">Vše ze sociálních sítí</h3>
    <p class="w3-center"><em></em></p>
    <p></p>
    <div class="w3-row">
        <a class="twitter-timeline" data-lang="cs" data-height="100%" data-theme="light" href="https://twitter.com/PaspalCanSat?ref_src=twsrc%5Etfw">Tweets by PaspalCanSat</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
</div>

<div class="bgimg-2 w3-display-container">
    <div class="w3-display-middle">
        <span class="w3-xxlarge w3-text-white w3-wide"><strong>SPONZOŘI</strong></span>
    </div>
</div>

<div class="w3-content w3-container w3-padding-64" id="sponzors">
    <h3 class="w3-center">Děkujeme ❤️️</h3>
    <p class="w3-center"><em></em></p>
    <p></p>
    <div class="w3-row">
        něco....
    </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
    <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
        <img id="img01" class="w3-image">
        <p id="caption" class="w3-opacity w3-large"></p>
    </div>
</div>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
    <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>Zpět nahoru</a>
    <div class="w3-xlarge w3-section">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
    </div>
    <p>&copy; PASPAL.SPACE <?= date("Y") ?></p>
</footer>

<script>
    // Modal Image Gallery
    function onClick(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("modal01").style.display = "block";
        var captionText = document.getElementById("caption");
        captionText.innerHTML = element.alt;
    }

    // Change style of navbar on scroll
    window.onscroll = function() {myFunction()};
    function myFunction() {
        var navbar = document.getElementById("myNavbar");
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
        } else {
            navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
        }
    }

    // Used to toggle the menu on small screens when clicking on the menu button
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
