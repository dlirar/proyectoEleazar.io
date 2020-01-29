<!DOCTYPE HTML>

<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/glyphicon.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <link rel="stylesheet" type="text/css" href="footer.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
        <title>Formato</title>
    </head>
    
    <body>
        <div class="container-fluid">
            <!-- Navbar contenedor del menú -->
            <nav class="navbar navbar-expand-md navbar-custom fixed-top">
                <a class="navbar-brand" href="/">Morena</a>
                <button class="navbar-toggler ml-auto custom-toggler" type="button" data-toggle="collapse" data-target="#colapseMenu" aria-controls="colapseMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>    
                </button>
                
                <div class="collapse navbar-collapse" id="colapseMenu">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Inicio</a>
                        </li>
                         <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Actvidad
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Iniciativa</a>
                                    <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Punto de acuerdo</a>
                                    <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Comunicado</a>
                                     <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Efeméride</a>
                            </div>
                        </div>     
                    </ul>
                    
                    <ul class="nav navbar-nav offset-8">
                        <li class="nav-item"><a class="nav-link" href="#"><span class="glyphicon glyphicon-user"></span>Perfil</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><span class="glyphicon glyphicon-log-in"></span> Cerrar sesión</a></li>
                    </ul>
                </div>
            </nav>    
        </div>
        
        <div class="container-fluid" id="carousel">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 resize" src="morena1.png" alt="Primer slide">
                        <!--<div class="carousel-caption d-none d-md-block">
                            <h5>My Caption Title (1st Image)</h5>
                            <p>The whole caption will only show up if the screen is at least medium size.</p>
                        </div>-->
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 resize" src="portada-me%CC%81xico.jpg" alt="Segundo slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 resize" src="reforma.jpg" alt="Tercer slide">
                    </div>
                    
                </div>
                
                
            </div>
        </div>
        
        <div class="container-fluid my-4">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="card-title">Bienvenido a su sistema</h3>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
        
        <!-- Footer -->
        <footer class="page-footer font-small footer-custom-color">

            <!-- Footer Links -->
            <div class="container-fluid text-center text-md-left">

              <!-- renglón -->
              <div class="row">

                <!-- columna -->
                <div class="col-md-6 mt-md-0 mt-3">

                  <!-- contenido -->
                  <h5 class="text-uppercase">Contenido del footer</h5>
                  <p>Información relacionada con el proyecto.</p>

                </div>

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class="text-uppercase">Redes sociales</h5>

                    <ul class="list-unstyled">
                      <li>
                        <a class="fb-ic link" href="#">
                            <span>facebook</span><i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"></i>
                        </a>
                      </li>
                      <br>
                      <li>
                         <a class="tw-ic link" href="#">
                            <span>Twitter</span><i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"></i>
                        </a>
                      </li>
                      <br>
                      <li>
                        <a class="ins-ic link" href="#">
                            <span>Instagram</span><i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                      </li>
                    </ul>

                  </div>
                  <!-- Grid column -->

              </div>
              <!-- Grid row -->

            </div>
            <!-- Footer Links -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2019 Copyright:
              <a class="link" href="https://mdbootstrap.com/education/bootstrap/"> Equipo desarrollador</a>
            </div>
            <!-- Copyright -->

          </footer>
          <!-- Footer -->

        
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- Cambiamos el tiempo con el que se intercalan las imagenes -->
          <script>
            $('.carousel').carousel({
              interval: 1000 * 3
            });
        </script>
        
    </body>
    
    
    
    
    
</html>