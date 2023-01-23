













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
              <h3 > INSCRIPTION  </h3>
              
            </div>
            <form  name="form1" action="#" method="post">
              <div>
              <div class="form-group first">
                <label for="spec">Saisir votre specialité  :</label>
                <input type="text" name="spec" class="form-control" id="spec">

              </div>
              
             
             
        <br>
              
             
             
             
      <?php  session_start();
        $mail=$_SESSION['mail'];
         
              
     


        $host="localhost";
            $user="root";
            $pw="";
            $db="ehospital";
            $conx=mysqli_connect($host,$user,$pw,$db);
            if($conx==false){
            echo "error connexion";
            }
           
              if($_SERVER["REQUEST_METHOD"]=="POST"){
                
                $spec=$_POST['spec'];
                
               
                
               
        
                  if(empty($spec))
                      { echo " Veuillez remplir tout les champs svp !" ;  } 
                     
                 
                      
                    else {
                      $sql="update `users` set  spec='$spec' where Email='$mail'";
          mysqli_query($conx,$sql);
          
                 header('location:../activation_en_cours.html');
                    }}
         
          ?>
  
              
            

              <Button  type="submit" value="CONTINUER" onclick="vérifier(form)"  class="btn btn-block btn-primary">CONTINUER</button>
                    
               
              <span class="d-block text-left my-4 text-muted">&mdash; où se connecter avec &mdash;</span>
              
              <div class="social-login">
                <a href="https://www.facebook.com" class="facebook">
                  <span class="icon-facebook mr-3"></span> 
                </a>
                <a href="https://twitter.com/login?lang=fr" class="twitter">
                  <span class="icon-twitter mr-3"></span> 
                </a>
                <a href="https://www.google.com/?hl=fr" class="google">
                  <span class="icon-google mr-3"></span> 
                </a>
              </div>
            </form>
            
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>
  <script> 
       function vérifier(form){ 
         if(form.getElementById("d").checked) && (form.getElementById("p").checked){ 
           alert("deux cases sont cochée !!"); 
           window.location.replace("inscription.php");
          
        } 
      } 
    </script>
   
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/validation.js"></script>
    <script src="js/mdp.js"></script>
  </body>
</html>