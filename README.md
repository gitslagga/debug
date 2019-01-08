## This is a utils repo for composer

## Usage ##

```bash
$ composer require gitslagga/utils
$ touch test.php
```

```php
<?php
require_once "vendor/autoload.php";

$utils = new Jean\Library\Utils();
echo $utils->hello();
```

```bash
$ php test.php
```

It will print "Hello World!" then exit.