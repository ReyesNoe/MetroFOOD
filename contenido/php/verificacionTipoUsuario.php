<?php 

 require_once '../BD/conexion.php';

 class verificasionTipoUsuario extends conexion
 {
    
    private $user;
    private $contra;

    function __construct()
    {
      parent::__construct();

    }

    public function getUser()
     {
         return $this->user;
     }
     
     public function setUser($user)
     {
         $this->user = $user;
     } 

     public function getContra()
     {
         return $this->contra;
     }
     
     public function setContra($contra)
     {
         $this->contra = $contra;
     }


     function verificasionTipo($a,$b){

        $user=$a;
        $contra=$b;

            $con = $this->conectar();

              $sql = "select usuario as usuario, idTipoUsuario as tipo FROM usuario 
                    WHERE estadoUsuario=1 AND usuario='".$user."' AND pass ='".$contra."'";

           $tipoUsuario = $con->query($sql);

              if ($tipoUsuario->num_rows>0) {
                $data=$tipoUsuario->fetch_assoc();

                session_start();
                $_SESSION['TIPO']=$data['tipo'];
                $_SESSION['USUARIO']=$data['usuario'];

              }else{
                header("Location: login/login.php");
              }

              echo "si es uno es admin entonces: ".$_SESSION['TIPO'];

                if ($_SESSION['TIPO']=='1') {

                    header("location: administrador/dashboardAdministrador.php");

                }else if($_SESSION['TIPO']=='2'){

                    header("location: cliente/DashBoardCliente.php");
                   
                }else if($_SESSION['TIPO']=='3'){
                      
                    header("location: Restaurante/dashboardRestaurante.php");
                    
                }else if($_SESSION['TIPO']=='4'){

                    header("location: repartidor/dashboardRepartidor.php");
                    
                }else{
                  header("location: login/login.php ");
                }         
          } 

 }


if(isset($_POST["login"]))
{

   if(!empty($_POST["user"]) && !empty($_POST["pass"]))
   {

     $usuario=$_POST["user"];
     $pass=$_POST["pass"];



     $verifi = new verificasionTipoUsuario();
     $verifi->verificasionTipo($usuario,$pass);    
}
  else{
  header("Location: login/login.php");
      die();
    }


}else{
  header("Location: login/login.php");
      die();
}

 


?>

