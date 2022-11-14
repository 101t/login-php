# PHP / SQL Assignment

1. login / logout / session control
2. product insert update delete select all and select by one

## install

You must have php7.4 and mysql on your machine to run this script proberly, this script using php PDO adaptor to connet through database.

```sh
mysql -u root -p
```
then create database
```sql
CREATE database testdb;
FLUSH PRIVILEGES;
```
then exit

import database `testdb.sql` into `testdb` database:

```sh
mysql testdb < testdb.sql
```
to run php code use commad (you need to install php-cli):
```sh
php -S 0.0.0.0:8888
```
then navigate through the browser to http://127.0.0.1:8888

## Database configuration
in file `conn.php` you may change the following variables by editiing:

```php
$host = "localhost";
$user = "root";
$password = "123456"; // you may not need password on windows
$db = "testdb";
```
to your local credentials

That's it!
