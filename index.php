<?php
// Classe parente
class Vehicule {
    protected $marque;
    protected $modele;
    protected $annee;
    
    public function __construct($marque, $modele, $annee) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
    }
    
    public function getInfos() {
        echo "Marque: {$this->marque}, Modèle: {$this->modele}, Année: {$this->annee}";
    }
    
    public function demarrer() {
        echo "Le véhicule démarre.</br>";
    }
}

// Classe enfant qui hérite de Vehicule
class Voiture extends Vehicule {
    private $nombrePortes;
    private $typeCarburant;
    
    public function __construct($marque, $modele, $annee, $nombrePortes, $typeCarburant) {
        parent::__construct($marque, $modele, $annee);
        $this->nombrePortes = $nombrePortes;
        $this->typeCarburant = $typeCarburant;
    }
    
    // Surcharge de la méthode getInfos()
    public function getInfos() {
        echo parent::getInfos() . ", Portes: $this->nombrePortes Carburant: $this->typeCarburant </br>";
    }
    
    // Méthode spécifique
    public function klaxonner() {
        echo "Bip Bip !</br>";
    }
}

// Classe enfant qui hérite de Vehicule
class Moto extends Vehicule {
    private $cylindree;
    
    public function __construct($marque, $modele, $annee, $cylindree) {
        parent::__construct($marque, $modele, $annee);
        $this->cylindree = $cylindree;
    }

    public function getInfos() {
        echo parent::getInfos() . ", Cylindrée: {$this->cylindree} cc </br>";
    }

    public function faireRoueArriere() {
        echo "La moto fait une roue arrière" ."<br>";
    }
}

// Utilisation des classes
$voiture = new Voiture("Lamborghini", "Huracan", 2020, 5, "Essence");
$moto = new Moto("Ducati", "D16", 2022, 825);

// Affichage
$voiture->getInfos();
$voiture->demarrer();
$voiture-> klaxonner();
$moto->getInfos(); 
$moto->demarrer();
$moto->faireRoueArriere();