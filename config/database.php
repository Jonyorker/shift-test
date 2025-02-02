<?php

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    'default' => env('DB_CONNECTION', 'monitoring'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [

        'bisonweb' => [
            'driver' => 'sqlsrv',
            'url' => env('BISONWEB_DB_URL'),
            'host' => env('BISONWEB_DB_HOST'),
            'port' => env('BISONWEB_DB_PORT'),
            'database' => env('BISONWEB_DB_DATABASE'),
            'username' => env('BISONWEB_DB_USERNAME'),
            'password' => env('BISONWEB_DB_PASSWORD'),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'encrypt' => env('DB_ENCRYPT', 'no'),
            'trust_server_certificate' => env('DB_TRUST_SERVER_CERTIFICATE', 'false'),
        ],

        'bison' => [
            'driver' => 'sqlsrv',
            'url' => env('BISON_DB_URL'),
            'host' => env('BISON_DB_HOST'),
            'port' => env('BISON_DB_PORT'),
            'database' => env('BISON_DB_DATABASE'),
            'username' => env('BISON_DB_USERNAME'),
            'password' => env('BISON_DB_PASSWORD'),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'encrypt' => env('DB_ENCRYPT', 'no'),
            'trust_server_certificate' => env('DB_TRUST_SERVER_CERTIFICATE', 'false'),
        ],

        'psbison' => [
            'driver' => 'sqlsrv',
            'url' => env('PSBISON_DB_URL'),
            'host' => env('PSBISON_DB_HOST'),
            'port' => env('PSBISON_DB_PORT'),
            'database' => env('PSBISON_DB_DATABASE'),
            'username' => env('PSBISON_DB_USERNAME'),
            'password' => env('PSBISON_DB_PASSWORD'),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'encrypt' => env('DB_ENCRYPT', 'no'),
            'trust_server_certificate' => env('DB_TRUST_SERVER_CERTIFICATE', 'false'),
        ],

        'driverservice' => [
            'driver' => 'sqlsrv',
            'url' => env('DRIVERSERVICE_DB_URL'),
            'host' => env('DRIVERSERVICE_DB_HOST'),
            'port' => env('DRIVERSERVICE_DB_PORT'),
            'database' => env('DRIVERSERVICE_DB_DATABASE'),
            'username' => env('DRIVERSERVICE_DB_USERNAME'),
            'password' => env('DRIVERSERVICE_DB_PASSWORD'),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'encrypt' => env('DB_ENCRYPT', 'no'),
            'trust_server_certificate' => env('DB_TRUST_SERVER_CERTIFICATE', 'false'),
        ],

        'sqlimage' => [
            'driver' => 'sqlsrv',
            'url' => env('SQLIMAGE_DB_URL'),
            'host' => env('SQLIMAGE_DB_HOST'),
            'port' => env('SQLIMAGE_DB_PORT'),
            'database' => env('SQLIMAGE_DB_DATABASE'),
            'username' => env('SQLIMAGE_DB_USERNAME'),
            'password' => env('SQLIMAGE_DB_PASSWORD'),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'encrypt' => env('DB_ENCRYPT', 'no'),
            'trust_server_certificate' => env('DB_TRUST_SERVER_CERTIFICATE', 'false'),
        ],

        'sqlimg' => [
            'driver' => 'sqlsrv',
            'url' => env('SQLIMG_DB_URL'),
            'host' => env('SQLIMG_DB_HOST'),
            'port' => env('SQLIMG_DB_PORT'),
            'database' => env('SQLIMG_DB_DATABASE'),
            'username' => env('SQLIMG_DB_USERNAME'),
            'password' => env('SQLIMG_DB_PASSWORD'),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'encrypt' => env('DB_ENCRYPT', 'no'),
            'trust_server_certificate' => env('DB_TRUST_SERVER_CERTIFICATE', 'false'),
        ],

        'bisongp' => [
            'driver' => 'sqlsrv',
            'url' => env('DYNAMICSGP_DB_URL'),
            'host' => env('DYNAMICSGP_DB_HOST'),
            'port' => env('DYNAMICSGP_DB_PORT'),
            'database' => env('DYNAMICSGP_DB_DATABASE'),
            'username' => env('DYNAMICSGP_DB_USERNAME'),
            'password' => env('DYNAMICSGP_DB_PASSWORD'),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'encrypt' => env('DB_ENCRYPT', 'no'),
            'trust_server_certificate' => env('DB_TRUST_SERVER_CERTIFICATE', 'false'),
        ],

        'analytics' => [
            'driver' => 'sqlsrv',
            'url' => env('ANAYLYTICS2012_DB_URL'),
            'host' => env('ANAYLYTICS2012_DB_HOST'),
            'port' => env('ANAYLYTICS2012_DB_PORT'),
            'database' => env('ANAYLYTICS2012_DB_DATABASE'),
            'username' => env('ANAYLYTICS2012_DB_USERNAME'),
            'password' => env('ANAYLYTICS2012_DB_PASSWORD'),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'encrypt' => env('DB_ENCRYPT', 'no'),
            'trust_server_certificate' => env('DB_TRUST_SERVER_CERTIFICATE', 'false'),
        ],

        'tmt' => [
            'driver' => 'sqlsrv',
            'url' => env('TMT_DB_URL'),
            'host' => env('TMT_DB_HOST'),
            'port' => env('TMT_DB_PORT'),
            'database' => env('TMT_DB_DATABASE'),
            'username' => env('TMT_DB_USERNAME'),
            'password' => env('TMT_DB_PASSWORD'),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'encrypt' => env('DB_ENCRYPT', 'no'),
            'trust_server_certificate' => env('DB_TRUST_SERVER_CERTIFICATE', 'false'),
        ],

        'dataanalytics' => [
            'driver' => 'sqlsrv',
            'url' => env('ANALYTICSSQL_DB_URL'),
            'host' => env('ANALYTICSSQL_DB_HOST'),
            'port' => env('ANALYTICSSQL_DB_PORT'),
            'database' => env('ANALYTICSSQL_DB_DATABASE'),
            'username' => env('ANALYTICSSQL_DB_USERNAME'),
            'password' => env('ANALYTICSSQL_DB_PASSWORD'),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'encrypt' => env('DB_ENCRYPT', 'no'),
            'trust_server_certificate' => env('DB_TRUST_SERVER_CERTIFICATE', 'false'),
        ],

        'sqlweb' => [
            'driver' => 'sqlsrv',
            'url' => env('SQLWEB_DB_URL'),
            'host' => env('SQLWEB_DB_HOST'),
            'port' => env('SQLWEB_DB_PORT'),
            'database' => env('SQLWEB_DB_DATABASE'),
            'username' => env('SQLWEB_DB_USERNAME'),
            'password' => env('SQLWEB_DB_PASSWORD'),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'encrypt' => env('DB_ENCRYPT', 'no'),
            'trust_server_certificate' => env('DB_TRUST_SERVER_CERTIFICATE', 'false'),
        ],

        'tranzactor' => [
            'driver' => 'sqlsrv',
            'url' => env('TRANZTEC_DB_URL'),
            'host' => env('TRANZTEC_DB_HOST'),
            'port' => env('TRANZTEC_DB_PORT'),
            'database' => env('TRANZTEC_DB_DATABASE'),
            'username' => env('TRANZTEC_DB_USERNAME'),
            'password' => env('TRANZTEC_DB_PASSWORD'),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'encrypt' => env('DB_ENCRYPT', 'no'),
            'trust_server_certificate' => env('DB_TRUST_SERVER_CERTIFICATE', 'false'),
        ],

        'monitoring' => [
            'driver' => 'pgsql',
            'url' => env('DATABASE_URL'),
            'host' => env('MONITORING_DB_HOST'),
            'port' => env('MONITORING_DB_PORT'),
            'database' => env('MONITORING_DB_DATABASE'),
            'username' => env('MONITORING_DB_USERNAME'),
            'password' => env('MONITORING_DB_PASSWORD'),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'search_path' => 'public',
            'sslmode' => 'prefer',
        ],

        'monitoring-telescope-docker' => [
            'driver' => 'pgsql',
            'url' => env('DATABASE_URL'),
            'host' => env('DOCKER_TELESCOPE_DB_HOST'),
            'port' => env('MONITORING_DB_PORT'),
            'database' => env('MONITORING_DB_DATABASE'),
            'username' => env('MONITORING_DB_USERNAME'),
            'password' => env('MONITORING_DB_PASSWORD'),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'search_path' => 'public',
            'sslmode' => 'prefer',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer body of commands than a typical key-value system
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis' => [

        'client' => env('REDIS_CLIENT', 'phpredis'),

        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            'prefix' => env('REDIS_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_') . '_database_'),
        ],

        'default' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_DB', '0'),
        ],

        'cache' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_CACHE_DB', '1'),
        ],

    ],

    'dbal' => [
        'types' => [
            'timestamp' => TimestampType::class,
            'xml' => '\Doctrine\DBAL\Types\StringType',
            'geography' => '\Doctrine\DBAL\Types\StringType',
        ],
    ],
];
