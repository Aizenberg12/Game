<?php

class Race
{
    public $arrow = 10;
    public $armor = 0;
    public $damage = 5;
    public $speed = 3;
    public $hp = 100;
    public $name;
}
for ($i=0; $i<10; $i++ ) {
    $r = rand(1, 9);

    switch ($r) {
        case 1:
            $team1 = new HumanArcher();
            break;
        case 2:
            $team1 = new GnomeWarrior();
            break;
        case 3:
            $team1 = new SmallOrc();
            break;
        case 4:
            $team1 = new HumanWarrior();
            break;
        case 5:
            $team1 = new ElfWarrior();
            break;
        case 6:
            $team1 = new HumanRider();
            break;
        case 7:
            $team1 = new ElfArcher();
            break;
        case 8:
            $team1 = new FreedomOrc();
            break;
        case 9:
            $team1 = new LargeOrc();
            break;
    }
}