<?php

namespace Luhn;


    use PHPUnit\Framework\TestCase;

class LuhnTest extends TestCase
{
    public function testcardGeneration()
    {
        $object = new Luhn;
        $cardNumberArray = $object->cardGenerate(4, 17);
        $this->assertSame(17, strlen($cardNumberArray));

        $cardNumberArray = $object->cardGenerate(786, 19);
        $this->assertSame(19, strlen($cardNumberArray));
    }

}
