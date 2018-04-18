<?php 
 
 required_once '../BD/conexion.php';

if(isset($_POST["login"]))
{

   if(!empty($_POST["user"]) && !empty($_POST["pass"]))
   {

     $usuario=$_POST["user"];
     $pass=$_POST["pass"];

     $sql = "select * from usuario WHERE user = '$username'";
    $result = $conexion->query($sql);

     
}
  else{
  header("Location: ../html/login.html");
      die();
    }


}else{
  header("Location: ../html/login.html");
      die();
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Bienvenido</title>
  <link rel="stylesheet" type="text/css" href="plugins/bootstrap/css/bootstrap.css">
</head>
<body>
  <center>
    <div class="container">
      <div class="col-lg-4"></div>
      <div class="col-lg-4">
        <div class="jumbotron">
          <center>BIENVENIDO <?php echo $usuario ?> </center>
        </div>
      </div>



    </div>
  </center>

</body>
</html>