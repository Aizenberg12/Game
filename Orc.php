<?php


class Orc
{
    public $armor;
    public $damage;
    public $speed;
}

class LargeOrc extends Orc
{
    public $armor=0;
    public $damage=20;
    public $speed=5;
}

class SmallOrc extends Orc
{
    public $armor=5;
    public $damage=7;
    public $speed=8;
}