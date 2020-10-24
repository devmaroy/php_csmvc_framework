# **Custom PHP MVC Framework**

This PHP MVC framework is created based on the learning from Laracast.The framework is VERY SIMPLE and will be used just for fun simple projects.

<br>

<br>

## Installation

Use these commands to install the dependencies and start the server.

1.  **Clone from Github**

    ```
    $ git clone git@github.com:devmaroy/php_csmvc_framework.git
    ```

2.  **Navigate into your directory where you cloned repository**

    ```
    $ cd my-folder
    ```

3.  **Download composer**

    ```
    $ https://getcomposer.org/download/
    ```

4.  **Install composer**

    ```
    $ composer install
    ```

5.  **Import MySQL database (.sql file in the repo)**

    ```
    $ php_csmvc_db.sql
    ```

    The original database name is: **php_csmvc_db**. Create new and import all from sql file. You can find database config in **config.php**.

    <br>

6.  **Start PHP up**

        ```
        $ php -S localhost:8888
        ```

    you can also use MAMP or something else.
    <br>
    <br>
    **Your site is now running at `http://localhost:8888`!**

<br>

## Structure

A quick look at the top-level files and directories you'll see in my project.

    .
    ├── app
    ├── core
    ├── public
    ├── vendor
    ├── .gitignore
    ├── composer.json
    ├── composer.phar
    ├── config.php
    ├── index.php
    ├── screenshot.png
    └── README.md

<br>

1.  **`/app`**: This directory contains all the controllers, views and necessary files for this application.

2.  **`/core`**: This directory contains all the core code related to the custom MVC framework. You can find in this directory files for routing, helper functions and dependencies”.

3.  **`/public`**: Files for public - css, images.

4.  **`/vendor`**: Here you can find 3rd party packages with composer stuff.

5.  **`.gitignore`**: This file tells git which files it should not track / not
    maintain a version history for.

6.  **`composer.json`**: Configuration file for the composer.

7.  **`composer.phar`**: This directory contains composer stuff.

8.  **`config.php`**: Configuration file the application - database and other.

9.  **`index.php`**: Entry point for the application - everything starts here.

10. **`README.md`**: A text file containing useful reference information about
    project.

<br>

<hr>

<br>

Created by **[@devmaroy](https://twitter.com/devmaroy)** feel free to contact me

e-mail: **[hello@devmaroy.com](mailto:hello@devmaroy.com?subject=[GitHub]%20php_csmvc_framework)**
