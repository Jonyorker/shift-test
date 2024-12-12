# BisonTransports Laravel Template

<!-- TOC -->
* [BisonTransports Laravel Template](#bisontransports-laravel-template)
  * [RDP Deployment](#rdp-deployment)
    * [Requirements](#requirements)
    * [Steps](#steps)
      * [To use Apache web server, do the following.](#to-use-apache-web-server-do-the-following)
      * [To use the Nginx server provided with Docker](#to-use-the-nginx-server-provided-with-docker)
  * [Local Development Docker deploy](#local-development-docker-deploy)
    * [Requirements](#requirements-1)
    * [Steps](#steps-1)
  * [Local Development Docker deploy - Restricted Resource Only](#local-development-docker-deploy---restricted-resource-only)
    * [Requirements](#requirements-2)
    * [Steps](#steps-2)
  * [How to create and use console commands](#how-to-create-and-use-console-commands)
    * [Create Command](#create-command)
    * [Run Command from terminal](#run-command-from-terminal)
    * [Run Command from application](#run-command-from-application)
    * [Artisan Documentation](#artisan-documentation)
  * [How to create and use Feature and Unit tests](#how-to-create-and-use-feature-and-unit-tests)
    * [Create a unit test](#create-a-unit-test)
    * [Create a feature test](#create-a-feature-test)
    * [Run tests](#run-tests)
    * [Run Linter and Formatter](#run-linter-and-formatter)
  * [SQLSRV drivers installation](#sqlsrv-drivers-installation)
    * [Install OBDC Drivers on MacOS, any architecture.](#install-obdc-drivers-on-macos-any-architecture)
    * [MacOS Intel](#macos-intel)
    * [MacOS ARM](#macos-arm)
  * [Redis and RedisInsight](#redis-and-redisinsight)
  * [How to create a Model, Factory and corresponding Migration file based on a DB Table](#how-to-create-a-model-factory-and-corresponding-migration-file-based-on-a-db-table)
    * [Generate the Model](#generate-the-model)
    * [Generate the Factory](#generate-the-factory)
    * [Seeders](#seeders)
  * [Creating a Seeder](#creating-a-seeder)
  * [Running a seeder](#running-a-seeder)
  * [How to create a Migration file based on a DB Table](#how-to-create-a-migration-file-based-on-a-db-table)
  * [How to create an email](#how-to-create-an-email)
    * [Envelope section](#envelope-section)
    * [Content section](#content-section)
    * [Attachments section](#attachments-section)
  * [How to setup XDebug](#how-to-setup-xdebug)
    * [Using local apache](#using-local-apache)
    * [Using php in terminal for unit tests](#using-php-in-terminal-for-unit-tests)
    * [Using Docker Nginx](#using-docker-nginx)
  * [Laravel Telescope](#laravel-telescope)
  * [Swagger](#swagger)
  * [Laravel's Readme links](#laravels-readme-links)
  * [Learning Laravel](#learning-laravel)
<!-- TOC -->

## RDP Deployment

This is still under development, and instructions will change as improvements are made

### Requirements
- Docker Desktop ( found here https://www.docker.com/ )
- PHP 8.1 as well as SQLSRV drivers. Please see section on installing SQLSRV drivers for more info.
- Preconfigured databases
- Preconfigured Apache server
- a PostgreSQL database with a schema called "monitoring" for Pulse, Telescope and Jobs queue to work, as well as keep
  any future Laravel instance specific tables to not clutter the shared databases. This is an instance specific DB.

### Steps
- Download the repo to your preferred location
- Copy and rename `.env-production` to `.env`, modify values as you need. Database values most likely will need modifications
  - Pay close attention to IP addresses and ports, as you may have conflicts.
- In a terminal, go to the repo root
- Run `docker compose -f docker-compose-rdp.yml --env-file .env.testing up -d` this will build the PostgreSQL and testing databases locally
- Run `composer install` to install the required packages
- Edit the file `bin\php\php8.1.28\php.ini` to uncomment the following lines:
```text
extension=pgsql
extension=pdo_pgsql
```
- Wait a minute or two to ensure that the DB's are properly spun up before running the next command.
- Run `php artisan migrate --path='/database/migrations/monitoring' --database='monitoring'`

#### To use Apache web server, do the following.

- In Docker Desktop, stop the "webserver" container
- Under the folder `bin\apache\Apache24\conf\extra\` create an Apache conf `httpd-vhosts.shed.bisontransport.laravel.conf` file similar to this (replace shed with actual name) :
```apacheconf
<VirtualHost *:80> 
    ServerName shed.bisontransport.laravel

#    ServerName shed.bison.ws
#    Redirect permanent / https://shed.bisontransport.ws/

#    ServerName shed.bison.ca
#    Redirect permanent / https://shed.bisontransport.com/

    DocumentRoot "${WWWROOT}/shed.bisontransport.laravel/public"

    ErrorLog "|${SRVROOT}/bin/rotatelogs.exe ${WWWLOG}/shed.bisontransport.laravel-error.%Y.%m.%d.log 86400"
#    CustomLog "|${SRVROOT}/bin/rotatelogs.exe ${WWWLOG}/shed.bisontransport.laravel-access.%Y.%m.%d.log 86400" combined

    <Directory "${WWWROOT}/shed.bisontransport.laravel/public">
        <Files ~ "\.php$"> 
            AddHandler fcgid-script .php .phtml
            FcgidWrapper "${PHPDIR81}/php-cgi.exe" .php 
            FcgidWrapper "${PHPDIR81}/php-cgi.exe" .phtml 
        </Files>

        AllowOverride All
        Require all granted
    </Directory>

    <IfModule mod_headers.c>
        Header set Cache-Control "no-cache, no-store, must-revalidate"
        Header set Pragma "no-cache"
        Header set Expires 0
    </IfModule>
</VirtualHost>
```
- to the `bin\apache\Apache24\conf\httpd.conf` file add this line `Define PHPDIR81 "c:/bin/php/php8.1.28"`
- to the `C:\Windows\System32\drivers\etc\hosts` file add this line `127.0.0.1 shed.bisontransport.laravel"`
- in the file `bin\apache\Apache24\conf\httpd.conf` add the line `Include conf/extra/httpd-vhosts.shed.bisontransport.laravel.conf`
- Restart your Apache instance, and it should work

#### To use the Nginx server provided with Docker

- Verify that the "webserver" container is running in Docker Desktop.
- to the `C:\Windows\System32\drivers\etc\hosts` file add this line `127.0.0.1 shed.bisontransport.laravel"`

## Local Development Docker deploy

This is still under development, and instructions will change as improvements are made

### Requirements
- Docker desktop installed
- PHP 8.1 as well as SQLSRV drivers. Please see section on installing SQLSRV drivers for more info.
- If using a Mac Arm machine, please configure Docker to use Rosetta 2 as per this page: https://dev.to/docker/run-x86-containers-on-apple-mac-m1-with-rosetta-2-417a
- Edit the file `bin\php\php8.1.28\php.ini` to uncomment the following lines:
```text
extension=pgsql
extension=pdo_pgsql
```

### Steps
- Download the repo to your preferred location
- Copy and rename `.env-development` to `.env`, modify values as you need.
  - Pay close attention to IP addresses and ports, as you may have conflicts.
- In a terminal, go to the repo root
- Do you wish to use Apache as a server?
  - Run `docker compose up -d` this will build the databases locally
- Do you wish to use Nginx in docker as a server?
  - Run `docker compose -f docker-compose-nginx.yml up -d`
- Wait about 30 seconds after the containers are initialized before moving on to the next step.
- Run `composer install --dev` to install the required packages
- Run `php artisan app:bulk-migrate` to populate the required db tables
- If you have chosen to use Apache, 
  - Laravel will be available as you have configured
- If you have chosen Nginx with Docker
  - Your Laravel app should be available on http://localhost
- If you just want to quickly run laravel without a dedicated server
  - Run `php artisan serve` to spin up the Laravel app with a lightweight web server. The url displayed in the terminal should open up the home page.

## Local Development Docker deploy - Restricted Resource Only

This is still under development, and instructions will change as improvements are made

### Requirements
- Docker desktop installed
- PHP 8.1 as well as SQLSRV drivers. Please see section on installing SQLSRV drivers for more info.
- If using a Mac Arm machine, please configure Docker to use Rosetta 2 as per this page: https://dev.to/docker/run-x86-containers-on-apple-mac-m1-with-rosetta-2-417a
- Edit the file `bin\php\php8.1.28\php.ini` to uncomment the following lines:
```text
extension=pgsql
extension=pdo_pgsql
```

### Steps
- Download the repo to your preferred location
- Copy and rename `.env-development-slim` to `.env`, modify values as you need.
  - Pay close attention to IP addresses and ports, as you may have conflicts.
- In a terminal, go to the repo root
- Run `docker compose -f docker-compose-slim.yml up -d` this will build the databases locally, and give you an Nginx server
- Run `composer install --dev` to install the required packages
- Wait about 30 seconds after the containers are initialized before moving on to the next step.
- Run `php artisan app:bulk-migrate` to populate the required db tables
- Your Laravel app should be available on http://localhost

## How to create and use console commands

### Create Command

From project root in terminal, run `php artisan make:command CommandName`, replacing CommandName with your desired name
in PascalCase.

The new file will be located in app/Console/Commands. Place your code under the handle() function.

### Run Command from terminal

From project root in terminal, run `php artisan app:CommandName`, or whatever value you placed under the signature variable,

### Run Command from application

From inside a function, if you require to call an Artisan command, use `Artisan::call('app:CommandName' [parameters])`

### Artisan Documentation

For more information about Artisan and commands, such as console commands with prompts, please visit https://laravel.com/docs/10.x/artisan

## How to create and use Feature and Unit tests

First, a bit of nomenclature. Laravel distinguishes Feature tests as testing API / Routes. This involves calling a route
with specific payload, and comparing returned results against expected values. This effectively tests routing and controllers.

Unit tests involve everything else. Models, methods, helpers, functions etc. In theory, if controllers are declarative in
nature and calls functions (typically imperative) the unit tests run first. Should they all pass, the feature tests are
expected to pass.

Furthermore, unit tests do not interface with DB's where feature test do. A unit test will create an Object using it's
factory, and tests it's methods all without touching the db.

### Create a unit test

From project root in terminal, run `php artisan make:test TestNameTest --unit`, replacing TestName with your desired name
in PascalCase. The file must end with Test.php

This will make the test class in the /tests/Unit directory.

### Create a feature test

From project root in terminal, run `php artisan make:test TestNameTest --feature`, replacing TestName with your desired name
in PascalCase. The file must end with Test.php

This will make the test class in the /tests/Feature directory.

### Run tests

From project root in terminal, run `composer test` to run everything. 

###  Code coverage in PHPStorm

To enable coverage highlighting in PHPStorm:
- click on the coverage icon on your right hand vertical icon bar. It should
be the shield with checkmark.
- click on the "Import External Coverage Report"
- In the window, navigate and select the report in /test/report.xml

If you navigate to a file with a code coverage report, you should see lines highlighted based on their status.
To edit the colors, go to: Settings -> Editor -> Color Scheme -> General -> Line Coverage

The report should autogenerate each time you run `composer test`

### Run Linter and Formatter

From project root in terminal, run `./vendor/bin/duster lint` to see the issues. Run `./vendor/bin/duster fix` to tell
duster to attempt to autofix what it can.

## SQLSRV drivers installation

### Install OBDC Drivers on MacOS, any architecture.

- From the terminal, please run `brew install msodbcsql17 mssql-tools`

### MacOS Intel

- From the terminal, with php 8.1 installed, please run `sudo pecl install sqlsrv` and
  `sudo pecl install pdo_sqlsrv`

### MacOS ARM

- From the terminal, with php 8.1 installed, please run `sudo CXXFLAGS="-I/opt/homebrew/opt/unixodbc/include/" LDFLAGS="-L/opt/homebrew/lib/" pecl install sqlsrv
  ` and
  `sudo CXXFLAGS="-I/opt/homebrew/opt/unixodbc/include/" LDFLAGS="-L/opt/homebrew/lib/" pecl install pdo_sqlsrv`

## Redis and RedisInsight

Redis and RedisInsight are configured in this docker compose stack for your ease of use. To connect to Redis using 
RedisInsight please go to http://localhost:5540/ to get the management UI. To add the database, use the following settings:

host: redis (uses docker's internal IP resolver)
port: check your .env REDIS_PORT value (usually 6379)
username: default
password: check your .env REDIS_PASSWORD value (usually somepassword)

For instructions on how to use Redis with Laravel, please see https://laravel.com/docs/10.x/redis#interacting-with-redis

## How to create a Model, Factory and corresponding Migration file based on a DB Table

### Generate the Model

To generate a model use the following command `php artisan krlove:generate:model --connection=db_name_in_config_file --table-name=CaseSensitiveTableName DesiredFileName`
You can verify the db_name_in_config value from the /config/database.php file, and use the key value to the connection.

This will place the model in the /app/Models folder. Please move it to the proper subfolder for organizational purposes.

Please ensure that the model has the proper table, connection and fillable values.

If the table has created and updated columns, please declare them like so

```php
class NewModel extends Model
{
    const CREATED_AT = 'created_date';

    const UPDATED_AT = 'updated_date';
```

if there are no timestamp columns, please use this:

```php
class NewModel extends Model
{
    public $timestamps = false;
```

### Generate the Factory

To generate a factory use the following command `php artisan generate:factory -i ModelName --path=app/Models/dbName`. This will place a factory 
in the /database/factories/db_name/ folder. 

Please open the file and edit the extends property to point to the right model in case it does not.
Please ensure that the related model, also has the "use HasFactory" property in it.

```php
class NewModel extends Model
{
    use HasFactory;
```
Returning to the factory file, please enter the proper values in the return object. For more information please refer 
to https://laravel.com/docs/10.x/eloquent-factories

```php

return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'formatted_name' => fake()->name(),
            'reporting_name' => fake()->name(),
            'aka_name' => fake()->name(),
            'birth_date' => fake()->dateTimeThisCentury(),
            'gender_code' => fake()->randomElement(['male', 'female']),
            'middle_name' => fake()->firstName(),
        ];

```
This factory will be used to create objects to manipulate before inserting into the database, provide quick objects to
run unit tests against, as well as seed local dev or QA databases in the future.

### Seeders

Seeders are automated, programmable ways of calling Factories. Sometimes you need to call a factory more than once, or
multiple factories, or have complex relationships between factories that Laravel cannot magically handle.

This is when you create a seeder, which calls factories as described in the file, and runs whatever logic described.

## Creating a Seeder

Use command `php artisan make:seeder SomeSeeder` you will see a new file made un database\seeders\SomeSeeder.php

## Running a seeder

If you wish to run a specific seeder, you can use this command `php artisan db:seed --class=SomeSeeder`

if you wish to run all the seeders, you would do so with this command `php artian db:seed`

if you wish to wipe your db and run seeders, you may use this command `php artisan migrate:fresh --seed`, or for a specific
seeder, add the `--seeder=SomeSeeder` flag. 


## How to create a Migration file based on a DB Table

To generate a migration use the following command `php artisan migrate:generate --connection="db_name_in_config_file" --tables="CaseSensitiveTableName`
You can verify the db_name_in_config value from the /config/database.php file, and use the key value to the connection.

This will place the model in the /database/migrations folder. Please move it to the proper subfolder for organizational purposes.

Verify that the migration file accurately describes the table. There may need to be some adjustments, such as string of 
length over 4000 characters to be converted to longtext.

## How to create an email

The first step in creating a mailable with Laravel is to use the command `php artisan make:mail SomeName`. This will
create a mailable under \app\Mail according to the SomeName you gave the command. In that newly created file you will
see three key functions, Envelope, Content and Attachments.

### Envelope section

In the envelope section we define the `from, replyTo, subject`. If no `from` is defined it will use the global default set in the config

### Content section

In this section we create the view. Usually this links to a blade template file found in the \resources\views\emails folder

Data is passed to the view in two ways, via construct or using the `with : [ 'orderName' => $this->order->name ]` and
can then be accessed in the blade template using {{ $orderName }}

### Attachments section

In this section we pass in the attachments. Typically in the form of `Attachement::fromPath('/path/to/file')` You can chain 
other qualifiers such as `->as('name.pdf')` and `->withMime('application/pdf')` if needed. More details can be found here:
https://laravel.com/docs/11.x/mail#attachments

## How to setup XDebug

### Using local apache
 
Detailed instructions to come

### Using php in terminal for unit tests

If your php in terminal has xdebug installed, it be fairly straight forward when using `php artisan exampleCommand` to 
use xdebug.

First, ensure that your phpstorm terminal/cli interpreter has Xdebug by going to PHPStorm's settings -> PHP -> ... beside 
the chosen CLI interpreter. On the menu that opens, on the right hand side of where it shows the version of PHP it is using,
you should see Debugger: Xdebug 3.X.X

If you see that, you should be able to put a breakpoint wherever you want in code.

In PHPStorm when you have your test file open, you will see on the left hand margin a play/debug dropdown. If you choose
Debug, it will run the unit test and enter step-through debugger at your breakpoints.

### Using Docker Nginx

Detailed instructions to come

## Laravel Telescope

Telescope is a monitoring tool that can be accessed `local-laravel-url/telescope`. It offers a nice UI to monitor your application.

## Swagger

With the composer package dedoc/scramble, Swagger is largely auto-written for us, so long as we define resources being returned.

You can visit the local url http://localhost/docs/api#/ to see your swagger doc.

For more information, please visit https://scramble.dedoc.co/

-------------

## Laravel's Readme links

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and 
creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application 
frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of 
topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.