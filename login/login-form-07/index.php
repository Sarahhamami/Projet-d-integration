<?php


 
    $host="localhost";
    $user="root";
    $pw="";
    $db="ehospital";
    $conx=mysqli_connect($host,$user,$pw,$db);
if($conx==false){
    echo "error connexion";
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
  session_start();
  $_SESSION['mail']=$_POST["mail"];
  $_SESSION['psw']=$_POST["psw"];

  $email=$_POST["mail"];
  $password=$_POST["psw"];
  $sql="select *  FROM `users` WHERE Email='".$email."' and mdp='".$password."'";
 $res=mysqli_query($conx,$sql);
 $num=mysqli_num_rows($res);
 if ($num<0){ 
 
    header("location:erreur.php");
   
} 
else{
 $row=mysqli_fetch_array($res);
 if ((isset($row["prenom"]))&& (isset($row["prenom"]))) {
  $_SESSION['prenom']=$row["prenom"];
 $_SESSION['nom']=$row["nom"];
 $username=$_POST["mail"];
$password=$_POST["psw"];

}
 
if (isset($row["role"])&& (isset($row["statut"]))){
  if (($row["Email"]!= $username)||($row["mdp"]!=$password)) {
    echo"Email ou mot de passe  incorrect";
  
  }

 if((($row["role"]=="docteur")||(($row["role"]=="patient"))&&($row["statut"]==1) && ($row["Email"]== $username)&&($row["mdp"]==$password)))
 {
   header('location:../index.php');
 }
 
 else  if((($row["role"]=="docteur")||(($row["role"]=="patient"))&&($row["statut"]==0) && ($row["Email"]== $username)&&($row["mdp"]==$password)))
 {
   header('location:../activation_en_cours.html');
 }
 else if(($row["role"]=="admin") &&($row["Email"]== $username)&&($row["mdp"]==$password)){
   header('location:../../dashboard_admin/index.php');
 }


}}}
?>
<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/3.png" />
    <title>E-hospital</title>
  </head>
  <body>

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3 align="center">SE CONNECTER </h3>
              <p class="mb-4">Saisir votre adresse mail et votre mot de passe </p>
            </div>
            <form action="#" method="POST">
              <div class="form-group first">
                <label  name="name" >Email</label>
                <input type="text" name="mail" class="form-control" id="username">

              </div>
              <div class="form-group last mb-4">
                <label  name="psw">mot de passe</label>
                <input type="password" name="psw" class="form-control" id="password">
                
              </div>
              
              <div class="d-flex mb-5 align-items-center">
               <a  href="inscription.php" class="forgot-pass"> Inscrivez-vous </a></span> 

                </label>
         
              </div>

              <input type="submit" value="CONNEXION" class="btn btn-block btn-primary">

              
              
             
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>