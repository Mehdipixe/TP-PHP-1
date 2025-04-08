<?php

// Paramètres de connexion à la base de données

// DSN (Data Source Name)
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

// Options pour PDO
$options = [
     // Gestion des erreurs avec exceptions
    // Mode de récupération par défaut: tableau associatif
    // Désactiver l'émulation des requêtes préparées
];

try {
    // Création de l'instance PDO
    $pdo = new PDO($dsn, $username, $password, $options);
    
    // À ce stade, la connexion est établie
    echo "Connexion à la base de données réussie !<br><br>";
    
    // Exercice 1: Insertion de données

    echo "Nouvel utilisateur inséré avec l'ID: " . $pdo->lastInsertId() . "<br>";
} catch (Exception $e) {
   die('Erreur :'. $e->getMessage());
}

   //  Exercice 2
   echo "Utilisateurs de plus de 30 ans:<br>";


    
   