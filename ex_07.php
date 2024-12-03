<?php

// Classe Body
class Body {
    private $head = 1;
    protected $arm = 2;
    public $hand = 2;
    protected $leg = 2;
    public $foot = 2;

    // Fonction pour afficher tous les attributs de l'objet
    public function print_inside_attributes() {
        foreach (get_object_vars($this) as $attribute => $value) {
            echo "$attribute : $value\n";
        }
    }
}

// Fonction externe pour afficher les attributs publics d'un objet
function print_object_attributes($object) {
    foreach (get_object_vars($object) as $attribute => $value) {
        echo "$attribute => $value\n";
    }
}

// Test de la classe Body
$body = new Body();

echo "Attributs accessibles à l'intérieur de la classe:\n";
$body->print_inside_attributes();

echo "Attributs publics accessibles en dehors de la classe:\n";
print_object_attributes($body);

?>
