<?php

use PhpUnit\Framework\TestCase;
use App\Model\Entity\AbstractEntity;

class AbstractEntityTest extends TestCase
{
    function TestNonInstantiable()
    {
        $this->expectException(Error::class);
        new AbstractEntity();
    }
}