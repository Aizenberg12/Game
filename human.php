<?php

class Human extends Race
{
    
}
class HumanArcher extends Human
{
    public $armor =+ 5;
    public $arrow = 30;
    public $damage = 5;
    public  $speed =+ 2;
}
class HumanWarrior extends Human
{
    public $armor =+ 10;
    public $damage = 5;
    public $speed =+ 2;
}

class HumanRider extends Human
{
    public $damage =+ 7;
    public $armor =+ 5;
    public $speed =+ 5;
}



