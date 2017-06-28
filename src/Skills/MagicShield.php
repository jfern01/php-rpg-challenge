<?php
namespace RpgChallenge\Emagia\Skills;

use RpgChallenge\Emagia\Creature;
use RpgChallenge\Emagia\Skill;

class MagicShield extends Skill implements DefensiveSkill
{
    const CODE = 'magic_shield';

    protected $name = 'Magic Shield';

    public function use(float $damage): float
    {
        $damage = $damage / 2;
        printf('%s uses %s which lowers damage to %.2f.' . PHP_EOL, $this->getPerformer()->getName(), $this->getName(), $damage);
        return (float) $damage;
    }
}