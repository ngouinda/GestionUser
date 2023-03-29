<?php 
//conn database
$con = mysqli_connect("localhost","root","","gestionuser");
if(!$con){
    echo "Vous n'etes pas connecté à la base de donnée";
}
?>