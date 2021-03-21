<?php

namespace Resource;

use Contracts\CallableType;
use PipModel;
use Property;

class ResourceProperty extends PipModel
{
    /** @var Property|null */
    protected $property;

    /** @var null}CallableType */
    protected $callable;

    public function getProperty(): ?Property
    {
        return $this->property;
    }

    public function setProperty(Property $property): void
    {
        $this->property = $property;
    }

    public function getCallable(): ?CallableType
    {
        return $this->callable;
    }

    public function setCallable(?CallableType $callable): void
    {
        $this->callable = $callable;
    }
}
