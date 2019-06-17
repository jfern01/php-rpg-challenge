<?php
namespace Jfern01\RpgChallenge;

class Attributes
{
    /**
     * Strength value
     *
     * @var int
     */
    protected $strength;

    /**
     * Defense value
     * 
     * @var int 
     */
    protected $defense;

    /**
     * Speed value
     * 
     * @var int 
     */
    protected $speed;

    /**
     * Luck value
     * 
     * @var int 
     */
    protected $luck;

    public function __construct(int $strength = 0, int $defense = 0, int $speed = 0, int $luck = 0)
    {
        $this->strength = $strength;
        $this->defense = $defense;
        $this->speed = $speed;
        $this->luck = $luck > 100 ? 100 : $luck;
    }

    /**
     * Get strength
     *
     * @return integer
     */
    public function getStrength(): int
    {
        return $this->strength;
    }

    /**
     * Get defense
     *
     * @return integer
     */
    public function getDefense(): int
    {
        return $this->defense;
    }

    /**
     * Get speed
     *
     * @return integer
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * Get luck
     *
     * @return integer
     */
    public function getLuck(): int
    {
        return $this->luck;
    }
}
