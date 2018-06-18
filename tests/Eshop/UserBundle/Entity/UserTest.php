<?php
/**
 * Created by PhpStorm.
 * User: Anas
 * Date: 16/06/2018
 * Time: 00:32
 */

namespace Tests\Eshop\UserBundle\Entity;

use PHPUnit\Framework\TestCase;
use Eshop\UserBundle\Entity\User;

class UserTest extends TestCase
{

    public function testuserentity()
    {
        $user = new User();

        $user->setFirstname("John")
            ->setLastname("Doe")
            ->setAddress("Paris - France")
            ->setJoinDate(new \DateTime())
            ->setPhone(0751042437);
        $this->assertEquals("John",$user->getFirstname());
        $this->assertEquals("Doe", $user->getLastname());
        $this->assertEquals(new \DateTime(), $user->getJoinDate());
        $this->assertEquals(0751042437, $user->getPhone());
        $this->assertEquals("Paris - France", $user->getAddress());

    }

}