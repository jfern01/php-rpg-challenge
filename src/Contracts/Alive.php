<?php
namespace Jfern01\RpgChallenge\Contracts;

use Jfern01\RpgChallenge\Health;

interface Alive
{
    /**
     * Set health instance
     *
     * @param Health $health
     * @return void
     */
    public function setHealth(Health $health);

    /**
     * Get health instance
     *
     * @return Health
     */
    public function getHealth(): Health;

    /**
     * Checks if health is depleted
     *
     * @return boolean
     */
    public function isDead(): bool;
}
