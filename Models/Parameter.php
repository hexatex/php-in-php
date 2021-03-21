<?php

class Parameter extends VariableDefinition
{
    /** @var string|null */
    protected $name;

    /** @var bool */
    protected $isNullable = false;

    /** @var TypeDefinition|null */
    protected $typeDefinition;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getNullable(): bool
    {
        return $this->isNullable;
    }

    public function setIsNullable(bool $isNullable): void
    {
        $this->isNullable = $isNullable;
    }

    public function getTypeDefinition(): ?TypeDefinition
    {
        return $this->typeDefinition;
    }

    public function setTypeDefinition(TypeDefinition $typeDefinition): void
    {
        $this->typeDefinition = $typeDefinition;
    }
}
