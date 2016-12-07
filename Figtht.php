<?php

class Race
{
    public $arrow = 10;
    public $armor = 0;
    public $damage = 5;
    public $speed = 3;
    public $hp = 100;
    public $name;
    public  function Kick($name, $hp, $armor, $damage, $speed, $arrow)
    {


    }
}

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

}

class HumanWarrior extends Human
{
    public $name = "HumanWarrior";
    public $armor =+ 10;
    public $damage = 5;
    public $hp = 100;
    public $speed =+ 2;

}

class HumanRider extends Human
{
    public $name = "HumanRider";
    public $damage =+ 7;
    public $armor =+ 5;
    public $hp = 100;
    public $speed =+ 5;

}

class Gnome extends Race
{

}
class GnomeWarrior extends Gnome
{
    public $name = "GnomeWarrior";
    public $armor =+ 15;
    public $damage =+ 10;
    public $speed = 3;
    public $hp = 100;

}

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

}

class ElfWarrior extends Elf
{
    public $name = "ElfWarrior";
    public $armor=+15;
    public $damage=+10;
    public $hp = 100;
    public $speed=3;

}
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

}
class SmallOrc extends Orc
{
    public $name = "SmallOrc";
    public $armor=+5;
    public $damage=+2;
    public $speed=+5;
    public $hp = 100;


}


class FreedomOrc extends Orc
{
    public $name = "FreedomOrd";
    public $armor=+5;
    public $damage=+10;
    public $hp = 100;
    public $speed=+7;

}


for ($i=0; $i<10; $i++ ) {
    $r = rand(1, 6);

    switch ($r) {
        case 1:
            $team1 = new HumanArcher();
            break;
        case 2:
            $team1 = new GnomeWarrior();
            break;
        case 3:
            $team1 = new HumanWarrior();
            break;
        case 4:
            $team1 = new ElfWarrior();
            break;
        case 5:
            $team1 = new HumanRider();
            break;
        case 6:
            $team1 = new ElfArcher();
            break;

    }


    foreach ($team1 as $key => $value) {
        echo "{$key} => {$value} ";
        echo "<br/>";
    }
}

    for ($i = 0; $i < 10; $i++) {
        $r = rand(1, 3);

        switch ($r) {
            case 1:
                $team2 = new FreedomOrc();
                break;
            case 2:
                $team2 = new LargeOrc();
                break;
            case 3:
                $team2 = new SmallOrc();
                break;
        }


        foreach ($team2 as $key => $value) {
            echo "{$key} => {$value} ";
            echo "<br/>";
        }
    }
