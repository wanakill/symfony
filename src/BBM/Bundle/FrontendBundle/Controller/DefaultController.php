<?php

namespace BBM\Bundle\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BBMFrontendBundle:Default:index.html.twig', array('name' => $name));
    }
}
