<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use App\Model\Entity\QuoteEntity;
use App\Model\Entity\AbstractEntity;
use PDO;

class QuoteTest extends TestCase
{
    /**
     * Retourner le nom et l'id de l'auteur
     * @return void
     */
    function testAuthorIdEtName(): void
    {
        $trickingComputer = $this->createMock(PDO::class);
        $kekidi = new QuoteEntity($trickingComputer);
        $kekidi->setId(2);
        $kekidi->setQuote('je fais un essai dans quote OscarWilde');
        $this->assertEquals(2, $kekidi->getId());
        $this->assertSame('je fais un essai dans quote OscarWilde', $kekidi->getQuote());
    }
    /**
     * Hydrater une quote
     * @return void
     */
    function testHydrateAvecAttributInconnu(): void
    {
        $trickingComputer = $this->createMock(PDO::class);
        $noGrave = new QuoteEntity($trickingComputer);
        $noGrave->hydrate(['quote' => 'je pense donc jesuite']);
        $this->assertSame('je pense donc jesuite', $noGrave->getQuote());
    }
    
    /**
     * Retourner une explication
     * @return void
     */
    function testExplanation(): void
    {
        $trickingComputer = $this->createMock(PDO::class);
        $noPainnoGain = new QuoteEntity($trickingComputer);
        $noPainnoGain->setExplanation('Citation sur l’importance du sourire');
        $this->assertEquals('Citation sur l’importance du sourire', $noPainnoGain->getExplanation());
    }
}
