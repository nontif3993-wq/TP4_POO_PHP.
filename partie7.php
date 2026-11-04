<?php

class Compte {

    private float $montant;
    private float $interet;

    public function __construct(
        float $montantInitial,
        float $interet
    ) {

        $this->montant = $montantInitial;
        $this->interet = $interet;

    }

    public function un_an(): void {

        $this->montant =
            $this->montant *
            (1 + $this->interet / 100);

    }

    public function get_montant(): float {

        return $this->montant;

    }

}

// Création des comptes

$c1 = new Compte(400, 10);

$c2 = new Compte(2500, 5);

// Calcul pendant 10 ans

for ($i = 1; $i <= 10; $i++) {

    $c1->un_an();

    $c2->un_an();

}

// Affichage

echo "Compte 1 = " .
    number_format($c1->get_montant(), 2, ',', ' ') .
    " DH" . PHP_EOL;

echo "Compte 2 = " .
    number_format($c2->get_montant(), 2, ',', ' ') .
    " DH" . PHP_EOL;

?>