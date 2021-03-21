<?php

namespace Request;

use Contracts\CallableType;
use HasProperties;
use PipModel;

class Rule extends PipModel implements \Contracts\Rule
{
    use HasProperties;

    /** @var CallableType|null */
    protected $passes;

    /** @var CallableType|null */
    protected $message;

    public function getPasses(): ?CallableType
    {
        return $this->passes;
    }

    public function setPasses(CallableType $passes): void
    {
        $this->passes = $passes;
    }

    public function getMessage(): ?CallableType
    {
        return $this->message;
    }

    public function setMessage(CallableType $message): void
    {
        $this->message = $message;
    }
}
