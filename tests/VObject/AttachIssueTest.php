<?php

namespace Sabre\VObject;

use PHPUnit\Framework\TestCase;

class AttachIssueTest extends TestCase
{
    public function testRead(): void
    {
        $event = <<<ICS
BEGIN:VCALENDAR\r
BEGIN:VEVENT\r
ATTACH;FMTTYPE=;ENCODING=:Zm9v\r
END:VEVENT\r
END:VCALENDAR\r

ICS;
        $obj = Reader::read($event);
        self::assertEquals($event, $obj->serialize());
    }
}
