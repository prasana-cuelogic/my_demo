<?php

namespace Cue\ComBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PagesControllerTest extends WebTestCase
{
    public function testAboutus()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/about_us');
    }

    public function testContactus()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/contact_us');
    }

    public function testHome()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/html');
    }

}
