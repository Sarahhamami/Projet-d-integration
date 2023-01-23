<?php
$host="localhost";
    $user="root";
    $pw="";
    $db="ehospital";
    $conx=mysqli_connect($host,$user,$pw,$db);
if($conx==false){
    echo "error connexion";
}


?>