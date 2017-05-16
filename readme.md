# PHPBits

## Advanced bitwise operations using PHP made simplier

# Installation

### With composer

```$ composer install titasgailius/php-bits```


```
{
    "require": {
        "titasgailius/php-bits": "~1.00"
    }
}
```


# Examples
```php
<?php

require 'vendor/autoload.php';

use PHPBits\Bits;

/**
 * Convert string to a binary string
 *
 * Bits::strbin(string $string) : string
 */
Bits::strbin('Hello'); // "0100100001100101011011000110110001101111"

/**
 * Converts string to a decimal number representation
 *
 * Bits::strdec(string $string) : int
 */
Bits::strdec('Hello'); // 310939249775

/**
 * Converts an integer to a binary string
 *
 * Bits::decbin(int $integer, int $length = 8) : string
 */
Bits::decbin(10); // 00001010
Bits::decbin(10, 16); // 0000000000001010

/**
 * Get count of bits in a string
 *
 * Bits::strlen(string $string) : int
 *
 */
Bits::strlen('Hello');  // 40

/**
 * Rotate integer's bits to left by 1 position and return new integer

 * Bits::decRotateLeft(int $integer, int $positions = 1) : int
 */
Bits::decRotateLeft(10);
// 20, because 10 is "00010100" in binary so rotated it's "00010100" which is 20.
```
