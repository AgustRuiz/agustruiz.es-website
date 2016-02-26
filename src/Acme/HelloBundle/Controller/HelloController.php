<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller
{
    public function indexAction($name)
    {
        //return new Response('<html><body><h1>Hello '.$name.'</h1></body></html>');
        return $this->render(
            'AcmeHelloBundle:Default:index.html.twig',
            array('name' => $name)
        );
    }
}
