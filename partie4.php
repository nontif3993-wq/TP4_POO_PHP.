

<?php

class Personne
{
    private string $nom;
    private string $prenom;
    private int $anneeNaissance;

    public function __construct(string $nom, string $prenom, int $anneeNaissance)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->anneeNaissance = $anneeNaissance;
    }

    private function getAge(): int
    {
        return date("Y") - $this->anneeNaissance;
    }

    public function __toString(): string
    {
        return $this->prenom . " " . $this->nom . " (" . $this->getAge() . " ans)";
    }
}

// Création d'un objet
$p = new Personne("Alami", "Sara", 2005);

// Affichage
echo $p;

?>