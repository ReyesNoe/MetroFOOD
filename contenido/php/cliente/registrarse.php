<!DOCTYPE html>
<html>
<head>
  <title></title>
<link rel="stylesheet" type="text/css" href="../../vendor/plugins/bootstrap/css/bootstrap.css">
<script src="../../vendor/plugins/JQuery/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../../vendor/plugins/bootstrap/js/bootstrap.js"></script>

</head>
<body background="">
 <center><div class="container">
<br>
  <div class="form-column col-md-4 col-sm-4 col-xs-4" ></div>
        <div class="card card-container form-column col-md-3 col-sm-3 col-xs-3" >
           

            <img id="profile-img" class="profile-img-card" src="../../img/moto.png" />

            <div class="content-form">
                <h1>¿Que Esperas? <br> <h3>Registrate y Ordena<h3></h1>
            <h5> ¿Ya tienes una Cuenta? <a href="index.php">Inicia Sesion</a></h5>
           
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="POST" action="validacion.php">
                <span id="reauth-user" class="reauth-user"></span>
                <input type="text" name="inputUser" class="form-control" placeholder="Nombre:" required autofocus>
                <input type="text" name="inputUser" class="form-control" placeholder="apellido:" required autofocus>
                <input type="text" name="inputUser" class="form-control" placeholder="Correo electronico: " required >
                <input type="password" name="inputPass" class="form-control" placeholder="Contraseña:" required>
                <input type="password" name="inputPass" class="form-control" placeholder="confirmar Contraseña:" required>
                <div id="remember" class="checkbox">
                    <label>
                    </label>
                </div>
                <input class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="login" value="Registrate" href="Dashboard/dashboardregis.php"></input>
            </form><!-- /form -->
            </br>

           
                
             
            
        </div><!-- /card-container -->
      </div>
    </div><!-- /container -->
</center>

</body>
</html>
