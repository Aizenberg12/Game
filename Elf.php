<?php


class Elf extends Race
{
    
}


class ElfArcher extends Elf
{
    public $name = "ElfArcher";
    public $arrow=+10;
    public $armor=0;
    public $damage=+10;
    public $hp = 100;
    public $speed=+9;
    public  function __cunstruct($name, $hp, $armor, $damage, $speed, $arrow) {

    }
}

class ElfWarrior extends Elf
{
    public $name = "ElfWarrior";
    public $armor=+15;
    public $damage=+10;
    public $hp = 100;
    public $speed=3;
    public  function __cunstruct($name, $hp, $armor, $damage, $speed) {

    }
}
 /**/