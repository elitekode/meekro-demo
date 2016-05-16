### PHP SQL INJECTION PREVENTION

##MIKro DB


https://github.com/SergeyTsalkov/meekrodb

https://github.com/SergeyTsalkov/meekrodb/blob/master/README.md

1. Makes files public only if you want people to go in through your "door"

2. add this to the .php index file
require_once 'meekrodb.2.3.class.php';
DB::$user = 'foofoo';
DB::$password = 'foofoo';
DB::$dbName = 'phpsandbox';
DB::$host = '127.0.0.1';

project photos in images container
