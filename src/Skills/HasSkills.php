<?php

namespace RpgChallenge\Emagia\Skills;

use RpgChallenge\Emagia\Skill;

trait HasSkills
{
    protected $skills = [];

    public function getSkills()
    {
        return $this->skills;
    }

    public function hasSkills()
    {
        return !empty($kills);
    }

    public function hasSkill(Skill $skill)
    {
        return isset($this->skills[get_class($skill)]) && $this->skills[get_class($skill)] instanceof Skill;
    }

    public function getSkill(string $class)
    {
        return $this->skills[$class];
    }

    public function addSkills(...$skills)
    {
        foreach ($skills as $skill) {
            if ($skill instanceof Skill && !$this->hasSkill($skill) && $skill->getPerformer() == $this) {
                $this->skills[get_class($skill)] = $skill;
            }
        }
    }
}