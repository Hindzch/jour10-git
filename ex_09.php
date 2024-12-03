<?php

// Fonction de comparaison d'objets
function objects_comparison($object1, $object2) {
    if ($object1 == $object2) {
        echo "Objects are equal.\n";
    } elseif ($object1 === $object2) {
        echo "Objects are the same.\n";
    } else {
        echo "\n";
    }
}

// Test de la fonction de comparaison
$obj1 = new stdClass();
$obj2 = new stdClass();
$obj3 = $obj1;

objects_comparison($obj1, $obj2); // Objets différents
objects_comparison($obj1, $obj3); // Même référence
objects_comparison($obj2, $obj3); // Objets différents

?>
