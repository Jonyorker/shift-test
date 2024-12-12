# What is a unit test?

A unit test, tests the internal logic of your application. Anything that isn't testing an endpoint or consumer, goes here.

# Create A Unit test

in terminal use command `php artisan make:test TestName --unit`

Remember, the file name must end with Test.php

# Structure

The folder structure should mirror the source code. Files should be named the same as the file they are testing with Test.php as the end.

### For Example:

```
src file: \app\Console\Commands\BulkMigrate.php
test file: \tests\Unit\app\Console\Commands\BulkMigrateTest.php
```


