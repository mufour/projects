<?php

use PHPUnit\Framework\TestCase;
use App\Model\Entity\AbstractEntity;


class AbstractEntityTest extends TestCase
{
    function testNonInstantiable()
    {
        $this->expectException(Error::class);
        new AbstractEntity();
    }
}