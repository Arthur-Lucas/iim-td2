<?php 

use Alucas\td2\Api;
use \PHPUnit\Framework\TestCase;

class ApiTest extends TestCase
{
    public function testGetRandomNumber()
    {
        $api = new Api();
        $this->assertIsInt($api->getRandNumber());
    }

    public function testGetDate()
    {
        $api = new Api();
        $this->assertInstanceOf(\DateTime::class, $api->getDate());

        $this->assertIsString($api->getDate());
        $this->assertSame(date('Y-m-d'), $api->getDateAsString());
    }
}