<?php
namespace Context;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Behat\Definition\Call\Then;
use Behat\Behat\Tester\Exception\SkippedException;
use Behat\Mink\Exception\ElementNotFoundException;
/**
 * Defines application features from the specific context.
 */
class WebContext extends MinkContext implements SnippetAcceptingContext
{
    /**
     * @When I wait :seconds seconds
     */
    public function iWaitSeconds($seconds)
    {
        $this->getSession()->wait($seconds * 1000);
    }
    /**
     * @Then the response status code should be :code
     */
    public function theResponseStatusCodeShouldBe($code)
    {
        $this->assertSession()->statusCodeEquals($code);
    }
}