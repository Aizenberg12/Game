<?php

class Human
{
    public $arrow;
    public $armor;
    public $damage;
    public $speed;
}
class HumanArcher extends Human
{
    public $armor = 5;
    public $arrow = 30;
    public $damage = 5;
    public  $speed = 5;
}
class HumanWarrior extends Human
{
    public $armor = 10;
    public $damage = 5;
    public $speed = 5;
}

class HumanRider extends Human
{
    public $damage = 12;
    public $armor = 5;
    public $speed = 8;
}



