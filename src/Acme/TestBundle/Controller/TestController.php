<?php
// src/Acme/TestBundle/Controller/TestController.php

namespace Acme\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

class TestController extends Controller
{
    public function indexAction()
    {
        throw new HttpException(418,
        	"This message is displayed only in dev mod.");
	}
	
    public function updateAction()
    {
    	die('here');
    }
}


