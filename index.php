<?php

// Paramètres de connexion à la base de données
$dbname = "TP1";
$username = "root";
$password = "";
$charset = "utf8mb4";
$host = "Localhost";

// DSN (Data Source Name)
$BDD = "mysql:host=$host;dbname=$dbname;charset=$charset";

// Options pour PDO
$options = [
   PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Gestion des erreurs avec exceptions
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Mode de récupération par défaut: tableau associatif
    PDO::ATTR_EMULATE_PREPARES => false // Désactiver l'émulation des requêtes préparées

];     
       try {
    // Création de l'instance PDO
    $pdo = new PDO($BDD, $username, $password, $options);
   } catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
  }
    // À ce stade, la connexion est établie
    echo "Connexion à la base de données réussie !<br><br>";
    
    // Exercice 1: Insertion de données
   $sql = "INSERT INTO MyGuests (Localhost, name, password)
   VALUES ('Mehdi', 'Ahnou', 'root')";
   $stmt = $pdo->prepare($sql);
   $stmt->execute(['Mehdi', 21]);
   
       
   echo "Nouvel utilisateur inséré avec l'ID: " . $pdo->lastInsertId() . "<br>";

  


   //  Exercice 2
   echo "Utilisateurs de plus de 30 ans:<br>";
   $sql = "SELECT * FROM utilisateurs WHERE age > 30";
    $stmt = $pdo->query($sql);
    $utilisateurs = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($utilisateurs as $utilisateur) {
        echo "ID: " . $utilisateur['id'] . ", Nom: " . $utilisateur['nom'] . ", Âge: " . $utilisateur['age'] . "<br>";
    }
   
   // Exercice 3
   
   $sql = "UPDATE utilisateurs SET age = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([40, 1]); // exemple : mise à jour de l'utilisateur avec ID = 1
    echo "Nombre d'utilisateurs mis à jour: " . $stmt->rowCount() . "<br>";


   // Exercice 4
   $sql = "DELETE FROM MyGuests WHERE id=3";

   if ($pdo->query($sql) === TRUE) {
     echo "Nombre d'utilisateurs mis à jour:";
   } else {
     echo "Erreur de la connexion de la base de données: " . $pdo->error;
   }
   
   $pdo->close();



    
   