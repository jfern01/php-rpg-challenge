<?php

require 'autoload.php';

$hero = new RpgChallenge\Emagia\Hero(
    'Orderus',
    (float) rand(70, 100),
    rand(70, 80),
    rand(45, 55),
    rand(40, 50),
    rand(10, 30)
);

$hero->addSkills(
    new RpgChallenge\Emagia\Skills\RapidStrike($hero),
    new RpgChallenge\Emagia\Skills\MagicShield($hero)
);

$monster = new RpgChallenge\Emagia\Monster(
    'Wild Beast',
    (float) rand(60, 90),
    rand(60, 90),
    rand(40, 60),
    rand(40, 60),
    rand(25, 40)
);

$battle = new RpgChallenge\Emagia\Battle($hero, $monster);

$battle->begin();