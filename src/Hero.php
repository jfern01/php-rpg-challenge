<?php

namespace RpgChallenge\Emagia;

use RpgChallenge\Emagia\Creature;
use RpgChallenge\Emagia\Skills\HasSkills;
use RpgChallenge\Emagia\Skills\RapidStrike;

final class Hero extends Creature
{
	use HasSkills;
}