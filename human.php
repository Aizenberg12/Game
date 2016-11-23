<?php

class Human extends Race
{
    
}
class HumanArcher extends Human
{
    public $name = "HumanArcher";
    public $armor =+ 5;
    public $arrow = 30;
    public $hp = 100;
    public $damage = 5;
    public  $speed =+ 2;
    public  function __cunstruct($name, $hp, $armor, $damage, $speed, $arrow) {

    }
}
class HumanWarrior extends Human
{
    public $name = "HumanWarrior";
    public $armor =+ 10;
    public $damage = 5;
    public $hp = 100;
    public $speed =+ 2;
    public  function __cunstruct($name, $hp, $armor, $damage, $speed) {

    }
}

class HumanRider extends Human
{
    public $name = "HumanRider";
    public $damage =+ 7;
    public $armor =+ 5;
    public $hp = 100;
    public $speed =+ 5;
    public  function __cunstruct($name, $hp, $armor, $damage, $speed) {

    }
}



