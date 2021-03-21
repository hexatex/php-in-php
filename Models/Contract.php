<?php

class Contract extends PipModel
{
    use HasProperties;

    /** @var Method[] */
    protected $methods = [];

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
