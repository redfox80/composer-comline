# PHP-Autoloader-simple

Include with composer default autoloader like this:

If php files are in root folder add
```php
include(__DIR__ . '/vendor/autoload.php');
```

Else
```php
include($PATH);
```
Where $PATH is the full or rellative path to autoload.php in the vendor folder

Add This after autoload.php
```php
use redfox80\Autoloader\Autoloader;
new Autoloader();
```

That's it, the rest is magic.

It will automatically include files in the same folder as origin file when a class is used.

It does support namespaces.

There will be an autoloader with multi folder level support, but that is somewhere in the future.