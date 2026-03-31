<?php
require "config.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];

    // Correction: on prépare et exécute correctement la requête
    $sql = "SELECT * FROM produit WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);
    $produit = $stmt->fetch(PDO::FETCH_ASSOC);

    // Correction typo
    if(!$produit){
        die("produit not found");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>

<form action="" method="post">

<input type="number" name="id" value="<?= $produit['id'] ?>" placeholder="id">
<input type="text" name="nom" value="<?= $produit['nom'] ?>" placeholder="nom">
<input type="number" name="prix" value="<?= $produit['prix'] ?>" placeholder="prix">
<input type="text" name="description" value="<?= $produit['description'] ?>" placeholder="description">
<input type="text" name="categorie" value="<?= $produit['categorie'] ?>" placeholder="categorie">
<button name="ok">ok</button>

</form>

</body>
</html>