
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
        <script src="api/jquery.easypiechart.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <title>Portfolio Ruben Feiteira</title>
    </head>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="./Index.php">Accueil</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarColor01">
            <ul class="navbar-nav">
                <li class="nav-item mx-3">
                    <a class="nav-link" href="experiences/experiences.html">Mon Parcours</a> 
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mes compétences</a>
                    <ul class="dropdown-menu bg-dark" aria-labelledby="dropdown1">
                        <li class="dropdown-item dropdown ">
                            <a class="dropdown-toggle text-white " id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Compétences Téchniques</a>
                            <ul class="dropdown-menu bg-dark" aria-labelledby="dropdown1-1">
                                <li class="dropdown-item text-white"><a href="skills/technicalSkills.html?id=&frontend">Front-End</a></li>
                                <li class="dropdown-item text-white"><a href="skills/technicalSkills.html?id=&backend">Back-End</a></li>
                                <li class="dropdown-item text-white"><a href="skills/technicalSkills.html?id=&basesdedonnes">Bases de Données</a></li>
                                <li class="dropdown-item text-white"><a href="skills/technicalSkills.html?id=&frameworks">Frameworks Base de Données</a></li>
                                <li class="dropdown-item text-white"><a href="skills/technicalSkills.html?id=&web">Web Technologies</a></li>
                                <li class="dropdown-item text-white"><a href="skills/technicalSkills.html?id=&mobile">Mobile Technologies</a></li>
                                <li class="dropdown-item text-white"><a href="skills/technicalSkills.html?id=&Uml">UML</a></li>
                                <li class="dropdown-item text-white"><a href="skills/technicalSkills.html?id=&autres">Autres Valences</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-item dropdown ">
                            <a class="dropdown-toggle text-white " id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Compétences Professionnelles </a>
                            <ul class="dropdown-menu bg-dark" aria-labelledby="dropdown1-1">
                                <li class="dropdown-item text-white"><a href="skills/profissionalSkils.html?id=&analyser">Analyser</a></li>
                                <li class="dropdown-item text-white"><a href="skills/profissionalSkils.html?id=&conception">Conception</a></li>
                                <li class="dropdown-item text-white"><a href="skills/profissionalSkils.html?id=&developpement">Développement</a></li>
                                <li class="dropdown-item text-white"><a href="skills/profissionalSkils.html?id=&gestionDeProjet">Gestion de projet</a></li> 
                            </ul>
                        </li>                        
                        <li class="dropdown-item dropdown ">
                            <a class="dropdown-toggle text-white " id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Compétences Humaines</a>
                            <ul class="dropdown-menu bg-dark" aria-labelledby="dropdown1-1">
                                <li class="dropdown-item text-white"><a href="skills/HumanSkills.html?id=&Autonomie">Autonomie</a></li>
                                <li class="dropdown-item text-white"><a href="skills/HumanSkills.html?id=&Curieux">Curiosité</a></li>
                                <li class="dropdown-item text-white"><a href="skills/HumanSkills.html?id=&Perspicace">Perspicace</a></li>
                                <li class="dropdown-item text-white"><a href="skills/HumanSkills.html?id=&Communication">Communication</a></li>
                                <li class="dropdown-item text-white"><a href="skills/HumanSkills.html?id=&Diplomatie">Diplomatie</a></li>
                                <li class="dropdown-item text-white"><a href="skills/HumanSkills.html?id=&Organisation">Organisation</a></li>
                                <li class="dropdown-item text-white"><a href="skills/HumanSkills.html?id=&Rigueur">Rigueur</a></li>
                                <li class="dropdown-item text-white"><a href="skills/HumanSkills.html?id=&TravailEnEquipe">Travail en équipe</a></li>
                                <li class="dropdown-item text-white"><a href="skills/HumanSkills.html?id=&Creativite">Créativité</a></li>
                                <li class="dropdown-item text-white"><a href="skills/HumanSkills.html?id=&Engagement">Engagement</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mes réalisations</a>
                    <ul class="dropdown-menu bg-dark" aria-labelledby="dropdown1">
                        <li class="dropdown-item dropdown ">
                            <a class="dropdown-toggle text-white " id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Web</a>
                            <ul class="dropdown-menu bg-dark" aria-labelledby="dropdown1-1">
                                <li class="dropdown-item text-white"><a href="projects/GestionEleves.html">Site web Gestion d'élèves(Php)</a></li>
                                <li class="dropdown-item text-white"><a href="projects/Secuserve.html">Plateforme Secuserve(Php)</a></li>
                                <li class="dropdown-item text-white"><a href="projects/Petanque.html">Site web Jeu Pétanque(Php)</a></li>
                                <li class="dropdown-item text-white"><a href="projects/Planner.html">GFI Planner(c#)</a></li>
                                <li class="dropdown-item text-white"><a href="projects/Timesheet.html">GFI TimeSheet(c#)</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-item dropdown ">
                            <a class="dropdown-toggle text-white " id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Mobile </a>
                            <ul class="dropdown-menu bg-dark" aria-labelledby="dropdown1-1">
                                <li class="dropdown-item text-white"><a href="projects/Android.html">Application Mobile(Android)</a></li>
                            </ul>
                        </li>                        
                        <li class="dropdown-item dropdown ">
                            <a class="dropdown-toggle text-white " id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Client Lourd</a>
                            <ul class="dropdown-menu bg-dark" aria-labelledby="dropdown1-1">
                                <li class="dropdown-item text-white"><a href="projects/JavaBanque.html">La Banque(Java)</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="contact/contact.html"> Me Contacter </a>
                </li>
            </ul>
        </div>
    </nav>
    <body>
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
            <div class="p-5 bg-white shadow-sm col-sm-7 letra" >

                <h4 class="card-title">Qui suis-je?</h4>
                <hr>
                <p>Bienvenue sur mon portfolio ! Je m’appelle Ruben Feiteira, j’ai 29 ans et je possède un diplôme de Concepteur Développeur Informatique, obtenu dans l’école supérieure privée d'informatique (Afip). J’ai créé ce portfolio afin de vous offrir une vision détaillée de mon parcours, mes compétences ainsi que de mes réalisations.
                </p>
                <p>Passionné par les nouvelles technologies depuis mon plus jeune âge, j’ai décidé de poursuivre l’informatique dans cette voie dès que j'ai eu l'opportunité, en pratiquant dans ma vie professionnelle. Mon parcours m’a permis de développer des compétences que je peux appliquer dans l'informatique. Au travers l'informatique je peux aider l'humanité à se développer et se concentrer dans l'essentiel de leur vie et faire avancer le monde.
                </p>
                <p>Aujourd’hui, je suis dans le milieu professionnel, avec l’envie de développer mon expérience, mes compétences, et d’explorer les nouvelles tendances du monde de l’informatique. Bonne visite !
                </p>
            </div>
        </div>
        <div class="row col-sm-12 justify-content-center">
            <div class="card-header bg-primary text-white text-center col-sm-7"  style="border: 1px solid #17a2b8;margin-top:60px;">Centre d’intérêts</div>
        </div>
        <div class="row col-sm-12 justify-content-center" style="margin-top: 10px;">
            <div class="p-5 bg-white shadow-sm col-sm-7 letra">

                <div class="row justify-content-center bg-white col-lg-12">                    
                    <div class="col-lg-4">
                        <div class="card-header bg-primary text-white text-center "  style="border: 1px solid #17a2b8;margin-top:10px;">Sport</div>
                        <div class="p-2 shadow-lg" style="margin-top: 20px;">
                            <h4>BodyBoard</h4>
                            <hr>
                            <h4>Salle de sport</h4>

                        </div>
                    </div>                   
                    <div class="col-lg-4">
                        <div class="card-header bg-primary text-white text-center "  style="border: 1px solid #17a2b8;margin-top:10px;">Cinéma</div>
                        <div class="p-2  shadow-lg" style="margin-top: 20px;">
                            <h4>Science-Fiction</h4>
                        </div>
                    </div>                    
                    <div class="col-lg-4">
                        <div class="card-header bg-primary text-white text-center "  style="border: 1px solid #17a2b8;margin-top:10px;">Musique</div>
                        <div class="p-2  shadow-lg" style="margin-top: 20px;">
                            <h4>Gospel</h4>
                            <hr>
                            <h4>Jazz</h4>
                        </div>
                    </div>                   
                </div>
                <!--div class="row justify-content-center bg-white col-lg-12" style="margin-top:30px;">                   
                    <div class="col-lg-4">
                        <div class="card-header bg-primary text-white text-center "  style="border: 1px solid #17a2b8;margin-top:10px;">Reveur Réaliste</div>
                        <div class="p-2  shadow-lg" style="margin-top: 20px;">
                            <h4>Dreaming</h4>
                            <hr>
                            <p>Il n'y a pas d'impossibles, il n'y a que des moyens pour rendre nos reves possibles.</p>
                        </div>
                    </div>                                       
                    <div class="col-lg-4">
                        <div class="card-header bg-primary text-white text-center "  style="border: 1px solid #17a2b8; margin-top:10px;">Equilibré</div>
                        <div class="p-2  shadow-lg" style="margin-top: 20px;">
                            <h4>Left or Right?</h4>
                            <hr>
                            <p>Ni trop de sel ni trop de sucre. C'est en plein millieu qui se trouve la vertue.</p>
                        </div>
                    </div>                    
                    <div class="col-lg-4">
                        <div class="card-header bg-primary text-white text-center "  style="border: 1px solid #17a2b8;margin-top:10px;">Autodidacte</div>
                        <div class="p-2  shadow-lg" style="margin-top: 20px;">
                            <h4>Go further</h4>
                            <hr>
                            <p>Parce qu’apprendre et mettre en pratique par soi même est motivant et un régale.</p>
                        </div>
                    </div>
                </div-->
            </div>
        </div>

        <div class="row col-sm-12 justify-content-center">

            <div class="card-header bg-primary text-white text-center col-sm-7"  style="border: 1px solid #17a2b8;margin-top:80px;" id="langues">Langues </div>
        </div>
        <div class=" row col-sm-12 justify-content-center" >
            <div class="p-4 bg-white shadow-sm col-sm-7 letra">
                <h4 class="card-title">Anglais</h4>
                <hr>
                <div class="row row-centered bg-white col-lg-12" style="
                     padding-left: 0px;
                     margin-right: 0px;
                     padding-right: 0px;
                     margin-left: 0px;
                     ">
                    <div class="col-lg-4 col-centered">
                        <div class="container" >   			
                            <div class="box" >
                                <div class="chart" data-percent="80">80%</div>
                                <h3>Comprehension</h3>		
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-centered">
                        <div class="container">   			
                            <div class="box">
                                <div class="chart" data-percent="70">70%</div>		
                                <h3>Parlé</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-centered">
                        <div class="container">   			
                            <div class="box">
                                <div class="chart" data-percent="70">70%</div>
                                <h3>Ecrit</h3>		
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" row col-sm-12 justify-content-center" >
            <div class="p-4 bg-white shadow-sm col-sm-7 letra">
                <h4 class="card-title">Portugais</h4>
                <hr>
                <div class="row bg-white col-lg-12" style="
                     padding-left: 0px;
                     margin-right: 0px;
                     padding-right: 0px;
                     margin-left: 0px;
                     ">
                    <div class="col-lg-4 ">
                        <div class="container" >   			
                            <div class="box" >
                                <div class="chart" data-percent="100">100%</div>
                                <h3>Comprehension</h3>		
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="container">   			
                            <div class="box">
                                <div class="chart" data-percent="100">100%</div>		
                                <h3>Parlé</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="container">   			
                            <div class="box">
                                <div class="chart" data-percent="100">100%</div>
                                <h3>Ecrit</h3>		
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" row col-sm-12 justify-content-center" >
            <div class="p-4 bg-white shadow-sm col-sm-7 letra">
                <h4 class="card-title">Français</h4>
                <hr>
                <div class="row bg-white col-lg-12" style="
                     padding-left: 0px;
                     margin-right: 0px;
                     padding-right: 0px;
                     margin-left: 0px;
                     ">
                    <div class="col-lg-4 ">
                        <div class="container" >   			
                            <div class="box" >
                                <div class="chart" data-percent="80">90%</div>
                                <h3>Comprehension</h3>		
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="container">   			
                            <div class="box">
                                <div class="chart" data-percent="70">90%</div>		
                                <h3>Parlé</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="container">   			
                            <div class="box">
                                <div class="chart" data-percent="80">80%</div>
                                <h3>Ecrit</h3>		
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>

        <footer class="page-footer font-small blue">
            <div class="footer-copyright text-center py-3">© 2018 
                 Ruben Feiteira
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

            $(".chart").easyPieChart({
                size: 130,
                barColor: '#17a2b8', //17d3e6
                scaleColor: false,
                lineWidth: 12,
                trackColor: '373737',
                lineCap: 'Circle',
                animate: 3000

            });

        });

    </script>
