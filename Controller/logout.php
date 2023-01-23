<?php   
 //logout.php  
 session_start();  
 session_destroy();  
 header("location:../login/login-form-07/index.php");  
 ?> 