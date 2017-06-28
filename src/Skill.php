<?php

namespace RpgChallenge\Emagia;

use RpgChallenge\Emagia\Creature;

abstract class Skill
{
    protected $name;

    protected $performer;

    public function __construct(Creature $performer)
    {
        $this->performer = $performer;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPerformer()
    {
        return $this->performer;
    }

    abstract public function perform(Creature $subject);
}