<?php

class Method extends FunctionDefinition
{
    /** @var ClassDefinition|null */
    protected $classDefinition;

    public function getClassDefinition(): ClassDefinition
    {
        return $this->classDefinition;
    }

    public function setClassDefinition(ClassDefinition $classDefinition): void
    {
        $this->classDefinition = $classDefinition;
    }
}
