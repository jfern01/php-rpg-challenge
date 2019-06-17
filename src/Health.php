<?php
namespace Jfern01\RpgChallenge;

class Health
{
    /**
     * Maximum health
     *
     * @var float
     */
    protected $max;

    /**
     * Minimum health
     *
     * @var float
     */
    protected $min;

    /**
     * Current health
     *
     * @var float
     */
    protected $value;

    /**
     * Constructor
     *
     * @param float $value
     * @param float $max
     */
    public function __construct(float $value, float $max = 0.00, float $min = 0.00)
    {
        $this->value = $value;
        $this->max = $max ? $max : $this->value;
        $this->min = $min;
    }

    /**
     * Get current health
     *
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * Increment health by value
     *
     * @param float $value
     * @return void
     */
    public function increment(float $value)
    {
        $this->value = ($this->value + $value) > $this->max ? $this->max : $this->value + $value;
    }

    /**
     * Decrement health by value
     *
     * @param float $value
     * @return void
     */
    public function decrement(float $value)
    {
        $this->value = ($this->value - $value) < $this->min ? $this->min : $this->value - $value;
    }

    /**
     * Get maximum health
     *
     * @return float
     */
    public function getMax(): float
    {
        return $this->max;
    }

    /**
     * Get minimum health
     *
     * @return float
     */
    public function getMin(): float
    {
        return $this->min;
    }

    /**
     * Checks if health is depleted.
     * If health is depleted, the creature can
     * be considered "dead".
     *
     * @return boolean
     */
    public function isDepleted(): bool
    {
        return $this->value === $this->min;
    }
}
