<?php

trait HasLogic
{
    /** @var Logic[] */
    protected $logic = [];

    public function getLogic(): array
    {
        return $this->logic;
    }

    public function addLogic(Logic $logic): void
    {
        $this->logic[$logic->getId()] = $logic;
    }

    public function removeLogic(Logic $logic): void
    {
        unset($this->logic[$logic->getId()]);
    }
}
