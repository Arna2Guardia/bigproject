
<?php require_once "items/config.php"; ?>
<!DOCTYPE html>

<head>
    <title>Big Project</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
</head>

<body>
    <div class="navbar">
        <div class="navbar-content">
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Projets</a></li>
                <li><a href="#">CV</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Jeu 1</a></li>
                <li><a href="#">Jeu 2</a></li>
            </ul>
        </div>
    </div>
    <div class="navbar-tel">
        <div class="navbar-content-tel">
            <span id="navbar-logo-tel">logo</span>
            <div id="nav-dropdown" class="navbar-links-tel">
                <a href="index.html">Accueil</a>
                <a href="projects.html">Projets</a>
                <a href="cv.html">CV</a>
                <a href="#">Contact</a>
                <a href="#">Jeu 1</a>
                <a href="#">Jeu 2</a>
            </div>
            <a class="dropbtn" href="javascript:void(0);" onclick="dropnav()">
                <span class="material-symbols-outlined">menu</span>
            </a>
        </div>
    </div>
    <div class="hidden-page">
        <h1>Welcome</h1>
        <div class="img-meme">
            <img src="img/stegano_meme.jpg">
        </div>
        <div class="challenge">
            <a href="img/base-jumping.jpg" download><button>Démarrer le challenge</button></a>
            <form>
                <label for="password">Flag :</label>
                <input type="password" id="password" name="password">
              </form>
        </div>
    </div>
    <div class="footer">
        <div class="footer-content">
            <a href="#">mentions legales</a>
        </div>
    </div>

    <script src="js/style.js"></script>
</body>