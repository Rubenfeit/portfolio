
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
        <title>Full Stack Conf</title>

        <style>

        </style>

    </head>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="./Index.php">Ruben Feiteira</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarColor01">
            <ul class="navbar-nav">
                <li class="nav-item mx-3">
                    <a class="nav-link" href="experiences/experiences.html">Mes Expériences</a>
                </li>

                <!--li class="nav-item  dropdown mx-3">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Mes compétances
                  </a>
                  <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                    <a class="nav-link  dropdown-item bg-dark" href="#">Compétances Téchniques</a>
                    <a class="nav-link dropdown-item bg-dark" href="#">Compétances Profissionnelles</a>
                    <a class="nav-link  dropdown-item bg-dark" href="#">Compétances Humaines</a>
                  </div>
                </li-->

                <!--https://stackoverflow.com/questions/15300470/jquery-ajax-form-using-mail-php-script-sends-email-but-post-data-from-html-fo-->
                <!--https://www.udemy.com/unrealcourse/-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mes compétances</a>
                    <ul class="dropdown-menu bg-dark" aria-labelledby="dropdown1">
                        <!--li class="dropdown-item text-white" href="#"><a>Action 1</a></li-->
                        <!--a class="nav-link  dropdown-item bg-dark" href="skills/skills.html" style="padding-left: 25px;">Compétances Téchniques</a-->

                        <li class="dropdown-item dropdown ">
                            <a class="dropdown-toggle text-white " id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Compétances Téchniques</a>
                            <ul class="dropdown-menu bg-dark" aria-labelledby="dropdown1-1">
                                <li class="dropdown-item text-white"><a href="skills/technicalSkills.html?id=&frontend">Front-End</a></li>
                                <li class="dropdown-item text-white"><a href="skills/technicalSkills.html?id=&backend">Back-End</a></li>
                                <li class="dropdown-item text-white"><a href="skills/technicalSkills.html?id=&basesdedonnes">Bases de Données</a></li>
                                <li class="dropdown-item text-white"><a href="skills/technicalSkills.html?id=&frameworks">Frameworks Base de Données</a></li>
                                <li class="dropdown-item text-white"><a href="skills/technicalSkills.html?id=&web">Web Technologies</a></li>
                                <li class="dropdown-item text-white"><a href="skills/technicalSkills.html?id=&mobile">Mobile Technologies</a></li>
                                <li class="dropdown-item text-white"><a href="skills/technicalSkills.html?id=&Uml">UML</a></li>
                                <li class="dropdown-item text-white"><a href="skills/technicalSkills.html?id=&autres">Autres Valances</a></li>
                            </ul>
                        </li>

                        <li class="dropdown-item dropdown ">
                            <a class="dropdown-toggle text-white " id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Compétences Professionnelles </a>
                            <ul class="dropdown-menu bg-dark" aria-labelledby="dropdown1-1">
                                <li class="dropdown-item text-white"><a href="skills/profissionalSkils.html?id=&analyser">Analyser</a></li>
                                <li class="dropdown-item text-white"><a href="skills/profissionalSkils.html?id=&gestionDeProjet">Gestion de projet</a></li>
                                <li class="dropdown-item text-white"><a href="skills/profissionalSkils.html?id=&algorithme">Algorithme</a></li>
                                <li class="dropdown-item text-white"><a href="skills/profissionalSkils.html?id=&langues">Langues</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-item dropdown ">
                            <a class="dropdown-toggle text-white " id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Compétances Humaines</a>
                            <ul class="dropdown-menu bg-dark" aria-labelledby="dropdown1-1">
                                <li class="dropdown-item text-white" href="#"><a>Action 1.1</a></li>
                                <li class="dropdown-item dropdown">
                                    <a class="dropdown-toggle text-white" id="dropdown1-1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown1.1.1</a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdown1-1-1">
                                        <li class="dropdown-item" href="#"><a>Action 1.1.1</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>


                    </ul>
                </li>

                <!--a class="nav-link  dropdown-item bg-dark" href="#">GFI</a>
                <a class="nav-link  dropdown-item bg-dark" href="#">AFIP</a>
                <a class="nav-link dropdown-item bg-dark" href="#">Secuserve</a>
                <a class="nav-link  dropdown-item bg-dark" href="#">By My Self</a>
                
                          <a class="nav-link  dropdown-item bg-dark" href="#">Anglais</a>
                <a class="nav-link  dropdown-item bg-dark" href="#">Gestion de Projets</a>
                <a class="nav-link dropdown-item bg-dark" href="#">Conception d'applications</a>
                <a class="nav-link  dropdown-item bg-dark" href="#">Développement</a>
      
                            <a class="nav-link dropdown-item bg-dark" href="#">Autonimie</a>
                <a class="nav-link dropdown-item bg-dark" href="#">Communication</a>
                <a class="nav-link dropdown-item bg-dark" href="#">Diplomatie</a>
                <a class="nav-link dropdown-item bg-dark" href="#">Organisation</a>
                <a class="nav-link dropdown-item bg-dark" href="#">Rigueuer</a>
                <a class="nav-link dropdown-item bg-dark" href="#"> Travial En équipe</a-->


                <li class="nav-item  dropdown mx-3">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Mes réalisations
                    </a>
                    <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                        <a class="nav-link  dropdown-item bg-dark" href="#">Plate-forme Gestion d'eleves</a>
                        <a class="nav-link  dropdown-item bg-dark" href="#">Project banque Java (Jbdc et un autre avec Hibernate)</a>
                        <a class="nav-link  dropdown-item bg-dark" href="projects/Android.html">Apllication Mobile(Android)</a>
                        <a class="nav-link  dropdown-item bg-dark" href="#">Un Site</a>
                        <a class="nav-link  dropdown-item bg-dark" href="projects/Secuserve.html">Secuserve</a>
                        <a class="nav-link  dropdown-item bg-dark" href="projects/Petanque.html">Application web Gestion jeux Petanque</a>
                        <a class="nav-link  dropdown-item bg-dark" href="#">Planner</a>
                        <a class="nav-link  dropdown-item bg-dark" href="#">TimeSheet</a>
                        <!--div class="dropdown-divider"></div-->

                    </div>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="contact/contact.html"> Me Contacter </a>
                </li>
            </ul>
        </div>
    </nav>


    <body class="bg-light">

        <div class='content p-5'>
            <div class="row mt-5 mx-lg-3 bg-white shadow-sm">
                <div id="carouselExampleSlidesOnly" class="carousel slide col-md-7 p-5 mx-auto my-5 shadow-lg" data-ride="carousel" style="height: 246px;" data-interval="6000">
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <h1 class="display-5 font-weight-normal">"L'Homme se découvre quand il se mesure à l'obstacle."</h1>
                            <p class="lead font-weight-normal text-right">Antoine De Saint Exupery</p>
                        </div>

                        <div class="carousel-item">
                            <h1 class="display-5 font-weight-normal">"Il y a plus de courage que des talents dans la plupart des réussites."</h1>
                            <p class="lead font-weight-normal text-right">Félix Leclerc</p>
                        </div>


                        <div class="carousel-item">
                            <h1 class="display-5 font-weight-normal">"C'est dans l'effort que l'on trouve la satisfaction et non dans la réussite. Un plein effort est une pleine victoire."</h1>
                            <p class="lead font-weight-normal text-right">Ghandi</p>
                        </div>

                        <div class="carousel-item">
                            <h1 class="display-5 font-weight-normal">"Impose ta chance, serre ton bonheur et va vers ton risque. A te regarder, ils s’habitueront."</h1>
                            <p class="lead font-weight-normal text-right">René Char</p>
                        </div>
                    </div>
                </div> 
            </div>

        </div>


        <div class="row col-sm-12 justify-content-center">

            <div class="card-header bg-primary text-white text-center col-sm-7"  style="border: 1px solid #17a2b8;margin-top:60px;">Ruben Feiteira</div>
        </div>

        <div class="row col-sm-12 justify-content-center" style="margin-top: 10px;">
            <div class="p-5 bg-white shadow-sm col-sm-7" style="
                 line-height: 1.5;
                 margin-bottom: 30px;
                 margin-top: 0px;
                 word-spacing: 0.15em;
                 letter-spacing: 0.01em;
                 color: #222222; 
                 margin: 1em 0; 
                 font-weight: normal; 
                 font-family: 'ralewayregular' sans-serif;">

                <h4 class="card-title">Qui suis-je?</h4>
                <hr>


                <p>Bienvenue sur mon portfolio ! Je m’appelle Ruben Feiteira, j’ai 29 ans et je possède un diplôme de Concepteur Developpeur Ingotmatique, obtenu dans l’école supérieure privée d'informatique (Afip). J’ai créé ce portfolio afin de vous offrir une vision détaillée de mon parcours, mes compétences ainsi que de mes réalisations.</p>

                <p>Passionné par les nouvelles technologies depuis mon plus jeune âge, j’ai décidé de poursuivre l’informatique dans cette voie dés que j'ai eu opportunité,  en pratiquant dans ma vie professionnelle. Mon parcours m’a permis de développer des compétences que je peux appliquer dans l'informatique. Atravers l'informatique je peux aider l'humanité à ce developper et ce concentrer dans l'essential de leur vie et faire avancer le monde.</p>

                <p>Aujourd’hui, je suis dans le milieu professionnel, avec l’envie de développer mon expérience, mes compétences, et d’explorer les nouvelles tendances du monde de l’informatique.
                    Bonne visite !</p>
            </div>
        </div>



        <!--div class="card-header bg-primary text-white text-center container justify-content-center col-sm-12"  style="border: 1px solid #17a2b8; width: 50%">Langues?</div>
       
          <div class="row justify-content-center bg-white col-sm-12">
           <div class="col-lg-4">
             <div class="card text-white mb-3" style="max-width: 18rem;">
             <div class="card-header bg-primary text-center">Portugais</div>
               <div class="card-body">
                 <h5 class="card-title">Loving life</h5>
                 <p class="card-text">nous avons qu'une seul, il faut, il faut profiter de chaque jout à fond.</p>
               </div>
             </div>
           </div>
       
             <div class="row justify-content-center bg-white col-sm-12">
           <div class="col-lg-4">
             <div class="card text-white mb-3" style="max-width: 18rem;">
             <div class="card-header bg-primary text-center">Français</div>
               <div class="card-body">
                 <h5 class="card-title">Loving life</h5>
                 <p class="card-text">nous avons qu'une seul, il faut, il faut profiter de chaque jout à fond.</p>
               </div>
             </div>
           </div>
       
             <div class="row justify-content-center bg-white col-sm-12">
           <div class="col-lg-4">
             <div class="card text-white mb-3" style="max-width: 18rem;">
             <div class="card-header bg-primary text-center">Anglais</div>
               <div class="card-body">
                 <h5 class="card-title">Loving life</h5>
                 <p class="card-text">nous avons qu'une seul, il faut, il faut profiter de chaque jout à fond.</p>
               </div>
             </div>
           </div>
         </div>
       </div-->


        <div class="row col-sm-12 justify-content-center">

            <div class="card-header bg-primary text-white text-center col-sm-7"  style="border: 1px solid #17a2b8;margin-top:60px;">Comment suis je?</div>
        </div>

        <div class="row col-sm-12 justify-content-center" style="margin-top: 10px;">
            <div class="p-5 bg-white shadow-sm col-sm-7" style="
                 line-height: 1.5;
                 margin-bottom: 30px;
                 margin-top: 100px;
                 word-spacing: 0.15em;
                 letter-spacing: 0.01em;
                 color: #222222; 
                 margin: 1em 0; 
                 font-weight: normal; 
                 font-family: 'ralewayregular' sans-serif;">

                <div class="row justify-content-center bg-white col-lg-12">
                    
                    <div class="col-lg-4">
                        <div class="card-header bg-primary text-white text-center "  style="border: 1px solid #17a2b8;margin-top:10px;">Passioné pour la vie</div>
                        <div class="p-2 shadow-lg" style="margin-top: 20px;">
                            <h4>Loving life</h4>
                            <hr>
                            <p>nous avons qu'une seul vie, il faut, il faut profiter de chaque jout à fond.</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="card-header bg-primary text-white text-center "  style="border: 1px solid #17a2b8;margin-top:10px;">Complet</div>
                        <div class="p-2  shadow-lg" style="margin-top: 20px;">
                            <h4>From A to Z</h4>
                            <hr>
                            <p>J'ai une vie professional et personelle (marie, chien, bodyboard, music, et je suis épanoui en tous ce que fait.</p>
                        </div>
                    </div>

                    
                    <div class="col-lg-4">
                        <div class="card-header bg-primary text-white text-center "  style="border: 1px solid #17a2b8;margin-top:10px;">Curieux</div>
                        <div class="p-2  shadow-lg" style="margin-top: 20px;">
                            <h4>Why?</h4>
                            <hr>
                            <p>Il y a une certaine mystique dans l'inconnue qui nous amene a decouvrir pourquoi ça fonctionne de tel façon. c'est le significat de la vie, la decouverte</p>
                        </div>
                    </div>
                    
                </div>
                <div class="row justify-content-center bg-white col-lg-12" style="margin-top:30px;">
                    
                    <div class="col-lg-4">
                        <div class="card-header bg-primary text-white text-center "  style="border: 1px solid #17a2b8;margin-top:10px;">Reveur Realiste</div>
                        <div class="p-2  shadow-lg" style="margin-top: 20px;">
                            <h4>Dreaming</h4>
                            <hr>
                            <p>Il n'y a pas d'empossibles, il y a des moyens pour rendre nos reves possibles.</p>
                        </div>
                    </div>
                                        
                    <div class="col-lg-4">
                        <div class="card-header bg-primary text-white text-center "  style="border: 1px solid #17a2b8; margin-top:10px;">Equilibré</div>
                        <div class="p-2  shadow-lg" style="margin-top: 20px;">
                            <h4>Left or Right?</h4>
                            <hr>
                            <p>Ni trop de sel ni trop de sucre.c'est en équilibre que la vertu est</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="card-header bg-primary text-white text-center "  style="border: 1px solid #17a2b8;margin-top:10px;">Autodidacte</div>
                        <div class="p-2  shadow-lg" style="margin-top: 20px;">
                            <h4>Go further</h4>
                            <hr>
                            <p>Parce qu’apprendre pour soit même et mettre en pratique c'est motivant et un régale.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>


</body>

<footer class="page-footer font-small blue">
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
    </div>
</footer>

<script type="text/javascript">
    $(document).ready(function () {

        $('.navbar .dropdown-item').on('mouseenter', function (e) {
            var $el = $(this).children('.dropdown-toggle');
            var $parent = $el.offsetParent(".dropdown-menu");
            $(this).parent("li").toggleClass('open');

            if (!$parent.parent().hasClass('navbar-nav')) {
                if ($parent.hasClass('show')) {
                    $parent.removeClass('show');
                    $el.next().removeClass('show');
                    $el.next().css({"top": -999, "left": -999});
                } else {
                    $parent.parent().find('.show').removeClass('show');
                    $parent.addClass('show');
                    $el.next().addClass('show');
                    $el.next().css({"top": $el[0].offsetTop, "left": $parent.outerWidth() - 4});
                }
                e.preventDefault();
                e.stopPropagation();
            }
        });

        $('.navbar .dropdown').on('hidden.bs.dropdown', function () {
            $(this).find('li.dropdown').removeClass('show open');
            $(this).find('ul.dropdown-menu').removeClass('show open');
        });

    });

</script>
