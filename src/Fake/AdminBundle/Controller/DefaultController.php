<?php

namespace Fake\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return 'test';
    }
    public function helloAction($name)
    {
        return $this->render('FakeAdminBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function testAction() 
    { 
        return 'test';
    }
}
