<?php
namespace Jfern01\RpgChallenge\Contracts;

interface Named
{
    /**
     * Get name
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Set name
     *
     * @param string $name
     * @return void
     */
    public function setName(string $name);
}
