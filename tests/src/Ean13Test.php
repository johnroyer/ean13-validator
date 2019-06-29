<?php

namespace Zeroplex\Test;

use PHPUnit\Framework\TestCase;
use Zeroplex\Ean13;

class ValidatorTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @dataProvider ean13numeraldataProvider
     */
    public function testNumeralCheck($input, $expected)
    {
        $this->assertSame(
            $expected,
            Ean13::isAllNumber($input)
        );
    }

    public function ean13numeraldataProvider()
    {
        return [
            ['123', true],
            ['abc', false],
            ['1234567890123', true],
            ['123ABC7890123', false],
        ];
    }
}