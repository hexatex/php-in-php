<?php

class TypeDefinition
{
    /** @var TypeTypes|int|null */
    protected $typeType;

    /** @var CompoundTypes|int|null */
    protected $compoundType;

    /** @var ScalarTypes|int|null */
    protected $scalarType;

    /** @var SpecialTypes|int|null */
    protected $specialType;

    /** @var Contract|null */
    protected $contract;

    /**
     * @return TypeTypes|int|null
     */
    public function getTypeType(): ?int
    {
        return $this->typeType;
    }

    /**
     * @param TypeTypes|int $typeType
     */
    public function setTypeType(int $typeType): void
    {
        $this->typeType = $typeType;
    }

    /**
     * @return CompoundTypes|int|null
     */
    public function getCompoundType(): ?int
    {
        return $this->compoundType;
    }

    /**
     * @param CompoundTypes|int $compoundType
     */
    public function setCompoundType(int $compoundType): void
    {
        $this->compoundType = $compoundType;
    }

    /**
     * @return ScalarTypes|int|null
     */
    public function getScalarType(): ?int
    {
        return $this->scalarType;
    }

    /**
     * @param ScalarTypes|int $scalarType
     */
    public function setScalarType(int $scalarType): void
    {
        $this->scalarType = $scalarType;
    }

    public function getContract(): ?Contract
    {
        return $this->contract;
    }

    public function setContract(Contract $contract): void
    {
        $this->contract = $contract;
    }
}
