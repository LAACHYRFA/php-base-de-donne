<style>
    
    body {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 25px;
        padding: 50px;
        background-color: white;
        font-family:  sans-serif;
    }

   
    .card {
        background: #d8e4eaff;
        width: 150px;
        padding: 25px;
        border-radius: 15px;
        text-align: center;
        
        display: flex;
        flex-direction: column; 
        align-items: center;
        gap: 15px; 
    }

    
    
    .btn-details {
        color: #007bff;
        font-weight: bold;
      
    }

   
</style>

<?php
require "config.php"; 

if(isset($_GET['msg'])) { 
    echo "<div>Produit ajouté avec succès</div> "; 
}

$sql ="SELECT id, nom, prix FROM produit"; 
$stmt = $pdo->query($sql); 
$produits = $stmt->fetchAll(PDO::FETCH_ASSOC); 

foreach($produits as $produit){
    echo "<div class='card'>";
        
        echo $produit['nom'] . "<br>" . "<br>";
        
  
        echo $produit['prix'] ; 
        
      
        echo "<a href='details.php?id=" . $produit['id'] . "' class='btn-details'>Détails</a>"; 
    echo "</div>";
}
?>