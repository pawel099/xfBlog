<?php

namespace aplicationBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class mojaGaleriaControllerTest extends WebTestCase
{
    public function testGallery()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'gallery{id}');
    }

}
