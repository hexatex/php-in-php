<?php

class FunctionDefinition extends PipModel implements Contracts\CallableType
{
    use HasLogic;

    /** @var string|null */
    protected $name;

    /** @var Parameter[] */
    protected $parameters = [];

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return Parameter[]
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }

    public function addParameter(Parameter $parameter): void
    {
        $this->parameters[$parameter->getId()];
    }

    public function removeParameter(Parameter $parameter): void
    {
        unset($this->parameters[$parameter->getId()]);
    }
}
