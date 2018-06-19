<?php
/**
 * Created by PhpStorm.
 * User: Anas
 * Date: 15/06/2018
 * Time: 14:12
 */

namespace Tests\Eshop\ShopBundle\Entity;

use PHPUnit\Framework\TestCase;
use Eshop\ShopBundle\Entity\Category;

class CategoryTest extends TestCase
{

    /**
     * @test
     */
    public function category()
    {
        $category = new Category();
        $category->setName("Sports")
            ->setDescription("Category sports")
            ->setDateCreated(new \DateTime())
            ->setSlug("swimming");
        $this->assertEquals("Sports", $category->getName());
        $this->assertEquals("Category sports",$category->getDescription());
        $this->assertEquals(new \DateTime(), $category->getDateCreated());
        $this->assertEquals("swimming", $category->getSlug());
    }

}