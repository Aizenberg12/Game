<?php


class Orc extends Race
{
 
}

class LargeOrc extends Orc
{
    public $armor=0;
    public $damage=+15;
    public $speed=+2;
}

class SmallOrc extends Orc
{
    public $armor=+5;
    public $damage=+2;
    public $speed=+5;
}


class FreedomOrc extends Orc
{
    public $armor=+5;
    public $damage=+10;
    public $speed=+7;
}
