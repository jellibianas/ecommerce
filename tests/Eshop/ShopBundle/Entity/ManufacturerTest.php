<?php
/**
 * Created by PhpStorm.
 * User: Anas
 * Date: 14/06/2018
 * Time: 14:04
 */

namespace Tests\Eshop\ShopBundle\Entity;

use PHPUnit\Framework\TestCase;
use Eshop\ShopBundle\Entity\Manufacturer;

class ManufacturerTest extends TestCase
{

    /**
     * @test
     */
    public function manufacturer()
    {
        $manufacturer = new Manufacturer();
        $manufacturer->setName("Test")
                     ->setDescription("test unit manufacturer");
        $this->assertEquals('Test', $manufacturer->getName());
        $this->assertEquals('test unit manufacturer', $manufacturer->getDescription());
    }

}