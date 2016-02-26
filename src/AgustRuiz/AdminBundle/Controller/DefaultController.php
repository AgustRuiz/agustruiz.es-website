<?php

namespace AgustRuiz\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AgustRuizAdminBundle:Default:index.html.twig');
    }
}
