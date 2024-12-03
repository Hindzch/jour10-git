<?php

// Classe abstraite Warrior
abstract class Warrior {
    // Méthode publique qui affiche un message
    public function attack() {
        echo "I’ll kill you, poor noob!\n";
    }

    // Méthodes abstraites à définir dans les classes enfants
    abstract public function represent();
    abstract public function shout();
}

// Classe Booba qui hérite de Warrior
class Booba extends Warrior {
    public function represent() {
        echo "92\n";
    }

    public function shout() {
        echo "Bah bien Morray!\n";
    }
}

// Classe LaFouine qui hérite de Warrior
class LaFouine extends Warrior {
    public function represent() {
        echo "78\n";
    }

    public function shout() {
        echo "Je suis propriétaire!\n";
    }
}

// Test des classes
$booba = new Booba();
$lafouine = new LaFouine();

$booba->attack();
$booba->represent();
$booba->shout();

$lafouine->attack();
$lafouine->represent();
$lafouine->shout();

?>
