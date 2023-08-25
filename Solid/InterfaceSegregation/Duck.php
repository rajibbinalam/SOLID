<?php

namespace App\Solid\InterfaceSegregation;

class Duck implements Speakable, Walkable, Flyable{
    public function speak(){
        return 'Speak';
    }

    public function walk(){
        return 'walk';
    }

    public function fly(){
        return 'fly';
    }
}
