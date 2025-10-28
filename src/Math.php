<?php
declare(strict_types=1);

final class Math
{
    public function add(int $a, int $b): int { return $a + $b; }
    public function sub(int $a, int $b): int { return $a - $b; }
    public function mul(int $a, int $b): int { return $a * $b; }
    public function div(int $a, int $b): float
    {
        if ($b === 0) {
            throw new \InvalidArgumentException('Impossible de diviser par zéro.');
        }
        return $a / $b;
    }
}
