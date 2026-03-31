



<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <style>
 
 
div {
    background: hsla(88, 12%, 73%, 1.00);
    width: 220px;
    padding: 15px;
    border-radius: 10px;
    text-align: center;
}


 </style>
 
</body>
</html>



<?php

require "config.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM produit WHERE id = $id";
    $stmt = $pdo->query($sql);
    $p = $stmt->fetch(PDO::FETCH_ASSOC); 

    if(!$p){
        echo "Produit non trouvé";
        exit;
    }

    echo "<div>";

    echo "Nom: " . $p['nom'] . "<br>";
    echo "Prix: " . $p['prix'] . "<br>";
    echo "Description: " . $p['description'] . "<br>";
    echo "Catégorie: " . $p['categorie'] . "<br>";
    echo "</div><br>";
      
}
?>
<a href="ajouter_produit.php" class="btn">➕ Ajouter un nouveau produit</a>