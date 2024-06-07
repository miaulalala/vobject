<?php

namespace Sabre\VObject;

use PHPUnit\Framework\TestCase;

class LineFoldingIssueTest extends TestCase
{
    public function testRead(): void
    {
        $event = <<<ICS
BEGIN:VCALENDAR\r
BEGIN:VEVENT\r
DESCRIPTION:TEST\\n\\n \\n\\nTEST\\n\\n \\n\\nTEST\\n\\n \\n\\nTEST\\n\\nTEST\\nTEST, TEST\r
END:VEVENT\r
END:VCALENDAR\r

ICS;

        $obj = Reader::read($event);
        self::assertEquals($event, $obj->serialize());
    }
}
