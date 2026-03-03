<?php
/**
 * Tests for NFTNexus
 */

use PHPUnit\Framework\TestCase;
use Nftnexus\Nftnexus;

class NftnexusTest extends TestCase {
    private Nftnexus $instance;

    protected function setUp(): void {
        $this->instance = new Nftnexus(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nftnexus::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
