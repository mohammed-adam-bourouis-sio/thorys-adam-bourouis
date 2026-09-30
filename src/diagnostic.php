<?php 
$version = PHP_VERSION; 
$heure = date('H:i:s'); 
?> 
<!doctype html> 
<html lang="fr"> 
<head> 
 <meta charset="utf-8"> 
 <title>Diagnostic Thorys</title> 
 <link rel="stylesheet" href="css/style.css"> 
</head> 
<body> 
 <main> 
 <section> 
 <h1>Diagnostic Thorys</h1> 
 <p>PHP fonctionne dans le conteneur.</p> 
 <p>Version : <?= htmlspecialchars($version) ?></p> 
 <p>Heure du serveur : <?= htmlspecialchars($heure) ?></p> 
 <a href="index.html">Retour à l’accueil</a> 
 </section> 
 </main> 
</body> 
</html>
