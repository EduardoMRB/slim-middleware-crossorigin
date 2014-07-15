<?php
namespace Trinix\BoletoFacil\Tests\Middleware;

use Slim\Slim;
use Trinix\BoletoFacil\Middleware\CrossOriginMiddleware;

class FakeApp extends Slim
{
    public function call()
    {
        return null;
    }
}

class CrossOriginMiddlewareTest extends \PHPUnit_Framework_TestCase
{
    public function testMwSetsAccessControlAllowOriginHeader()
    {
        $app = new FakeApp;
        $mw = new CrossOriginMiddleware;
        $mw->setApplication($app);
        $mw->setNextMiddleware($app);
        $mw->call();

        list($status, $header, $body) = $app->response()->finalize();

        $this->assertTrue($app->response->headers->has('Access-Control-Allow-Origin'));
        $this->assertEquals('*', $app->response->headers->get('Access-Control-Allow-Origin'));
    }
}
