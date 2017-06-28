<?php
namespace RpgChallenge\Emagia;

use RpgChallenge\Emagia\Creature;
use RpgChallenge\Emagia\Hero;

abstract class Scenario
{
    protected $hero;

    protected $creature;

    public function __construct(Hero $hero, Creature $creature)
    {
        $this->hero = $hero;
        $this->creature = $creature;
    }

    abstract public function begin();
}