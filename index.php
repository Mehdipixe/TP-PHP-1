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
        return "Marque: {$this->marque}, Modèle: {$this->modele}, Année: {$this->annee}";
    }
    
    public function demarrer() {
        return "Le véhicule démarre.";
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
        return parent::getInfos() . ", Portes: {$this->nombrePortes}, Carburant: {$this->typeCarburant}";
    }
    
    // Méthode spécifique
    public function klaxonner() {
        return "Bip Bip !";
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
        return parent::getInfos() . ", Cylindrée: {$this->cylindree} cc";
    }

    public function faireRoueArriere() {
        return "La moto fait une roue arrière";
    }
}

// Utilisation des classes
$voiture = new Voiture("Lamborghini", "Huracan", 2020, 5, "Essence");
$moto = new Moto("Ducati", "D16", 2022, 825);

// Affichage
echo $voiture->getInfos() . "<br>";
echo $voiture->demarrer() . "<br>";
echo $voiture->klaxonner() . "<br><br>";

echo $moto->getInfos() . "<br>";
echo $moto->demarrer() . "<br>";
echo $moto->faireRoueArriere() . "<br>";