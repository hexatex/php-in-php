<?php

class Property extends PipModel
{
    /** @var bool */
    protected $isNullable = false;

    /** @var Contracts\Type */
    protected $type;

    public function getNullable(): bool
    {
        return $this->isNullable;
    }

    public function setIsNullable(bool $isNullable): void
    {
        $this->isNullable = $isNullable;
    }

    public function getType(): Contracts\Type
    {
        return $this->type;
    }

    public function setType(Contracts\Type $type): void
    {
        $this->type = $type;
    }
}
