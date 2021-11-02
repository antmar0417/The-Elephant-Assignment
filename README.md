<img src="https://media.giphy.com/media/xTlJqQwva46dy/giphy.gif" width="100%">

# Car Sales Site

That is our first individual assignment. The purpose was to create a PHP application of choice using HTML, CSS, JavaScript, and PHP. I chose to make a car sales site. It includes car brands and models. The vehicles can be sorted by brand and model. When you hover over a certain image it is possible to click on it and see the announcement on blocket.se. Here is the site address: https://antonmarinov.se/the-elephant-assignment/

# Installation

To run this project follow the steps below:

-   Open the terminal and change the current working directory to the location where you want the cloned directory.

-   Clone the project by pasting the command below

    ```
    git clone https://github.com/antmar0417/the-elephant-assignment.git
    ```

-   Start php server by typing

    ```
    php -S localhost:8000
    ```

-   Open up you browser and paste in this link:
    ```
    http://localhost:8000/index.php
    ```

# Code Review

Code review written by [Simon Helier](https://github.com/Sakariash).

1. `General:all php files` - Add comments for readability.
2. `data.php:10` - Structure the array for readability.
3. `function.php:5` - Incorrect declared parameter in function, should be int ($car['kW']).
4. `model.php:12` - Link tag used but never declared, could be paragraf .
5. `model.php` - Almost identical to models.php. Could implement dry code, maybe split the models.php in multiply files and include on model.php?
6. `index.php:3`, `models.php:7`,`model.php:7` - Color contrast could be better for accessability.

Trying to read code without comments

<img src="https://media.giphy.com/media/d2jjuAZzDSVLZ5kI/giphy-downsized.gif">
# Testers

Tested by the following people:

1. Jonas Mårtensson
2. Simon Helier
