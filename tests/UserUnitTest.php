<?php

namespace App\Tests;


use PHPUnit\Framework\TestCase;
use App\Entity\User;

class UserUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $user = new User();
        $user->setNom("John Doe");


        $this->assertTrue($user->getNom() === "John Doe");
    }
}
