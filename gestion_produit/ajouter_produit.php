<?php
require "config.php";

if($_SERVER["REQUEST_METHOD"] === "POST"){

 $nom=$_POST['nom'];
 $prix=$_POST['prix'];
 $description=$_POST['description'];
 $categorie=$_POST['categorie'];

 if(empty($nom) || empty($prix) || empty($description) || empty($categorie)){
  echo "veuillez remplir tous les champs";
 
 } else {
  
  $sql = "INSERT INTO produit(nom, prix, description, categorie) VALUES (:nom, :prix, :description, :categorie)";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([
    'nom' => $nom,
    'prix' => $prix,
    'description' => $description,
    'categorie' => $categorie
  ]);

  header("Location: catalogue.php?msg=success");
  exit;
 }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Ajouter Produit</title>
 <style>
  
    body {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        margin: 0;
        font-family: sans-serif;
        background-color: #f0f0f0;
    }
    form {
        background: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    button {
        padding: 6px 12px;
        background-color: #d8d7d7ff;
        border-radius: 10px;
        color: blue;
        cursor: pointer;
        border: 1px solid #ccc;
    }
    input {
        background-color: #febebeff;
        border-radius: 3px;
        border: 1px solid #9c9b9bff;
        padding: 4px;
    }
 </style>
</head>
<body>

 <form action="" method="post">

  nom: <input type="text" name="nom" placeholder="nom"><br><br>
  prix: <input type="number" name="prix" placeholder="prix"><br><br>
  description: <input type="text" name="description" placeholder="description"><br><br>
  categorie: <input type="text" name="categorie" placeholder="categorie"><br><br>
  
  <button name="ok">ajouter</button>
  <br><br>
  <a href="catalogue.php">Retour au catalogue</a>
 </form>

</body>
</html>