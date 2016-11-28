<?php


class Orc extends Race
{
 
}

class LargeOrc extends Orc
{
    public $name = "LargeOrc";
    public $armor=0;
    public $damage=+15;
    public $speed=+2;
    public $hp = 100;
    public  function __cunstruct() {
        
    }
}

class SmallOrc extends Orc
{
    public $name = "SmallOrc";
    public $armor=+5;
    public $damage=+2;
    public $speed=+5;
    public $hp = 100;
    public  function __cunstruct($name, $hp, $armor, $damage, $speed) {

    }
}


class FreedomOrc extends Orc
{
    public $name = "FreedomOrd";
    public $armor=+5;
    public $damage=+10;
    public $hp = 100;
    public $speed=+7;
    public  function __cunstruct($name, $hp, $armor, $damage, $speed) {

    }
}
/**/
