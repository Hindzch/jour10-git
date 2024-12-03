<?php

// Classe Dolly
class Dolly {
    public $animal;
    public $age;
    public $doctor;

    // Constructeur pour initialiser les attributs
    public function __construct($animal, $age, $doctor) {
        $this->animal = $animal;
        $this->age = $age;
        $this->doctor = $doctor;
    }

    // Méthode magique pour afficher un message lors du clonage
    public function __clone() {
        echo "I will survive !\n";
    }
}

// Fonction pour cloner un objet
function clone_object($object) {
    return clone $object;
}

// Test de la classe Dolly
$dolly = new Dolly("Sheep", 6, "Dr. Jones");

// Clonage de l'objet Dolly
$clonedDolly = clone_object($dolly);

?>
