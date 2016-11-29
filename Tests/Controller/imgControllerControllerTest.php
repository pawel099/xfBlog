<?php

namespace aplicationBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class imgControllerControllerTest extends WebTestCase
{
    public function testImages()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'images{id}');
    }

}
