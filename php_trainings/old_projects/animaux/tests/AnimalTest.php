<?php

use Phpunit\Framework\TestCase;
use App\Model\Entity\Animal;

class AnimalTest extends TestCase
{
    function testAnimalRetourneIdEtNom(){
        $animal = new Animal();
        $animal->setId(2);
        $animal->setNom('Ozaru');

        $this->assertSame(2, $animal->getId());
        $this->assertSame('Ozaru', $animal->getNom());

    }

    function testIdEnLectureSeule():void {
        $animal = new Animal();
        $animal->setId(2);
        $this->expectException(LogicException::class);
        $animal->setId(3);
    }

    function testHydrateAvecAttributInconnu():void
    {
        $animal = new Animal();
        $animal->hydrate(['nom' => 'Ozaru']);
        $this->assertSame('Ozaru', $animal->getNom());
        $this->expectException(InvalidArgumentException::class);
        $animal->hydrate(['cri', 'graou']);
    }
}