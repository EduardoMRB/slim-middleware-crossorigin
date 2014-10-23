# Slim Cross Origin

## Description
--------------

Slim middleware to allow cross domain requests


## How to use it

> Just add it to your Slim app instance

```php
<?php
use Slim\Middleware\CrossOrigin\CrossOriginMiddleware;

$app = new Slim\Slim();
$app->add(new CrossOriginMiddleware());

// ...
$app->run();
```
