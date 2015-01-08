<?php
// src/Acme/HelloBundle/Controller/HelloController.php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller
{
    public function indexAction($foo, $bar)
    {
        return $this->render('AcmeHelloBundle:Hello:index.html.twig', array('foo' => $foo, 'bar' => $bar));

        // render a PHP template instead
        // return $this->render('AcmeHelloBundle:Hello:index.html.php', array('name' => $name));
    }
}
