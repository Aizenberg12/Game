<?php


class Elf extends Race
{
    public $accuracy;
    public $arrow ;
    public $armor;
    public $damage;
    public $speed;
}


class ElfArcher extends Elf
{

    public $arrow=+10;
    public $armor=0;
    public $damage=+10;
    public $speed=+9;
}

class ElfWarrior extends Elf
{
    public $armor=+15;
    public $damage=+10;
    public $speed=3;
}
 