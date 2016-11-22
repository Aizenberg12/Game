<?php


class Elf
{
    public $accuracy;
    public $arrow ;
    public $armor;
    public $damage;
    public $speed;
}


class ElfArcher extends Elf
{

    public $arrow=40;
    public $armor=0;
    public $damage=15;
    public $speed=12;
}

class ElfWarrior extends Elf
{
    public $armor=15;
    public $damage=15;
    public $speed=3;
}
 