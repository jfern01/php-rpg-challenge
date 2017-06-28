<?php
namespace RpgChallenge\Emagia\Skills;

use RpgChallenge\Emagia\Creature;

interface OffensiveSkill
{
    public function use(Creature $creature): float;
}