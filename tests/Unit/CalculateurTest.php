<?php

namespace Tests\Unit;

use App\Services\Calculateur;
use PHPUnit\Framework\TestCase;

class CalculateurTest extends TestCase
{
    public function testAdditionner()
    {
        $calc = new Calculateur();
        $resultat = $calc->additionner(2, 3);
        $this->assertEquals(5, $resultat);
    }

    public function testEstPair()
    {
        $calc = new Calculateur();
        $this->assertTrue($calc->estPair(4));
        $this->assertFalse($calc->estPair(5));
    }

    public function testRetourneInt()
    {
        $calc = new Calculateur();
        $this->assertSame(5, $calc->additionner(2, 3)); // int
    }

    public function testAdditionNeDonnePasFauxResultat()
    {
        $calc = new Calculateur();
        $this->assertNotEquals(6, $calc->additionner(2, 3));
    }

    public function testListeVide()
    {
        $result = [];
        $this->assertEmpty($result);
    }

    public function testListeNonVide()
    {
        $result = [1, 2];
        $this->assertNotEmpty($result);
    }

    public function testListeContient3Elements()
    {
        $result = [1, 2, 3];
        $this->assertCount(3, $result);
    }
    public function testContientElement()
    {
        $fruits = ['pomme', 'banane', 'fraise'];
        $this->assertContains('banane', $fruits);
    }
    public function testEstInstanceDuCalculateur()
    {
        $calc = new Calculateur();
        $this->assertInstanceOf(Calculateur::class, $calc);
    }
    public function testRetourneNullSiVide()
    {
        $result = null;
        $this->assertNull($result);
    }
    public function testMessageContientTexte()
    {
        $message = "Bonjour le monde";
        $this->assertStringContainsString("Bonjour", $message);
    }
    public function testValeurEstPlusGrandeQue()
    {
        $this->assertGreaterThan(10, 15);
    }

    public function testValeurEstPlusPetiteQue()
    {
        $this->assertLessThan(10, 5);
    }
    public function testDivisionParZeroLanceException()
    {
        $this->expectException(\DivisionByZeroError::class);
        $calc = new Calculateur();
        $calc->diviser(10, 0);
    }
    public function testDiviser()
    {
        $calc = new Calculateur();
        $this->assertEquals(2, $calc->diviser(10, 5));
    }
    public function testSoustraire()
    {
        $calc = new Calculateur();
        $this->assertEquals(1, $calc->soustraire(5, 4));
    }

    public function testMultiplier()
    {
        $calc = new Calculateur();
        $this->assertEquals(15, $calc->multiplier(3, 5));
    }
    public function testFactorielle()
    {
        $calc = new Calculateur();
        $this->assertEquals(120, $calc->factorielle(5)); // 5! = 120
        $this->assertEquals(1, $calc->factorielle(0));
    }

    public function testFactorielleAvecValeurNegative()
    {
        $this->expectException(\InvalidArgumentException::class);
        $calc = new Calculateur();
        $calc->factorielle(-3);
    }

}
