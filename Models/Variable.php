<?php

class Variable extends PipModel
{
    /** @var VariableDefinition|null */
    protected $variableDefinition;

    public function getVariableDefinition(): ?VariableDefinition
    {
        return $this->variableDefinition;
    }

    public function setVariableDefinition(VariableDefinition $variableDefinition): void
    {
        $this->variableDefinition = $variableDefinition;
    }
}
