<?php
namespace EasyBib\Tests;

use Silex\WebTestCase;
use Symfony\Component\HttpKernel\HttpKernel;

/**
 * Class AppTest
 *
 * @see http://silex.sensiolabs.org/doc/testing.html
 */
class AppTest extends WebTestCase
{

    public function testHelloWorld()
    {
        $client = $this->createClient();
        $client->request('GET', '/hello/world');

        $this->assertTrue($client->getResponse()->isOk());
        $this->assertContains('Hello world', $client->getResponse()->getContent());

    }

    /**
     * Creates the application.
     *
     * @return HttpKernel
     */
    public function createApplication()
    {
        return require __DIR__ . '/../../bootstrap.php';
    }
}

