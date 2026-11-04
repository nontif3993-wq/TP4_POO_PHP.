public function __toString(): string {
    return $this->prenom . " " . $this->nom . " (" . $this->getAge() . " ans)";
}
// 4.1 getAge() khdama 7it __toString() dakhl l classe, private kaykhdem dakhl.
// 4.2 Ila rje3ti int: Fatal error, __toString() khasha trje3 string obligatoirement.