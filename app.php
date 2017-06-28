<?php

require 'autoload.php';

$hero = new RpgChallenge\Emagia\Hero(
    'Orderus',
    rand(70, 100),
    rand(70, 80),
    rand(45, 55),
    rand(40, 50),
    rand(10, 30)
);

$monster = new RpgChallenge\Emagia\Monster(
    'Wild Beast',
    rand(60, 90),
    rand(60, 90),
    rand(40, 60),
    rand(40, 60),
    rand(25, 40)
);

$rapidStrike = new RpgChallenge\Emagia\Skills\RapidStrike($hero);

$hero->addSkills($rapidStrike);

$hero->getSkill(get_class($rapidStrike))->perform($monster);
// var_dump($monster);