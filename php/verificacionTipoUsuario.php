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

          echo $user;
          echo $contra;
           
            $con = $this->conectar();

            $sql = "select idTipoUsuario from usuario where usuario='".$user."' and pass= '".$contra."'";


           $tipoUsuario = $con->query($sql);



                if ($tipoUsuario=='1') {

                   return 1;
                   echo "uno";

                }else if($tipoUsuario=='2'){

                   return 2;
                   echo "dos";

                }else if($tipoUsuario=='3'){
                      
                    return 3;
                    echo "tress";

                }else if($tipoUsuario=='4'){

                    return 4;
                    echo "cinco";
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
     $tipo= $verifi->verificasionTipo($usuario,$pass);

     if($tipo==1){

        $objLoguear= new administrador();
        $objLoguear->loginAdmin($usuario,$pass);

     }else if($tipo==2){

         $objLoguear= new cliente();
         $objLoguear->loginCliente($usuario,$pass);

     }else if($tipo==3){

         $objLoguear= new restaurante();
         $objLoguear->loginRestaurante($usuario,$pass);
      
     }else if($tipo==4){
      
         $objLoguear= new repartidor();
         $objLoguear->loginRepartidor($usuario,$pass);
     }

     
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

