<?php

namespace Fake\TemplateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $name = $this->get('security.context')->getToken()->getUser();
        return $this->render('FakeTemplateBundle:Default:index.html.twig', array('name' => $name));
    }
    
//    public function indexAction($name)
//    {
//        return $this->render('FakeTemplateBundle:Default:index.html.twig', array('name' => $name));
//    }
}
