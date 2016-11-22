<?php
class Gnome extends Race
{
    public $armor;
    public $damage;
    public $speed;
}
class GnomeWarrior extends Gnome
{
    public $armor =+ 15;
    public $damage =+ 10;
    public $speed = 3;
}


