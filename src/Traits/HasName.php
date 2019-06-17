<?php
namespace Jfern01\RpgChallenge\Traits;

class HasName
{
    /**
     * Name property
     *
     * @var string
     */
    protected $name = '';

    /**
     * Get name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return void
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }
}
