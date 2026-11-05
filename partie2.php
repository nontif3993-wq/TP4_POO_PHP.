
<?php

// Exercice 2.1

class Voiture {

    public string $couleur;
    public int $vitesse;

    public function __construct(
        string $couleur = "Blanche",
        int $vitesse = 0
    ) {
        $this->couleur = $couleur;
        $this->vitesse = $vitesse;
    }

    public function afficher(): void {
        echo "Couleur : {$this->couleur} | Vitesse : {$this->vitesse} km/h" . PHP_EOL;
    }
}

$v1 = new Voiture();
$v2 = new Voiture("Rouge", 50);

$v1->afficher();
$v2->afficher();

// Exercice 2.1.b : promotion de propriétés

class Voiture2 {

    public function __construct(
        public string $couleur = "Blanche",
        public int $vitesse = 0
    ) {}
}

$v3 = new Voiture2("Noire", 120);

echo $v3->couleur . PHP_EOL;


// Exercice 2.3 : destructeur

class Voiture3 {

    public function __construct(public string $couleur) {
        echo "Voiture {$this->couleur} créée." . PHP_EOL;
    }

    public function __destruct() {
        echo "Voiture {$this->couleur} détruite." . PHP_EOL;
    }
}

$maVoiture = new Voiture3("Blanche");

unset($maVoiture);

echo "Fin du script." . PHP_EOL;


// Exercice 2.3.c

$a = new Voiture3("Rouge");
$b = new Voiture3("Noire");

// Exercice 2.3.d : destructeur Personne

class Personne {

    public function __construct(public string $nom) {}

    public function __destruct() {
        echo "Détruire " . __CLASS__ . PHP_EOL;
    }
}

$p = new Personne("Sara");