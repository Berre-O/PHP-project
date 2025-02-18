<?php
use PHPUnit\Framework\TestCase;
require_once__DIR__ . '/../src/functions.php';

class ExampleTest extends TestCase {
    public function testSayHello() {
        $this->assertEquals("Hello, World!", sayHello());
    }
}
?>