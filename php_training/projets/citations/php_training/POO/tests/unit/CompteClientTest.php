<?php

use PHPUnit\Framework\TestCase;
use App\Client\Compte;

class CompteClientTest extends TestCase
{
    function testObjectHasAttributes(): void
    {
        $compteclient = new Compte('Michelmichel','Michmich');
        $this->assertObjectHasProperty('nom', $compteclient);
        $this->assertObjectHasProperty('prenom', $compteclient);
    }

    function testSetterAndGetterOk(): void
    {
        $compteClient = new Compte('Michelmichel','Michmich');
        $compteClient->setNom('Michelmichel');
        $compteClient->setPrenom('Michmich');
        $this->assertEquals('Michelmichel', $compteClient->getNom());
        $this->assertEquals('Michmich', $compteClient->getPrenom());

        $this->expectException(\InvalidArgumentException::class);
        $compteClient->setNom('');
        $compteClient->setPrenom('');
    }

    function testConstructor(): void
    {
        $compteClient = new Compte('Michelmichel', 'Michmich');
        $this->assertIsString(actual: $compteClient->getPrenom());
        $this->assertIsString(actual: $compteClient->getNom());
        $this->assertEquals('Michelmichel', $compteClient->getNom());
        $this->assertEquals('Michmich', $compteClient->getPrenom());
    }

    function testToString()
    {
        $compteClient = new Compte('Michelmichel','Michmich');
        $this->assertEquals('Michmich Michelmichel', $compteClient->__toString());
    }
}