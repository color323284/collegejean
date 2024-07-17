<?php
require_once("initialize_admin.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- responsive -->
    <link rel="stylesheet" href="mobile.css" media="screen and (max-width: 845px)"?v=6>

    <title>Bienvenue</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <script src="script.js"></script>
    <!-- HEADER OF THE SITE -->
    <nav>
        <div id="logo">
           <a href="index.php"><img class="logo-A" src="img/logo.png" alt="log"></a> 
           <!-- <p style="Font-size:20px;">Bienvenue sur College Jean</p> -->
        </div>
       
        <div  onclick="afich()"; id="btn">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
          </div>

        <div class="menu" id="menu">
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="propos.php">A propos</a></li>
                <li><a href="service.php">Service</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <a class="bouton" style="display: inline;" href="login.php" class="connect">Connexion</a>

        </div>
  

    </nav>

    <!-- THE END OF THE HEADER -->

    <!-- BANNER -->
     <div class="banner">
            <div class="b1">
                    <h1>College jean</h1>
                    <p>
                    Bienvenue sur le site officiel du Collège Jean, un établissement éducatif où l'excellence académique et le développement personnel de chaque élève sont au cœur de nos préoccupations.
                    </p>
                    <br>
                    <p>
                    Au Collège Jean, notre mission est de préparer les jeunes à devenir des citoyens responsables, éclairés et engagés. Nous offrons un environnement stimulant où chaque élève peut s'épanouir et atteindre son plein potentiel. </p>
                    
                    <br>
                    <br>
                    <br>
                    <a class="bouton" href="login.php">Connexion</a>
                    <a class="bouton2" href="registration.php">S'inscrire</a>
            </div>
            <div class="b2" >
                <img src="img/f3.png" alt="img3">
            </div>
    </div>
     <!-- END OF THE BANNER -->

     <!-- ABOUT PART -->
      <div class="about">
        <div>
            <img src="img/zwazo.png" id="zwazo" alt="zwazo">
        </div>
        <div>
            <h1>A propos de nous</h1>
            <p>Bienvenue sur le site officiel du Collège Jean, un établissement éducatif où l'excellence académique et le développement personnel de chaque élève sont au cœur de nos préoccupations. Depuis notre fondation, nous nous engageons à offrir une éducation de qualité, favorisant la curiosité intellectuelle, la créativité et le respect des valeurs humaines. </p>
            <br>
            <p>Notre Mission
            Au Collège Jean, notre mission est de préparer les jeunes à devenir des citoyens responsables, éclairés et engagés. Nous offrons un environnement stimulant où chaque élève peut s'épanouir et atteindre son plein potentiel.</p>
            <br>
            <p>Nos Valeurs
Nous croyons en :

L'excellence académique : Encourager les élèves à viser l'excellence dans toutes les disciplines.
Le respect et l'intégrité : Favoriser un climat de respect mutuel et d'honnêteté.
L'innovation : Intégrer les nouvelles technologies et méthodes pédagogiques pour enrichir l'apprentissage.
L'inclusion et la diversité : Accueillir et valoriser chaque individu, quelle que soit son origine.
Nos Programmes
Nous proposons une variété de programmes académiques et extrascolaires conçus pour développer les compétences intellectuelles, sociales et émotionnelles de nos élèves. Nos enseignants dévoués et passionnés travaillent en étroite collaboration avec les familles pour soutenir le parcours éducatif de chaque élève.

Rejoignez-nous au Collège Jean et découvrez un lieu où l'apprentissage est une aventure passionnante et enrichissante. Ensemble, construisons un avenir prometteur pour nos jeunes.

</p>
            <br>
            <a class="bouton" href="propos.php">En savoir plus</a>
        </div>
        
      </div>
      <!-- THE END OF THE ABOUT -->

      <!-- OUR SERVICES -->
       <div class="container">
        <br>
        <h1 style="text-align: center;">Nos services</h1>
            <div class="services">
                        <div class="service">
                            <img src="img/glob.png" alt="">
                            <br>
                            <h3>succursale 1</h3>
                            <p>Carrefour Thor 12 #13 B</p>
                        </div>

                        <div class="service">
                            <img src="img/glob.png" alt="">
                            <br>
                            <h3>succursale 1</h3>
                            <p>Petion ville  #13 B</p>
                        </div>
            
                <div class="service">
                <a href="login.php"><img src="img/load.jpg" alt="log"></a> 
                    <br>
                    <h3>connexion</h3>
                    <p>voulez vous connecter</p>
                   
                </div>

                <div class="service">
                    <!-- <img src="img/service.jpg" alt=""> -->
                  
           <a href="contact.php"><img src="img/send.png" alt="log"></a> 
        
                    <br>
                    <h3>College Jean</h3>
                    <p>vos Commentaires</p>
                </div>


        </div>
           
         <!-- FORM -->
    <div class="container-adm-log dash">
        <h1>Contactez-nous</h1>
        <form action="contact.php" method="post">

            <label for="name">Nom:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Envoyer</button>
        </form>
    </div>
    <!-- THE END OF THE FORM -->
       <!-- THE END OF THE SERVICE -->
        <!-- FOOTER -->
         <footer>
            <p>&copy; Copyright college Jean, 2022</p>
            <br>
            <a href="#top">Retour en haut de la page</a>
         </footer>
         <!-- THE END OF THE FOOTER -->
  
</body>
</html>

