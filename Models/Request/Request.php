<?php
namespace Request;

use HasProperties;
use PipModel;

class Request extends PipModel
{
    use HasProperties;

    /** @var \Contracts\Rule[] */
    protected $rules = [];
}
