<?php
class Voiture {
    public $marque;
    public $couleur;
    public function setMarque($m){ $this->marque = $m; }
    public function setCouleur($c){ $this->couleur = $c; }
    public function afficher(){
        echo "Marque : $this->marque | Couleur : $this->couleur" . PHP_EOL;
    }
}
$v1 = new Voiture();
$v1->setMarque("Toyota");
$v1->setCouleur("Blanche");
$v1->afficher();

$v2 = new Voiture();
$v2->setMarque("Renault");
$v2->setCouleur("Noire");
$v2->afficher();
// 0.3 : Non, chaque objet a ses propres propriétés, $this kay3ni l'objet li 3ayet l methode.