<?php

namespace Sabre\VObject;

use PHPUnit\Framework\TestCase;

class VersionTest extends TestCase
{
    public function testString(): void
    {
        $v = Version::VERSION;
        self::assertEquals(-1, version_compare('2.0.0', $v));
    }
}
