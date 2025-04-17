<?php

$host = "localhost";
$dbname = "TP1";
$username = "root";
$password = "";
$charset = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

$options = [
   PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Gestion des erreurs avec exceptions
   PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Mode de récupération par défaut: tableau associatif
   PDO::ATTR_EMULATE_PREPARES => false // Désactiver l'émulation des requêtes préparées
];

try {
   $pdo = new PDO ($dsn, $username, $password, $options);
} catch (PDOException $e) {
   echo "Erreur de connexion à la base de données : " . $e->getMessage();
}

echo "Connexion à la base de données réussie ! </br></br>";

// Exercice 1 : 
// Réinsertion de l'âge dans l'insertion
$sql = "INSERT INTO user (name, age) VALUES (?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute(["Mehdi", 21]);

echo "Nouvel utilisateur inséré avec l'ID : " . $pdo->lastInsertId() . "</br></br>";

// Exercice 2 : 
echo "Utilisateurs de plus de 30 ans :</br>";

$sql = "SELECT * FROM user WHERE age > 30";
$stmt = $pdo->query($sql);
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

   foreach ($users as $user) {
       echo "Nom : " . $user ['name'] . " | Âge : " . $user ['age'] . "</br>";
}
echo "</br>";

// Exercice 3 : 

$sql = "UPDATE user SET age = ? WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([20, 1]);

echo "Nombre d'utilisateurs mis à jour : " . $stmt->rowCount() . "</br></br>";

// Exercice 4 : 
$sql = "DELETE FROM user WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([1]);

echo "Nombre d'utilisateurs supprimés : " . $stmt->rowCount() . "</br></br>";

$pdo = null;
