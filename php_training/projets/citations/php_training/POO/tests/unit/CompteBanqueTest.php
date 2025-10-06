<?php

use PHPUnit\Framework\TestCase;
use App\Banque\Compte;
use App\Client\Compte as CompteClient;

class CompteBanqueTest extends TestCase
{
    public function testTitulaireAndSolde(): void
    {
        $compteClient = new CompteClient('Michelmichel', 'Michmich');
        $compteBanque = new Compte($compteClient, 1000);

        $this->assertInstanceOf(Compte::class, $compteBanque);
        $this->assertInstanceOf(CompteClient::class, $compteBanque->getTitulaire());
        $this->assertIsInt($compteBanque->getSolde());
    }

    public function testDeposer(): void
    {
        $compteClient = new CompteClient('Michelmichel', 'Michmich');
        $compteBanque = new Compte($compteClient, 1000);
        $compteBanque->deposer(500);
        $this->assertEquals(
            1500,
            $compteBanque
                ->deposer(500)
                ->getSolde()
        );
        $this->expectException(\LogicException::class);;
        $this->expectExceptionMessage('WTF is happening ?');
    }
}
