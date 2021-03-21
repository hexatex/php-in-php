<?php

namespace Resource;

use PipModel;
use VariableDefinition;

class Resource extends PipModel
{
    /** @var VariableDefinition|null */
    protected $resourceDefinition;

    /** @var ResourceProperty[] */
    protected $resourceProperties = [];

    public function getResourceDefinition(): VariableDefinition
    {
        return $this->resourceDefinition;
    }

    public function setResourcesDefinition(VariableDefinition $resourceDefinition): void
    {
        $this->resourceDefinition = $resourceDefinition;
    }

    /**
     * @return ResourceProperty[]
     */
    public function getResourceProperties(): array
    {
        return $this->resourceProperties;
    }

    public function addResourceProperty(ResourceProperty $resourceProperty): void
    {
        $this->resourceProperties[$resourceProperty->getId()] = $resourceProperty;
    }

    public function removeResourceProperty(ResourceProperty $resourceProperty): void
    {
        unset($this->resourceProperties[$resourceProperty->getId()]);
    }
}
