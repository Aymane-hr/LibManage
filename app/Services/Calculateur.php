<?php
namespace App\Services;

class Calculateur
{
    public function additionner($a, $b)
    {
        return $a + $b;
    }
    public function estPair(int $nombre): bool
    {
        return $nombre % 2 === 0;
    }
    public function soustraire($a, $b)
    {
        return $a - $b;
    }

    public function multiplier($a, $b)
    {
        return $a * $b;
    }

    public function diviser($a, $b)
    {
        if ($b == 0) {
            throw new \DivisionByZeroError("Division par zéro !");
        }
        return $a / $b;
    }
    public function factorielle(int $nombre): int
    {
        if ($nombre < 0) {
            throw new \InvalidArgumentException("Nombre négatif !");
        }

        if ($nombre === 0 || $nombre === 1) {
            return 1;
        }

        return $nombre * $this->factorielle($nombre - 1);
    }
}

