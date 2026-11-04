<?php

class Animal {

    public function manger(): void {

        echo "Je mange." . PHP_EOL;

    }

}

class Chien extends Animal {

    public function aboyer(): void {

        echo "Wouf !" . PHP_EOL;

    }

}

class Chat extends Animal {

    public function miauler(): void {

        echo "Miaou !" . PHP_EOL;

    }

}

$c = new Chien();

$c->manger();
$c->aboyer();

$chat = new Chat();

$chat->manger();
$chat->miauler();

?>