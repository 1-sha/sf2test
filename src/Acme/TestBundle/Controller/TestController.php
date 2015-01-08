<?php
// src/Acme/TestBundle/Controller/TestController.php

namespace Acme\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class TestController extends Controller
{
    public function indexAction()
    {
        return new Response('le jeuj a encore frappé');
	}
}


