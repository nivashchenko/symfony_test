<?php

namespace Fake\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $name = '';
        return $this->render('FakeAdminBundle:Default:admin.html.twig');
    }
}
