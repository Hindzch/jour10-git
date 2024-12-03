<?php

// Classe abstraite Warrior
abstract class Warrior {
    public function attack() {
        echo "I’ll kill you, poor noob!\n";
    }

    abstract public function represent();
    abstract public function shout();
}

// Interface GoodManners
interface GoodManners {
    const END_WORDS = ", dirais-je.";

    public function say_please();
    public function say_thanks();
    public function say_sorry($name);
}

// Classe Booba qui hérite de Warrior et implémente GoodManners
class Booba extends Warrior implements GoodManners {
    public function represent() {
        echo "92\n";
    }

    public function shout() {
        echo "Bah bien Morray!\n";
    }

    public function say_please() {
        echo "S’il-te-plait" . self::END_WORDS . "\n";
    }

    public function say_thanks() {
        echo "Merci" . self::END_WORDS . "\n";
    }

    public function say_sorry($name) {
        echo "Mille excuses, " . $name . self::END_WORDS . "\n";
    }
}

// Classe LaFouine reste inchangée
class LaFouine extends Warrior {
    public function represent() {
        echo "78\n";
    }

    public function shout() {
        echo "Je suis propriétaire!\n";
    }
}

// Test des nouvelles fonctionnalités de Booba
$booba = new Booba();
$booba->attack();
$booba->represent();
$booba->shout();
$booba->say_please();
$booba->say_thanks();
$booba->say_sorry("Jean");

?>
<?php

// Classe abstraite Warrior
abstract class Warrior {
    public function attack() {
        echo "I’ll kill you, poor noob!\n";
    }

    abstract public function represent();
    abstract public function shout();
}

// Interface GoodManners
interface GoodManners {
    const END_WORDS = ", dirais-je.";

    public function say_please();
    public function say_thanks();
    public function say_sorry($name);
}

// Classe Booba qui hérite de Warrior et implémente GoodManners
class Booba extends Warrior implements GoodManners {
    public function represent() {
        echo "92\n";
    }

    public function shout() {
        echo "Bah bien Morray!\n";
    }

    public function say_please() {
        echo "S’il-te-plait" . self::END_WORDS . "\n";
    }

    public function say_thanks() {
        echo "Merci" . self::END_WORDS . "\n";
    }

    public function say_sorry($name) {
        echo "Mille excuses, " . $name . self::END_WORDS . "\n";
    }
}

// Classe LaFouine reste inchangée
class LaFouine extends Warrior {
    public function represent() {
        echo "78\n";
    }

    public function shout() {
        echo "Je suis propriétaire!\n";
    }
}

// Test des nouvelles fonctionnalités de Booba
$booba = new Booba();
$booba->attack();
$booba->represent();
$booba->shout();
$booba->say_please();
$booba->say_thanks();
$booba->say_sorry("Jean");

?>

