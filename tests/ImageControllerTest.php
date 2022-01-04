<?php

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ImagesControllerTest extends WebTestCase{

    public function testindex(){

        $client = static::createClient();
        $client -> request('GET', '/images');
        // $this -> assertResponseStatusCodeSame(200);
        $this -> assertSelectorTextContains('p', 'photo-');
    }
}



?>