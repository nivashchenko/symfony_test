<?php

namespace Fake\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FakeUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
