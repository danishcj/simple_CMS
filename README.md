# Simple CMS Application

## About Simple_CMS

Simple_CMS is an application developed in PHPusing [Laravel framework 6](). After the build you will be able login and depending on User level you will be to view, create, edit, delete products/shops/users.

## Build steps

1.  Download the repository and access the project's directory on terminal.
2.  Open .env and insert your MySQL connection details (DB_HOST,DB_PORT,DB_USERNAME)
3.  Run the following commands on terminal:

> php artisan db:create

> php artisan migrate

> php artisan db:seed

> php artisan serve


## Credentials

First of all create a user using the "Register" endpoint.
The following credentials are auto generated with database seeder:

    Email: administrator@mail.com Password: 12345678
    Email: contentadmin@mail.com Password: 12345678
    Email: copywriter@mail.com Password: 12345678

## Author

If you have any problems/questions contact Danish Nadeem via [danishcj@gmail.com](mailto:danishcj@gmail.com).

