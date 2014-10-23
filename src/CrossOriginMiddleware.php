<?php
namespace Slim\Middleware\CrossOrigin;

use Slim\Middleware;

class CrossOriginMiddleware extends Middleware
{
    public function call()  
    {
        $this->getApplication()
            ->response
            ->headers
            ->set('Access-Control-Allow-Origin', '*');

        $this->next->call();
    }
}
