<?php
$host = "localhost";
$dbname = "gestion_produits";
$username = "root";
$password= "";
try{
$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$username,$password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch (PDOException $th){
 die("erreur de connexion :" .  $th->getMessage());

}
?>

