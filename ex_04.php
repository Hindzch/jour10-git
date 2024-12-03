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
}

// Test de la classe Pony
$pony = new Pony("Sparkle", "Female", "Pink");

// Affichage de l'objet avec echo
echo $pony;

// Fin du script (le destructeur s'exécutera ici)
unset($pony);

?>
