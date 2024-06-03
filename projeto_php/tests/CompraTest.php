<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

include '.\..\src\Email.php';

final class EmailTest extends TestCase{

    public function testCanBeCreatedFromValidEmailAddress(){
        $this->assertInstanceOf(
            Email::class,
            Email::fromString('user@example.com')
        );
    }

    public function testCannotBeCreatedFromValidEmailAddress(){
        $this->expectException(InvalidArgumentException::class);
        Email::fromString('invalid');
    }

    public function testCanBeUsedAsString(){
        $this->assertEquals(
            'user@example.com',
            Email::fromString('user@example.com')
        );
    }
}