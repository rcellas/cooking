# Intro to OOP in PHP

## Requiered

- PHP 7.4
- Composer installed

## Install

- composer install

## Run Tests

- vendor/bin/phpunit

## Exercise

The exercise must pass all test. Is very important that you don't change the test and read the comments and test.
Once finished, You can generate a new test if you want it.

### 1. Oven
#### 1.1. Requiered
##### 1.1.1. Oven

- The oven must be a abstract method.
- Must be a father class.
- Must have diferents var types, are specified in Oven.php and test.
- Must have a method __construct() that receive a cooking var.
- Must have a polimorfism method for calculate the temperature.
- Must have get for the var.

##### 1.1.2. Cannelloni and Chicken

- The Cannelloni and Chicken must be a child class of Oven.
- Must have a method __construct() that receive a cooking var.
- Pass the method temperature from Oven and increase the degrees according to the test.

#### 1.2. Optional

- Generate a new test for the Oven class and new funtionality.

### 2. Recipes
#### 2.1. Requiered
##### 2.1.1. Recipe

- The Recipe are a polimorfism class.
- The Recipe must communicate with the diferents forms for save data.
- The var $repository is private.
- The var $repository must communicate with the polimorfism.

##### 2.1.2. RecipeRepository
- Is a polimorfism class.
- Pass the function save()

##### 2.1.3. FileRecipeRepository and DatabaseRecipeRepository
- Pass the information for public function save().

#### 2.2. Optional
- Generate a new test for the Recipe class and new funtionality.

