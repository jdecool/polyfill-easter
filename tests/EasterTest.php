<?php

class EasterTest extends PHPUnit_Framework_TestCase
{
    public function testEasterDate()
    {
        $this->assertEquals('2000-04-23', date("Y-m-d", easter_date(2000)));
        $this->assertEquals('2001-04-15', date("Y-m-d", easter_date(2001)));
        $this->assertEquals('2002-03-31', date("Y-m-d", easter_date(2002)));

        try {
            date("Y-m-d", easter_date(1492));

            $this->fail('easter_date function should be only valid for years between 1970 and 2037 inclusive');
        } catch (\Exception $e) {
            $this->assertTrue(true);
        }
    }
}
