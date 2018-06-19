# Boris Bikes in PHP

Practicing the basics with OOP and TDD in PHP with PHPUnit 

User Stories -> Domain Models

As a person,
So that I can use a bike,
I'd like a docking station to release a bike.

As a person,
So that I can use a good bike,
I'd like to see if a bike is working

# Objects | Messages
Person
Bike | is_bike_working
Docking Station | release_bike

Diagrammatically to show how the objects use messages to communicate with each other:

Bike <-- working? --> true/false
DockingStation <-- release_bike --> a Bike



---------------

## Installation

Composer install

Run:
./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/DockingStationTest.php