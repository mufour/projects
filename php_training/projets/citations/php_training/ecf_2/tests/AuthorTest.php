<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use App\Model\Entity\AuthorEntity;
use App\Model\Entity\AbstractEntity;
use PDO;

class AuthorTest extends TestCase
{
    function testAuthorIdEtName()
    {
        $trickingComputer = $this->createMock(PDO::class);
        $ouelbeq = new AuthorEntity($trickingComputer);
        $ouelbeq->setId(2);
        $ouelbeq->setAuthor('Oscar Wilde');
        $this->assertEquals(2, $ouelbeq->getId());
        $this->assertSame('Oscar Wilde', $ouelbeq->getAuthor());
    }
    function testHydrateAvecAttributInconnu(): void
    {
        $trickingComputer = $this->createMock(PDO::class);
        $noGrave = new AuthorEntity($trickingComputer);
        $noGrave->hydrate(['author' => 'Nothomb']);
        $this->assertEquals('Nothomb', $noGrave->getAuthor());
        $this->expectException(InvalidArgumentException::class);
        $noGrave->hydrate(['best seller' => 'Gatta en Fuego']);
    } 

    function testAuteurLectureSeul(): void
    {
        $trickingComputer = $this->createMock(PDO::class);
        $ouelbeq = new AuthorEntity($trickingComputer);
        $ouelbeq->setId(1);
        $this->assertEquals(1, $ouelbeq->getId());
    }
    
    function testBiographyLectureSeule(): void
    {
        $trickingComputer = $this->createMock(PDO::class);
        $pouetwriter = new AuthorEntity($trickingComputer);
        $pouetwriter->setBiography(2);
        $this->assertEquals(2, $pouetwriter->getBiography());
    }
}
