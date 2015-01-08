<?php
// src/Acme/TestBundle/Controller/TestController.php

namespace Acme\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class TestController extends Controller
{
    public function indexAction()
    {
        // return new Response('le jeuj a encore frappé');
        // $response = $this->forward('AcmeHelloBundle:Hello:index', array('foo' => 'get', 'bar' => 'rekt'));
        $response = $this->forward('AcmeTestBundle:Test:update');

    return $response;

	}
	
    public function updateAction()
    {
    	die('here');
    }
}


