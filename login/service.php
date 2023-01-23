<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>E-hospital</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link rel="shortcut icon" href="img/3.png" />
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid py-2 border-bottom d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-decoration-none text-body pe-3" href=""><i class="bi bi-telephone me-2"></i>+012 345 6789</a>
                        <span class="text-body">|</span>
                        <a class="text-decoration-none text-body px-3" href=""><i class="bi bi-envelope me-2"></i>info@example.com</a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-body px-2" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-body px-2" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-body px-2" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-body px-2" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-body ps-2" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-white shadow-sm mb-5">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 text-uppercase text-primary"><img src="img/img.png" /></h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link">Accueil</a>
                        <a href="about.html" class="nav-item nav-link">A Propos</a>
                        <a href="service.php" class="nav-item nav-link active">Services</a>
                        <a href="search.php" class="nav-item nav-link ">Chercher les docteurs</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
   

    <!-- Services Start -->

  
    <!-- Services End -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Nos Docteurs</h5>
                <h1 class="display-4">Professionnels de la santé qualifiés</h1>
            </div>
            <div class="owl-carousel team-carousel position-relative">
                <?php include_once "connect.php";
                      $role="docteur";
                          $query = "SELECT * FROM users  where role='".$role."'";  
                          $statement = $db->prepare($query); 
                          $statement->execute();
                          while( $res = $statement->fetch(PDO::FETCH_OBJ) ) {
                     
                            ?>
                
                    
                        <div class="team-item">
                            <div class="row g-0 bg-light rounded overflow-hidden">
                                <div class="col-12 col-sm-5 h-100">
                                    <img class="img-fluid h-100" src="<?php echo $res->image ;?>" style="object-fit: cover;">
                                </div>
                                <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                                    <div class="mt-auto p-4">
                                        <h3><?php echo $res->nom, " ", $res->prenom;?></h3>
                                        <h6 class="fw-normal fst-italic text-primary mb-4"><?php echo $res->spec ;?></h6>
                                        <p class="m-0"> <?php echo $res->Email ;?> </p>
                                    </div>
                                    <div class="d-flex mt-auto border-top p-4">
                                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fa fa fa-envelope-open text-white"></i></a>
                                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    
              <?php  } ?>
            
            </div>
            <?php


    $host='localhost';
    $user='root';
    $pw='';
    $database="ehospital";
    $conx= mysqli_connect ($host, $user,$pw,$database);
if ($conx==false){
    echo "error connextion";
}
else {
   
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $nom = $_POST['nom'];
        $mail=$_POST['mail'];
        $docteur=$_POST['docteur'];
        $spec=$_POST['spec'];
        $d=$_POST['date'];
        $time=$_POST['time'];

        
        function fixdate($d) {
    return date('y-m-d', strtotime($d));
}
    $date = fixdate($d);
    $sql="INSERT INTO `rendez_vous`(`nom`, `docteur`, `spec`, `date`, `time`, `mail`) VALUES ('$nom','$docteur','$spec', '$date', '$time', '$mail') ";
    mysqli_query($conx,$sql);
    echo 'Rendez_vous avec succes';
}}

 ?>
  <form method="POST" action="#"  >
    <!-- Appointment Start -->
    <div class="container-fluid bg-primary my-5 py-5">
        <div class="container py-5">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-white text-uppercase border-bottom border-5">Rendez-vous</h5>
                        <h1 class="display-4">Prenez un rendez-vous pour vous et votre famille </h1>
                    </div>
                    <p class="text-white mb-5">Dans le cadre de la dégitalisation de notre hopital ce site vous permet de prendre un rendez-vous à distance pour facilité la tâche pour nos patients. </p> <p class="text-white mb-5">Pour plus d'information n'hesitez pas de nous contacter par téléphone ou pa mail. </p>
                    <a class="btn btn-dark rounded-pill py-3 px-5 me-3" href="">Chercher les docteurs</a>

                </div>
                
                <div class="col-lg-6">
                    <div class="bg-white text-center rounded p-5">
                        <h1 class="mb-4">Prendre un Rendez-Vous</h1>
                        <form method="POST">
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    
                                    <select class="form-select bg-light border-0" style="height: 55px;" id="spec" name="spec">
                                        <option selected>Sélectionner Spécialité</option>
                                        <?php include_once "connect.php";
                                        $role="docteur";
                                            $query = "SELECT DISTINCT`spec` FROM users where role='".$role."'";  
                                            $statement = $db->prepare($query); 
                                            $statement->execute();
                                            while( $res = $statement->fetch(PDO::FETCH_OBJ) )
                                            {echo' <option value="',$res->spec,'">',$res->spec,'</option>';}?>
                                            
                                        
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-light border-0" style="height: 55px;" id="docteur" name="docteur">
                                    <option selected>Sélectionner le Docteur</option>
                                    <?php include_once "connect.php";
                                        $role="docteur";
                                            $query = "SELECT * FROM users  WHERE `role`='$role' ";
                                            $statement = $db->prepare($query); 
                                            $statement->execute();
                                            while( $res = $statement->fetch(PDO::FETCH_OBJ) )
                                            {echo'<option value="',$res->nom,'">',$res->nom,' ',$res->prenom,'</option>';}?>
                                  
                                    </select>
                                </div>
                                
                                <div class="col-12 col-sm-6">
                                
                                    <input type="text" class="form-control bg-light border-0" id="nom" name="nom" placeholder="Nom" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control bg-light border-0" id="mail" name="mail"placeholder="Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date" name="date" data-target-input="nearest">
                                        <input type="text" id="date" name="date" 
                                            class="form-control bg-light border-0 datetimepicker-input"
                                            placeholder="Date" data-target="#date" data-toggle="datetimepicker" style="height: 55px;" onclick="ValidateEmail(document.form1.text1)">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="time" id="time" name="time" data-target-input="nearest">
                                        <input type="text"
                                            class="form-control bg-light border-0 datetimepicker-input" id="time" name="time"
                                            placeholder="Temps" data-target="#time" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <input name="btn" value="Passer un rendez vous" class="btn btn-primary w-100 py-3" type="submit"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->
</form>

   
     
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Contactez nous</h4>
                    <p class="mb-4">Vous pouvez nous contactez sur place, par mail et par téléphone.</p>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>info@example.com</p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-primary me-3"></i>+012 345 67890</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Liens</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="index.php"><i class="fa fa-angle-right me-2"></i>Accueil</a>
                        <a class="text-light mb-2" href="about.php"><i class="fa fa-angle-right me-2"></i>A Propos</a>
                        <a class="text-light mb-2" href="service.php"><i class="fa fa-angle-right me-2"></i>Nos Services</a>
                        <a class="text-light mb-2" href="search.php"><i class="fa fa-angle-right me-2"></i>Chercher Les Docteurs</a>
                        <a class="text-light" href="contact.php"><i class="fa fa-angle-right me-2"></i>Contactez Nsous</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">LienS populaires</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="index.php"><i class="fa fa-angle-right me-2"></i>Accueil</a>
                        <a class="text-light mb-2" href="about.php"><i class="fa fa-angle-right me-2"></i>A Propos</a>
                        <a class="text-light mb-2" href="service.php"><i class="fa fa-angle-right me-2"></i>Nos Services</a>
                        <a class="text-light" href="contact.html"><i class="fa fa-angle-right me-2"></i>Contactez Nous</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Réseaux Sociaux</h4>
                    
                    
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>