<?php
namespace Jfern01\RpgChallenge\Traits;

use Jfern01\RpgChallenge\Health;

class HasHealth
{
    /**
     * Health instance
     *
     * @var Health
     */
    protected $health;

    /**
     * Set health instance
     *
     * @param Health $health
     * @return void
     */
    public function setHealth(Health $health)
    {
        $this->health = $health;
    }

    /**
     * Get health instance
     *
     * @return Health
     */
    public function getHealth(): Health
    {
        return $this->health;
    }

    /**
     * Checks if health is depleted
     *
     * @return boolean
     */
    public function isDead(): bool
    {
        return $this->health->isDepleted();
    }
}
