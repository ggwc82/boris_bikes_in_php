# Boris Bikes in PHP

Practicing the basics with OOP and TDD in PHP with PHPSpec

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


As a member of the public
So I can return bikes I've hired
I want to dock my bike at the docking station

As a member of the public
So I can decide whether to use the docking station
I want to see a bike that has been docked

# Objects | Messages
Person
Bike
Docking Station | dock, dock_status

---------------

## Installation

Composer install

Run:
bin/phpspec run