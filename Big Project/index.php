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
    <div class="container">
        <div class="pres-site">
            <h1>Un super site</h1>
            <p>Petite description</p>
        </div>
        <h2 class="page-title">Projets</h2>
        <div class="card-container">
            <div class="card">
                <a href="projects.html">
                    <img src="img/singe.jpg" alt="singe">
                    <h3>Titre carte</h3>
                    <p>presentation carte</p>
                </a>
            </div>
            <div class="card">
                <a href="projects.html">
                    <img src="img/singe.jpg" alt="singe">
                    <h3>Titre carte</h3>
                    <p>presentation carte</p>
                </a>
            </div>
            <div class="card">
                <a href="projects.html">
                    <img src="img/julie.jpg" alt="singe">
                    <h3>Titre carte</h3>
                    <p>presentation carte</p>
                </a>
            </div>
        </div>
        <h2 class="page-title">Jeux</h2>
        <div class="game-container">
            <div class="game">
                <a href="#">
                    <img src="img/jeu1.jpg" alt="jeu1">
                    <h3>Titre Jeu</h3>
                    <p>presentation jeu1</p>
                </a>
            </div>
            <div class="game">
                <a href="#">
                    <img src="img/jeu2.jpg" alt="jeu1">
                    <h3>Titre Jeu</h3>
                    <p>presentation jeu1</p>
                </a>
            </div>
        </div>
        <h2 class="page-title">Mon CV</h2>
        <div class="cv-container">
            <div class="cv-card">
                <a href="#">
                    <img src="img/cv.jpg" alt="cv img">
                    <h3>Mon CV</h3>
                    <p>Lucas Durand, etudiant à guardia cybe...</p>
                </a>
            </div>
            <a href="CV/CV_Lucas_Durand.pdf" title="Pdf" target="_blank">Téléchargez mon CV</a>

        </div>
        
        <div class="livre-dor">
            <h2>Laissez un avis !</h2>
            <div class="livre-dor-content">
                <form action="action_page.php">        
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Your name" required>  
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" placholder="Your email" required>
                    <label for="message">Subject</label>
                    <textarea id="message" name="message" placeholder="Write something.." style="height:200px" required></textarea>
                    <input type="submit" value="Submit">                
                </form>
            </div>
        </div>
    </div>
    
    <div class="footer">
        <div class="footer-content">
            <a href="#">mentions legales</a>
        </div>
    </div>

<!--  hidden.html   -->

    <script src="js/style.js"></script>

</body>