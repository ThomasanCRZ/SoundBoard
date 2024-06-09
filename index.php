<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32"  href="assets/favicon/favicon.png">
    <title>Sound Board</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-tertiary d-flex ">
            <div class="container d-flex ">
                <a class="navbar-brand text-white text-logo" href="#">
                    <img src="assets/img/svg_v2.svg" alt="" width="90" height="90"> SoundBoard
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-white" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-white" href="#">Comming soon</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="pb-5">
        <div class="container-fluid pt-5">
            <div class="container d-flex justify-content-center pt-5">
                <div class="row text-center">
                    <div class="col-12">
                        <h1 >L'histoire derrière SoundBoard ?</h1>
                    </div>
                    <div class="col-12 pt-4">
                        <p class="text-white intro">En france dans la région Grand-Est, Thomas, un développeur web junior, et ses deux amis Oeuftord et Guigui,
                             se retrouvaient chaque soir sur un jeu en ligne et s'amusaient en vocal sur Discord. 
                             Inspirés par ces moments hilarants, notre jeune développeur décida alor de créer un site de soundboard pour 
                             agrémenter leurs soirées gaming. Après des nuits de codage et de plaisir, il lancait enfin ce 
                             site, devenant un succès parmi leurs amis et au-delà.
                             Leur création renforça leur complicité et apporta des rires à de nombreux visiteurs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="button-section mt-5">
    <div class="container d-flex justify-content-center">
            <div class="row">
                <div class="col">
                    <h2 class=" h1 text-white text-center">SoundBoard</h2>
                    <p class="text-white lead pt-4 ">↓ Cliquez sur un boutton pour jouer un son ↓</p>
                </div>
        </div>
    </div>
        <div class="container-fluid">
            <div class="container d-flex">
                <div class="row gy-5 mb-4 py-5 ">
                    <div class="col-12 d-flex flex-wrap ">

                        <?php 
                            $i = 0; 
                            while ($i < 20) { ?>
                        <div class="col-3 d-flex justify-content-center">
                            <button class="btnSound mb-5">
                                <img src="assets/img/svg_v2.svg" alt="" >
                                    <div class="loader">
                                        <span class="bar"></span>
                                        <span class="bar"></span>
                                        <span class="bar"></span>
                                    </div>
                                    <div class="nameSound"></div>
                            </button>
                        </div>
                        <?php $i++; } ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <div class="col-4 d-flex justify-content-center text-white my-4 mb-4" >
                        <a href="" class="nav-link">Accueil</a>
                    </div>
                    <div class="col-4 d-flex justify-content-center text-white my-4 mb-4 border-start border-end">
                        <a href="" class="nav-link">Contact</a>
                    </div>
                    <div class="col-4 d-flex justify-content-center text-white my-4 mb-4">
                        <a href="" class="nav-link">Comming Soon</a>
                    </div>
                </div>

        </div>
        <p class="text-center text-white d-flex justify-content-center align-items-center mt-4 ">
            © 2021 Copyright: SoundBoard
        </p>
    </footer>
    
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>