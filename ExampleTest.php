<?php
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testOne()
    {
        $this->assertTrue(true);
    }

    /**
     * @depends testOne
     */
    public function testTwo()
    {
    }
}
?>
