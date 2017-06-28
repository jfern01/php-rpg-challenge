<?php

namespace RpgChallenge\Emagia\Skills;

use RpgChallenge\Emagia\Creature;
use RpgChallenge\Emagia\Skill;

class RapidStrike extends Skill
{
	protected $name = 'Rapid Strike';

	public function perform(Creature $creature)
	{
		echo $this->getPerformer()->getName() . ' uses ' . $this->getName() . ' on ' . $creature->getName();
	}
}