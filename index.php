<?php


// Définition d'une classe Personne
class Personne {
    // Propriétés (attributs)
    private $nom;
    private $prenom;
    private $age;
    
    // Constructeur
    public function __construct($nom,$prenom,$age){
         $this-> nom =$nom;
         $this-> prenom=$prenom;
         $this-> age=$age;

    }
  
    
    // Getters (accesseurs)
    public function getNom() {
      return $this-> nom = $nom;
    }
    public function GetPrenom(){
      return $this-> prenom = $prenom;
    }
    public function GetAge(){
      return $this-> age = $age;
    }
    // Setters (mutateurs)
    public function SetNom($nom){
          $this->nom = $nom;  
    }

    public function SetPrenom($prenom){
          $this-> prenom = $prenom;
    }
    
    public function SetAge($age){
          $this-> age=  $age;
    }
    // Méthodes
    
    
    
    public function sePresenter(){
      echo "Bonjour je m'appelle ". $this->prenom . " ".$this->nom. " et j'ai " .$this->age ." ans. <br>";
    }
    public function estMajeur(){
      if($this->age >= 18){
        echo "Je suis majeur.</br>";
      } else {
        echo "Je suis mineur.</br>";
      }
    }
  }
// Utilisation de la classe
$personne = new Personne("Ahnou", "Mehdi", 21);
$personne->sePresenter();
$personne->estMajeur();

// Modification des propriétés
$personne->setAge(17);
$personne->setNom("Dupont");
$personne->SetPrenom("Lény");
$personne->sePresenter();
$personne->estMajeur();