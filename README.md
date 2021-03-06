
# Graph-IR - Vehicle Issue & Repair
Graph-IR is a Graphql API for managing the issues and the repairs of vehicles the system composed by:

- Vehicle management
- Issues management
- Repairs management

All the queries and the mutations of the API are secured with OAuth2. You have to send the access token returned by the authentication mutation in the authorization header of all queries and mutations.

## Built With
- [Laravel](https://laravel.com/) The PHP Framework for Web Artisans.
- [Lighthouse](https://lighthouse-php.com/) The framework for serving GraphQL from Laravel.
- [Laravel Passport](https://laravel.com/docs/8.x/passport) The full OAuth2 server implementation for your Laravel application.
- [MySQL](https://www.mysql.com/) The relational database management system (RDBMS).

## Installation

You can install the project on your own server following the steps below:

```bash
# Get the latest snapshot
$ git clone https://github.com/Adib128/Graph-IR.git

# Change directory
$ cd Graph-IR

# Rename the .env example file
$ mv .env.example .env

# Install composer packages
$ composer install

# Install composer packages
$ php artisan migrate

# Create passport encryption keys
$ php artisan passport:install

# Start the project
$ php artisan serve
```
Now if you go to http://127.0.0.1:8000/graphql-playground, you'll get the graphql playground.