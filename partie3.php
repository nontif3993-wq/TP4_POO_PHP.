<?php
class Personne {
    private string $nom = "";
    private string $prenom = "";
    private string $dateNaissance = "";
    
    public function __set(string $name, mixed $value): void {
        if(property_exists($this, $name)){
            if($name == 'nom' && strlen($value) < 2) throw new InvalidArgumentException("Nom trop court");
            $this->$name = $value;
        } else { echo "Propriété $name inexistante" . PHP_EOL; }
    }
    public function __get(string $name): mixed { return $this->$name ?? null; }
    public function __isset(string $name): bool { return isset($this->$name) && $this->$name !== ""; }
    public function __unset(string $name): void { $this->$name = ""; }
}