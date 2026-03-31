

<?php
require "config.php";

if(isset($_GET['msg'])) { 
 echo "Produit ajouté avec succès<br>"; 

}

$sql ="SELECT id, nom, prix FROM produit"; 
$stmt = $pdo->query($sql);
$produits = $stmt->fetchAll(PDO::FETCH_ASSOC);


foreach($produits as $produit){
    echo $produit['nom'] . " : " . $produit['prix'] . " DH ";
  
    echo "<a href='details.php?id=" . $produit['id'] . "'>Détails</a><br><br>";

}
 
?>