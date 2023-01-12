<?php
$con=mysqli_connect('localhost','root','root','template_partiel');

if(!$con){
   die('erreur');
}else{
   }
$pdo_options2[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$bdd = new PDO('mysql:host=localhost;dbname=template_partiel', 'root', 'root', $pdo_options2);





?>

