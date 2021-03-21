<?php

class Contract extends PipModel
{
    /** @var Property[] */
    protected  $properties = [];

    /** @var Method[] */
    protected $methods = [];

    /**
     * @return Property[]
     */
    public function getProperties(): array
    {
        return $this->properties;
    }

    public function addProperty(Property $property): void
    {
        $this->properties[$property->getId()] = $property->getId();
    }

    public function removeProperty(Property $property): void
    {
        unset($this->properties[$property->getId()]);
    }

    /**
     * @return Method[]
     */
    public function getMethods(): array
    {
        return $this->methods;
    }

    public function addMethod(Method $method): void
    {
        $this->methods[$method->getId()] = $method;
    }

    public function removeMethod(Method $method): void
    {
        $this->methods[$method->getId()] = $method;
    }
}
