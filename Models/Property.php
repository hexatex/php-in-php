<?php

class Property extends VariableDefinition
{
    /** @var Contract|null */
    protected $contract;

    public function getContract(): ?Contract
    {
        return $this->contract;
    }

    public function setContract(Contract $contract): void
    {
        $this->contract = $contract;
    }
}
