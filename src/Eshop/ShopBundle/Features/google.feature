Feature: Google
  Testing the behaviour of our code in the browser

  Scenario: Homepage
    Given I am on the homepage
    Then I should see "Recherche Google"

  @javascript
  Scenario: Search
    Given I am on the homepage
    And I wait 1 seconds
    When I fill in "lst-ib" with "Grafikart"
    And I press "btnK"
    And I wait 1 seconds
    Then I should see "Grafikart.fr"