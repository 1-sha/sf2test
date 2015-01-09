<?php
// src/Acme/BlogBundle/Controller/BlogController.php

namespace Acme\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
    public function showAction($slug)
    { # route acme_blog_show

        // traitement sur la variable $slug i.e base de donnée
        $slug = 'Vous êtes sur l\'entrée '.$slug.' du blog :)';


        return $this->render('AcmeBlogBundle:Blog:show.html.twig',
                        array(  'slug' => $slug,
                    ));
	}
    
    public function showRedirectAction($slug)
    { # route acme_blog_showRedirect
        
    }
    
    public function pageAction()
    { # route acme_pageRedirect_showRedirect
        
    }
    
    public function pageRedirectAction()
    { # route acme_page_showRedirect
        
    }
}


