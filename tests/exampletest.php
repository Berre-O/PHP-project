<?php
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase {
    public function testSayHello() {
        require_once__DIR__ . '/../src/functions.php';
        $this->assertEquals("Hello, World!", sayHello());
    }
}
?>