<?php

trait IsStatement
{
    /** @var TypeDefinition|null */
    protected $resultType;

    public function getResultType(): ?TypeDefinition
    {
        return $this->resultType;
    }

    public function setResultType(TypeDefinition $resultType): void
    {
        $this->resultType = $resultType;
    }
}
