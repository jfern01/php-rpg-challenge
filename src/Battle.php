<?php
namespace RpgChallenge\Emagia;

use RpgChallenge\Emagia\Hero;
use RpgChallenge\Emagia\Skills\MagicShield;
use RpgChallenge\Emagia\Skills\RapidStrike;

class Battle extends Scenario
{
    protected $turns = 20;

    protected $attacker;

    protected $defender;

    protected function hasSurvivor()
    {
        return !$this->hero->isAlive() || !$this->creature->isAlive();
    }

    public function begin()
    {
        print('Battle begins!' . PHP_EOL);

        if ($this->hero->getSpeed() == $this->creature->getSpeed()) {
            if ($this->hero->getLuck() >= $this->creature->getLuck()) {
                $this->attacker = $this->hero;
                $this->defender = $this->creature;
            } else {
                $this->attacker = $this->creature;
                $this->defender = $this->hero;
            }
        }
        elseif ($this->hero->getSpeed() > $this->creature->getSpeed()) {
            $this->attacker = $this->hero;
            $this->defender = $this->creature;
        } else {
            $this->attacker = $this->creature;
            $this->defender = $this->hero;
        }

        for ($turn = 1; $turn <= $this->turns; $turn++) {
            printf('Turn %d starts.' . PHP_EOL, $turn);

            $damage = 0;

            if ($this->attacker instanceof Hero) {
                $roll = rand(1, 100);
                
                if ($roll >= 10 && $this->attacker->hasSkill(RapidStrike::CODE)) {
                    $damage = $this->attacker->getSkill(RapidStrike::CODE)->use($this->defender);
                } else {
                    $damage = $this->attacker->attack($this->defender);
                }
            } else {
                $damage = $this->attacker->attack($this->defender);
            }

            if ($this->defender instanceof Hero) {
                $roll = rand(1, 100);

                if ($roll >= 20 && $this->defender->hasSkill(MagicShield::CODE)) {
                    $damage = $this->defender->getSkill(MagicShield::CODE)->use($damage);
                }
            }
            
            $this->defender->defend($damage);

            if ($this->hasSurvivor()) {
                break;
            }

            if ($this->attacker == $this->hero) {
                $this->attacker = $this->creature;
                $this->defender = $this->hero;
            } else {
                $this->attacker = $this->hero;
                $this->defender = $this->creature;
            }

            printf('Turn %d ends.' . PHP_EOL, $turn);
        }

        $victor = $this->attacker->isAlive() ? $this->attacker : $this->defender;

        printf('%s wins the battle after %d turns!' . PHP_EOL, $victor->getName(), $turn - 1);
    }
}
