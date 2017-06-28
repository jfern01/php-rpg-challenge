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

    public function hasSkill($code)
    {
        return isset($this->skills[$code]) && $this->skills[$code] instanceof Skill;
    }

    public function getSkill($code)
    {
        return $this->skills[$code];
    }

    public function addSkills(...$skills)
    {
        foreach ($skills as $skill) {
            if ($skill instanceof Skill && !$this->hasSkill($skill::CODE) && $skill->getPerformer() == $this) {
                $this->skills[$skill::CODE] = $skill;
            }
        }
    }
}