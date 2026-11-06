<?php

class Utilisateur {

    public string $nom;
    public int $age;
    private string $motDePasse;

    public function __construct(string $nom, int $age, string $motDePasse) {
        $this->nom = $nom;
        $this->age = $age;
        $this->motDePasse = $motDePasse;
    }

    // Choisir les données à sérialiser
    public function __serialize(): array {
        return [
            'nom' => $this->nom,
            'age' => $this->age
        ];
    }

    // Reconstruire l'objet
    public function __unserialize(array $data): void {
        $this->nom = $data['nom'];
        $this->age = $data['age'];

        // Le mot de passe est réinitialisé
        $this->motDePasse = "";
    }

}

$u = new Utilisateur("Alice", 25, "secret123");

$serialise = serialize($u);

echo "Sérialisé : " . $serialise . "<br>";

$restaure = unserialize($serialise);

echo "<pre>";
var_dump($restaure);
echo "</pre>";

?>