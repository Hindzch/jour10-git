<?php

// Classe Pony
class Pony {
    public $name;
    public $gender;
    public $color;

    // Constructeur pour initialiser les attributs
    public function __construct($name, $gender, $color) {
        $this->name = $name;
        $this->gender = $gender;
        $this->color = $color;
    }

    // Destructeur pour afficher un message lors de la destruction
    public function __destruct() {
        echo "I’m a dead pony.\n";
    }

    // Méthode magique pour afficher un message avec echo
    public function __toString() {
        return "Don’t worry, I’m a pony !\n";
    }

    // Méthode speak qui affiche un cri spécifique
    public function speak() {
        echo "Hiii hiii hiiii\n";
    }

    // Méthode magique pour gérer les appels de méthodes inexistantes
    public function __call($name, $arguments) {
        echo "I don’t know what to do...\n";
    }
}

// Test de la classe Pony
$pony = new Pony("Twilight", "Female", "Purple");

// Affichage de l'objet avec echo
echo $pony;

// Appel de la méthode speak
$pony->speak();

// Appel d'une méthode inexistante
$pony->fly();

// Destruction explicite de l'objet
unset($pony);

?>

