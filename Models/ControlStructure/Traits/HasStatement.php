<?php

trait HasStatement
{
    /** @var Statement|null */
    protected $statement;

    public function getStatement(): ?Statement
    {
        return $this->statement;
    }

    public function setStatement(Statement $statement): void
    {
        $this->statement = $statement;
    }
}
