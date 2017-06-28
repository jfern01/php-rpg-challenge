<?php
namespace RpgChallenge\Emagia\Skills;

use RpgChallenge\Emagia\Creature;

interface DefensiveSkill
{
    public function use(int $damage):float;
}