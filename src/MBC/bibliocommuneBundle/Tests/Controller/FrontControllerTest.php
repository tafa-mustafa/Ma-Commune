<?php

namespace MBC\bibliocommuneBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FrontControllerTest extends WebTestCase
{
    public function testHomes()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/homes');
    }

}
