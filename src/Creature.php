<?php
namespace RpgChallenge\Emagia;

abstract class Creature
{
    protected $name = '';

    protected $health = 0.00;

    protected $strength = 0;

    protected $defense = 0;

    protected $speed = 0;

    protected $luck = 0;

    public function __construct(
        string $name = '',
        int $health = 0,
        int $strength = 0,
        int $defense = 0,
        int $speed = 0,
        int $luck = 0
    ) {
        $this->name = $name;
        $this->health = $health;
        $this->strength = $strength;
        $this->defense = $defense;
        $this->speed = $speed;
        $this->luck = $luck > 100 ? 100 : $luck;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getHealth(): float
    {
        return $this->health;
    }

    public function getStrength(): int
    {
        return $this->strength;
    }

    public function getDefense(): int
    {
        return $this->defense;
    }

    public function getSpeed(): int
    {
        return $this->speed;
    }

    public function getLuck(): int
    {
        return $this->luck;
    }

    public function isAlive(): bool
    {
        return $this->health > 0;
    }

    public function attack(Creature $creature): float
    {
        $damage = $this->getStrength() - $creature->getDefense();

        printf('%s attacks %s for %d points of damage.' . PHP_EOL, $this->getName(), $creature->getName(), $damage);

        return (float) $damage;
    }

    public function defend(float $damage = 0.00)
    {
        if ($this->isAlive()) {
            if ($this->luck >= rand(1, 100)) {
                $this->health = $damage > $this->health ? 0 : $this->health-= $damage;

                printf('%s takes %.2f points of damage.' . PHP_EOL, $this->getName(), $damage);

                if ($this->isAlive()) {
                    printf('%s has %.2f health left.' . PHP_EOL, $this->getName(), $this->getHealth());
                } else {
                    printf('%s dies.' . PHP_EOL, $this->getName());
                }
            } else {
                printf('%s dodges the attack.' . PHP_EOL, $this->getName());
            }
        } else {
            printf('%s is dead.' . PHP_EOL, $this->getName());
        }
    }
}