<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Src\Math;

final class MathTest extends TestCase
{
    public function testAdd(): void
    {
        $m = new Math();
        $this->assertSame(5, $m->add(2, 2));
    }

    public function testSub(): void
    {
        $m = new Math();
        $this->assertSame(1, $m->sub(3, 2));
    }

    public function testMult(): void
    {
        $m = new Math();
        $this->assertSame(6, $m->mul(2, 3));
    }

    public function testDiv(): void
    {
        $m = new Math();
        $this->assertSame(2.0, $m->div(6, 3));
    }

    public function testDivByZero(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        (new Math())->div(1, 0);
    }
}
