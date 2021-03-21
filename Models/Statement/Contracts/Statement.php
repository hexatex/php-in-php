<?php

interface Statement
{
    public function getResultType(): ?TypeDefinition;
}
