<?php

trait HasProperties
{
    /** @var Property[] */
    protected  $properties = [];

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
}
