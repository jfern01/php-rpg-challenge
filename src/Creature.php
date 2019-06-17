<?php
namespace Jfern01\RpgChallenge;

use Jfern01\RpgChallenge\Contracts\Alive;
use Jfern01\RpgChallenge\Contracts\Named;
use Jfern01\RpgChallenge\Traits\HasHealth;
use Jfern01\RpgChallenge\Traits\HasName;

class Creature implements Named, Alive
{
    use HasName;
    use HasHealth;
}