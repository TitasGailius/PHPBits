<?php

namespace PHPBits\Tests;

use PHPUnit_Framework_TestCase;
use PHPBits\Bits;

class BitsTest extends PHPUnit_Framework_TestCase
{
    public function test_string_to_binary_conversion()
    {
        $helloWorld = '0100100001100101011011000110110001101111001000000111011101101111011100100110110001100100';
        $this->assertEquals(Bits::strbin('Hello world'), $helloWorld);
    }

    public function test_string_to_decinal_conversion()
    {
        $this->assertEquals(97, Bits::strdec('a'), 97);
        $this->assertEquals(98, Bits::strdec('b'), 98);
        $this->assertEquals(99, Bits::strdec('c'), 99);
    }

    public function test_decimal_to_binary_conversion()
    {
        $this->assertEquals('00001010', Bits::decbin(10));
        $this->assertEquals('000000001010', Bits::decbin(10, 12));
    }

    public function test_string_length_in_bits_counter()
    {
        $this->assertEquals(8, Bits::strlen('a'));
        $this->assertEquals(16, Bits::strlen('ab'));
        $this->assertEquals(24, Bits::strlen('abc'));
    }

    public function test_bits_rotation_to_left()
    {
        // decbin(10) = "00001010", so "00010100" when rotated left
        $this->assertEquals(bindec('00010100'), Bits::decRotateLeft(10));

        // // decbin(10) = "00001010", so "00101000" when rotated left by 2 bits
        $this->assertEquals(bindec('00101000'), Bits::decRotateLeft(10, 2));
    }

}
