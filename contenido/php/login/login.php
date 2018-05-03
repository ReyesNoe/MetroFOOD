<!DOCTYPE html>
<html>
<head>
  <title></title>

<link rel="stylesheet" type="text/css" href="../../vendor/plugins/bootstrap/css/bootstrap.css">
<script src="../../vendor/plugins/JQuery/jquery-3.3.1.min.js"></script>
<script src="../../vendor/plugins/bootstrap/js/bootstrap.min.js"></script>

</head>
<body background="">
 <center><div class="container">
<br><br><br><br><br><br>
  <div class="form-column col-md-4 col-sm-4 col-xs-4" ></div>
        <div class="card card-container form-column col-md-3 col-sm-3 col-xs-3" >
           

            <img id="profile-img" class="profile-img-card" src="../../img/moto.png" />

            <div class="content-form">
                <h1>Inicia Sesión</h1>
            <h4>¿METROFOOT? <a href="../cliente/registrarse.php">Regístrate</a></h4>
           
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="POST" action="../verificacionTipoUsuario.php">
                <span id="reauth-user" class="reauth-user"></span>
                <input type="text" name="user" class="form-control" placeholder="Usuario" value="" required autofocus>
                <input type="password" name="pass" class="form-control" placeholder="Password" value="" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me" name="recordar"> Recordarme
                    </label>
                </div>
                <input class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="login">Iniciar Sesion</input>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Olvidaste la contraseña?
            </a>
        </div><!-- /card-container -->
      </div>
    </div><!-- /container -->
</center>

</body>
</html>