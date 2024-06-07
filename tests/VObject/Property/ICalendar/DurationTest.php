<?php

namespace Sabre\VObject\Property\ICalendar;

use PHPUnit\Framework\TestCase;
use Sabre\VObject\Component\VCalendar;

class DurationTest extends TestCase
{
    public function testGetDateInterval(): void
    {
        $vcal = new VCalendar();
        $event = $vcal->add('VEVENT', ['DURATION' => ['PT1H']]);

        self::assertEquals(
            new \DateInterval('PT1H'),
            $event->{'DURATION'}->getDateInterval()
        );
    }
}
