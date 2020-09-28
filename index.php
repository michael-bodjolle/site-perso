<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="mb-5">
            <!-- <div class="container"> -->
            <nav class="navbar text-light fixed-top ">
                <a class="navbar-brand text-white" href="#">Accueil</a>
                <a class="navbar-brand text-white" href="#presentation">Présentation</a>
                <a class="navbar-brand text-white" href="#projects">Projets</a>
                <a class="navbar-brand text-white" href="#contact">Contact</a>
            </nav>
        </div>
        <!-- <nav  class="navbar fixed-top navbar-expand-lg navbar-lights">
        
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
  </div> -->
        </div>
        </nav>
    </header>
    <br>
    <main>
        <!--    NOM PRENOM-->
        <div class="row mb-5">
            <div class="col">
                <h2 id="name">BODJOLLE Meheza Michael <br>Developpeur web Full stack</h2>
            </div>
        </div>
        <!--    JUMBOTRON-->
        <div class="mx-auto" style="width: 85rem;">>
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4" id="presentation">Qui suis-je.</h1>
                    <p class="lead">En formation en développment web sur Marseille à La Plateforme depuis Mars,
                        <br>je recherche une alternance pour un contrat de 1 an en début mars 2021. </p>
                </div>
            </div>
        </div>
        <!--    LANGUAGES / CENTREZ INTERETS-->
        <div class="row mb- ml-5 ">
            <!--            1ERE COL-->
            <div class="col">
                <!--     TITRE LANGUAGES-->
                <div class="row">
                    <div class="col">
                        <h1 class="display-4 mb-3 text-center ">Langages et Frameworks</h1>
                    </div>
                </div>
                <!--            LOGOS-->
                <div class="row">
                    <div class="col"><img src="images/html-5.png" alt="html"></div>
                    <div class="col"><img src="images/css3.png" alt="css"></div>
                    <div class="col"><img src="images/php-logo.png" alt="php"></div>
                    <div class="col"> <img src="images/javascript-logo-1.png" alt="js"></div>
                    <div class="col"><img src="images/bootstrap.png" alt="bt"></div>
                </div>
            </div>
            <!--            FIN 1ERE COL-->

            <!--            2EME COL-->
            <div class="col ml-5">
                <div class="row">
                    <div class="col">
                        <h1 class="display-4">Centres d'interets</h1>
                        <p class="ct">Basket-ball</p>
                        <p class="ct">Danse, en compétition et spectacle </p>
                        <p class="ct">Musique</p>
                        <p class="ct">Dessin</p>
                    </div>
                    <!-- <div class="row">
                        <div class="col">
                           
                        </div>
                    </div> -->
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col">
                <h1 class="display-4 mb-5 text-center" id="projects">Projets</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div id="carouselExampleControls "  class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/screen1.PNG" class="d-block w-100"  alt="hs">
                        </div>
                        <div class="carousel-item">
                            <img src="images/screen2.PNG" class="d-block w-100" alt="sc">
                        </div>
                        <div class="carousel-item">
                            <img src="images/screen4.PNG" class="d-block w-100" alt="hs">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

        </div>
        <!--        fin carou-->
        <!--        contact-->
        <div class="row mx-auto">
            <div class="col">
                <h1 class="display-4" id="contact">Contact</h1>
                <a id="mail" href="mailto:michaelbodjolle@gmail.com">michaelbodjolle@gmail.com</a><br>
            </div>
        </div>

    </main>
    <footer>
        <div class="row">
            <div class="col d-flex flex-column align-items-center">
                <p class="cop"><a id="mail" href="https://github.com/michael-bodjolle"><img src="images/github (1).png" alt="git"></a></p>
                <p class="cop"> © 2019-2020 Meheza Michael Bodjolle. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>