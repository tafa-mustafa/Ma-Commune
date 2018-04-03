<?php

namespace MBC\bibliocommuneBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AdminControllerTest extends WebTestCase
{
    public function testAccueil()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/accueil');
    }

    public function testAdmins()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admins');
    }

}
