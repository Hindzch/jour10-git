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

// Trait Singer
trait Singer {
    public function sing_a_song() {
        $song = "Trololololololol";
        echo $song . "\n";

        $song = str_replace('o', 'a', $song);
        echo $song . "\n";

        $song = str_replace('a', 'i', $song);
        echo $song . "\n";
    }
}

// Classe Booba qui hérite de Warrior et implémente GoodManners
class Booba extends Warrior implements GoodManners {
    use Singer;

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

// Classe LaFouine qui hérite de Warrior
class LaFouine extends Warrior {
    use Singer;

    public function represent() {
        echo "78\n";
    }

    public function shout() {
        echo "Je suis propriétaire!\n";
    }
}

// Test des nouvelles fonctionnalités
$booba = new Booba();
$lafouine = new LaFouine();

echo "Booba sings:\n";
$booba->sing_a_song();

echo "LaFouine sings:\n";
$lafouine->sing_a_song();

?>
