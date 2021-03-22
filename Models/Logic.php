<?php

class Logic extends PipModel
{
    /** @var Statement[] */
    protected $statements = [];

    /**
     * @return Statement[]
     */
    public function getStatements(): array
    {
        return $this->statements;
    }

    public function addStatement(Statement $statement): void
    {
        $this->statements[$statement->getId()];
    }

    public function removeStatement(Statement $statement): void
    {
        unset($this->statements[$statement->getId()]);
    }
}
