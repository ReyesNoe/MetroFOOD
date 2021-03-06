<?php 
  session_start();
  if($_SESSION['TIPO']=='1'){

  }else{
    session_destroy();
    header('location: ../../index.html');
  }

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
	<link rel="stylesheet" type="text/css" href="../../vendor/bootstrap/css/bootstrap.css">
	<script src="../../vendor/jQuery/jquery-3.2.1.min.js"></script>	
	<script type="text/javascript" src="../../vendor/js/bootstrap.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">MetroFood(ADMIN)</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gestionRestaurantes.php">Gestion de Restaurantes</a>
      </li>
     <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
  -->
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <li class="nav-item">
        <a class="nav-link disabled" href="#">   </a>
      </li>
    <a href="../cerrarSesion.php"><button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Cerrar sesión</button></a>
  </div>
</nav>	


 <div class="container">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
        <h1 class="display-3"> <img src="../../img/moto.png" width="100px" height="100px">  MetroFood</h1>
        <p class="lead">Bienvenido a la pagina en donde podras realizar tus pedidos y asi disfrutar de los mejores productos en pocos minutos.</a>
      </header>

      <!-- Page Features -->
      <div class="row text-center">

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
              <h4 class="card-title">Pollo Campero</h4>
              <p class="card-text">Siente el sabor de la magia de Sabor campero! has click para ver nuestras promociones</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Ver Mas...</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
              <h4 class="card-title">Taco Bell</h4>
              <p class="card-text">Si no hay taco no hay Fiesta, ve nuestras mejores promociones, has click</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Ver Mas...</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
              <h4 class="card-title">Wendys</h4>
              <p class="card-text">Mira nuestras Promociones y descuentos especiales solo en esta aplicacion!</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Ver Mas...</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
              <h4 class="card-title">Pizzeria Italiana</h4>
              <p class="card-text">El sabor de Italia a tan solo unos minutos, Conoce mas acerca de nuestras Promociones!!</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Ver Mas...</a>
            </div>
          </div>
        </div>

      </div>
      <!-- /.row -->

       <div class="row text-center">

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
              <h4 class="card-title">China Work</h4>
              <p class="card-text">Alguna Vez has sentido que estas mas cerca de China de lo que crees, has click y Sorprendete!</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Ver Mas...</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
              <h4 class="card-title">Tony's Roma</h4>
              <p class="card-text"> EL sabor Gourmet hasta la puerta de tu casa! clickea y ordena nuestros Productos!</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Ver Mas...</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
              <h4 class="card-title">Go Green</h4>
              <p class="card-text">Mas Vegetariano que nadie, Mas cerca de ti! has click y ve nuestras Promociones!</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Ver Mas...</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
              <h4 class="card-title">Beniggans</h4>
              <p class="card-text">Las mejores Hambuguesas de Todo El Salvador a solo un click  y unos minutos !</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Ver Mas...</a>
            </div>
          </div>
        </div>

      </div>
       <!--------------------------------- CARRUSEL-------------------------------------------- -->

             <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
                  
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="../../imagenes/1.jpg" alt="First slide" style="width:1200px; height: 500px;">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../../imagenes/2.jpg" alt="Second slide" style="width:1200px; height: 500px;">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../../imagenes/3.jpg" alt="Forth slide" style="width:1200px; height: 500px;">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../../imagenes/4.jpg" alt="Fifth slide" style="width:1200px; height: 500px;">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../../imagenes/5.png" alt="Sixth slide" style="width:1200px; height: 500px;">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../../imagenes/6.jpg" alt="Seventh slide" style="width:1200px; height: 500px;">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../../imagenes/7.jpg" alt="Eighth slide" style="width:1200px; height: 500px;">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../../imagenes/8.jpg" alt="Nineth slide" style="width:1200px; height: 500px;">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../../imagenes/9.jpg" alt="Tenth slide" style="width:1200px; height: 500px;">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>

             <br><hr><br>


    </div>

    <!-- /.container -->

   
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
         <p class="m-0 text-center text-white">Copyright &copy; MetroFood 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>