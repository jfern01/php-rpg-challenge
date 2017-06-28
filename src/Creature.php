<?php

namespace RpgChallenge\Emagia;

abstract class Creature
{
    protected $name = '';

    protected $health = 0;

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

    public function getHealth(): int
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
}