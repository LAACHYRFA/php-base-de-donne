<?php
require "index.php";
if(isset($_GET['id'])){
$id = $_GET['id'];
$sql = "delete from utilisateur where id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute([
'id' => $id
]);
header("Location: select.php");
exit;

}