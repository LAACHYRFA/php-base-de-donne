<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <form action="" method="POST">
name:<input type="text" name="nom" placeholder="nom"><br>
email:<input type="email" name="email" placeholder="email"><br>
telephone:<input type="tel" name="telephone" placeholder="telephone"> <br>
age:<input type="number" name="age" placeholder="age"><br>
<button name="ok">ajouter</button>
 </form>
 <?php
 require'index.php';
 $erreur=false;
 if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $nom = $_POST["nom"];
  $email = $_POST["email"];
   $telephone = $_POST["telephone"];
  $age = $_POST["age"];

  if(empty($nom) || empty($email) || empty($age) || empty($telephone)){
   echo 'veuillez remplier tous les chapms';
   $erreur="true";

  }else {
   if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "email incorrect";
    $erreur=true;
   }
   if($age<18){
    echo "age invalide";
    $erreur=true;
   }
  }
   if($erreur == false){
    $sql ="insert into utilisateur(nom,email,telephone,age) VALUES(:nom, :email, :telephone, :age)";
     $stmt = $pdo->prepare($sql);
      $stmt->execute([  
            "nom" => $nom,
            "email" => $email,
            "telephone" => $telephone,
            "age" => $age
        ]);

    }

 }
 
 ?>
</body>
</html>