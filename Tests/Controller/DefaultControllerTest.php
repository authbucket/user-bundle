<?php

namespace Pantarei\Bundle\UserBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $parameters = array();
        $server = array(
            'PHP_AUTH_USER' => 'demousername1',
            'PHP_AUTH_PW' => 'demopassword1',
        );
        $client = static::createClient();
        $crawler = $client->request('GET', '/', $parameters, array(), $server);
        $this->assertTrue($crawler->filter('html:contains("Hello World!!")')->count() > 0);
    }
}
