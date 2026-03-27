
 <style>
 
div {
    background: hsla(88, 12%, 73%, 1.00);
    width: 220px;
    padding: 15px;
    border-radius: 10px;
    text-align: center;
}

 </style>
 


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
<a href="ajouter_produit.php" class="btn"> Ajouter un nouveau produit</a>