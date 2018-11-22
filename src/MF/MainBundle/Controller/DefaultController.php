<?php

namespace MF\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MFMainBundle:Default:index.html.twig');
    }

    public function helloworldAction()
    {
        return $this->render('MFMainBundle:Default:helloworld.html.twig');
    }

    public function contactAction()
    {
        return $this->render('MFMainBundle:Default:contact.html.twig');
    }
}
