<?php
// src/Acme/BlogBundle/Controller/BlogController.php

namespace Acme\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
    public function showAction($lang, $slug)
    { # route acme_blog_show

        // ** traitement sur la variable $slug i.e base de donnée
        switch($lang)
        {
            case 'en':
                $msg = 'You are on the '.$slug.' entry of this blog :)';
                break;
            case 'fr':
                $msg = 'Vous êtes sur l\'entrée '.$slug.' du blog :)';
                break;
            default:
                $msg = 'You are on the '.$slug.' entry of this blog :)';
                break;
        }

        // ** prochaine langue a séléectionner
        $newlang = 'en';
        if($lang == 'en')
            $newlang = 'fr';
        if($lang == 'fr')
            $newlang = 'en';

        // ** analyse de l'environnement pour déterminer le contrôleur à utiliser.
        // $env = $this->get('kernel')->getEnvironment();
        // if($env == 'prod')
        //     $ctrl = 'app.php';
        // if($env == 'dev')
        //     $ctrl = 'app_dev.php';
        // if($env == 'test')
        //     $ctrl = 'app_test.php';


        return $this->render('AcmeBlogBundle:Blog:show.html.twig',
                        array(  'slug' => $slug,
                                'lang' => $newlang,
                                'msg' => $msg,
                                //'ctrl' => $ctrl,
                    ));
	}
    
    public function showRedirectAction($slug)
    { # route acme_blog_showRedirect

        // ** Redirige sur le bon contrôleur 
        // $response = $this->forward('AcmeBlogBundle:Blog:show', 
        //                 array(  'lang' => 'en',
        //                         'slug' => $slug,
        //             ));

        // ** Redirige sur la bonne page
        $response = $this->redirect($this->generateUrl('acme_blog_show',
                            array(  'lang' => 'en',
                                    'slug' => $slug,
                        )));

        return $response;
    }
    
    public function pageAction($lang, $page)
    { # route acme_pageRedirect_showRedirect

        // ** traitement sur la variable $page i.e base de donnée
        switch($lang)
        {
            case 'en':
                $msg = 'You are on the page number '.$page.' of this blog :)';
                break;
            case 'fr':
                $msg = 'Vous êtes sur la page '.$page.' du blog :)';
                break;
            default:
                $msg = 'You are on the page number '.$page.' of this blog :)';
                break;
        }

        // ** prochaine langue a séléectionner
        $newlang = 'en';
        if($lang == 'en')
            $newlang = 'fr';
        if($lang == 'fr')
            $newlang = 'en';


        return $this->render('AcmeBlogBundle:Blog:page.html.twig',
                        array(  'page' => $page,
                                'lang' => $newlang,
                                'msg' => $msg,
                    ));
    }
    
    public function pageRedirectAction($page)
    { # route acme_page_showRedirect

        // ** Redirige sur la bonne page
        $response = $this->redirect($this->generateUrl('acme_blog_page',
                            array(  'lang' => 'en',
                                    'page' => $page,
                        )));

        return $response;
    }
}


