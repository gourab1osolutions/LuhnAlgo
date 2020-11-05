<?php


namespace Luhn;

use PHPUnit\Framework\TestCase;

class CardIsValidTest extends TestCase
{
    public function testValidateNumber()
    {
        $object = new CardIsValid();
        $this->assertTrue($object->isValidCard(4592000140203973));
    }
}
