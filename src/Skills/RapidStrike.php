<?php
namespace RpgChallenge\Emagia\Skills;

use RpgChallenge\Emagia\Creature;
use RpgChallenge\Emagia\Skill;

class RapidStrike extends Skill implements OffensiveSkill
{
    const CODE = 'rapid_strike';

    protected $name = 'Rapid Strike';

    public function use(Creature $creature): float
    {
        printf('%s uses %s on %s.' . PHP_EOL, $this->getPerformer()->getName(), $this->getName(), $creature->getName());
        return (float) $this->getPerformer()->attack($creature) + $this->getPerformer()->attack($creature);
    }
}