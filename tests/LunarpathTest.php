<?php
/**
 * Tests for LunarPath
 */

use PHPUnit\Framework\TestCase;
use Lunarpath\Lunarpath;

class LunarpathTest extends TestCase {
    private Lunarpath $instance;

    protected function setUp(): void {
        $this->instance = new Lunarpath(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Lunarpath::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
