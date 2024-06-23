<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../User.php';

class UserTest extends TestCase
{
    protected $user;

    protected function setUp(): void
    {
        $this->user = new User('Omar', 'Omar@gmail.com');
    }

    // test
    public function testGetName()
    {
        $this->assertEquals('Omar', $this->user->name());
    }

    // test
    public function testSetName()
    {
        $this->user->name('Noha');
        $this->assertEquals('Noha', $this->user->name());
    }

    // test
    public function testGetEmail()
    {
        $this->assertEquals('Omar@gmail.com', $this->user->email());
    }

    // test
    public function testSetEmail()
    {
        $this->user->email('nohasalah@iti.gov.eg');
        $this->assertEquals('nohasalah@iti.gov.eg', $this->user->email());
    }
}
