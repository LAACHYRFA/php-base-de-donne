<?php
require 'connecion.php';

// 1ère insertion
$stmt = $pdo->prepare("INSERT INTO utilisateur (nom, email) VALUES (:nom, :email)");
$stmt->execute(['nom' => 'Alice', 'email' => 'alice@test.com']);
echo "Utilisateur Alice ajouté<br>";

$nom = 'Bob';
$email = 'bob@test.com';
$stmt = $pdo->prepare("INSERT INTO utilisateur (nom, email) VALUES (:nom, :email)");
$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':email', $email);
$stmt->execute();
echo "Utilisateur Bob ajouté<br>";
$stmt = $pdo->prepare("SELECT * FROM utilisateur WHERE email = :email");
$stmt->execute(['email' => 'alice@test.com']);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
echo "Nom : " . $user['nom'] ;
$stmt = $pdo->prepare("SELECT * FROM utilisateur WHERE id = ?");
$stmt->execute([1]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
echo "Nom avec ID 1 : " . $user['nom'];