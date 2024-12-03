<?php

// Classe Pony
class Pony {
    private $name;
    private $gender;
    private $color;

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

    // Méthode speak
    public function speak() {
        echo "Hiii hiii hiiii\n";
    }

    // Méthode magique pour gérer les appels de méthodes inexistantes
    public function __call($name, $arguments) {
        echo "I don’t know what to do...\n";
    }

    // Méthode magique pour accéder à un attribut privé
    public function __get($attribute) {
        if (property_exists($this, $attribute)) {
            echo "Ce n’est pas bien de getter un attribut qui est privé !\n";
            return $this->$attribute;
        } else {
            echo "Il n’y a pas d’attribut : $attribute.\n";
        }
    }

    // Méthode magique pour modifier un attribut privé
    public function __set($attribute, $value) {
        if (property_exists($this, $attribute)) {
            echo "Ce n’est pas bien de setter un attribut qui est privé !\n";
            $this->$attribute = $value;
        } else {
            echo "Il n’y a pas d’attribut : $attribute.\n";
        }
    }
}

// Test de la classe Pony
$pony = new Pony("Rainbow", "Female", "Rainbow");

// Utilisation de __get
echo $pony->name . "\n";

// Utilisation de __set
$pony->name = "Sparkle";
echo $pony->name . "\n";

// Tentative d'accès à un attribut inexistant
echo $pony->age . "\n";
$pony->age = 5;

// Destruction explicite de l'objet
unset($pony);

?>
