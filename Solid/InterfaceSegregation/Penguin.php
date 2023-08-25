<?php

namespace App\Solid\InterfaceSegregation;

class Penguin implements Speakable, Walkable{

    public function speak(){
        return 'Speak';
    }

    public function walk(){
        return 'walk';
    }


}
