<?php

namespace Fake\TemplateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
/*
 *      return username
 *      $name = $this->get('security.context')->getToken()->getUser();
 *      
 *      return obj User
 *      $name = $this->getUser();
 * 
 *      var_dump($name);
 */
        $name = '';
        return $this->render('FakeTemplateBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function templateAction()
    {
        $mobileDetector = $this->get('mobile_detect.mobile_detector');
        if ( $mobileDetector->isMobileView() )
        {
            $device = true;
        }
        else
        {
            $device = false;
        }
        $data = array(
            1 => array('href' => '#',
                'imgPath' => 'img/placeholder.jpg',
                'appName' => 'thumbnail'
            ),
            2 => array('href' => '#',
                'imgPath' => 'img/placeholder.jpg',
                'appName' => 'thumbnail'
            ),
            3 => array('href' => '#',
                'imgPath' => 'img/placeholder.jpg',
                'appName' => 'thumbnail'
            ),
            4 => array('href' => '#',
                'imgPath' => 'img/placeholder.jpg',
                'appName' => 'thumbnail'
            ),
            5 => array('href' => '#',
                'imgPath' => 'img/placeholder.jpg',
                'appName' => 'thumbnail'
            ),
            6 => array('href' => '#',
                'imgPath' => 'img/placeholder.jpg',
                'appName' => 'thumbnail'
            ),
        );
        
        return $this->render('FakeTemplateBundle:Default:template.html.twig', 
                array('device' => $device,
                    'data' => $data));
    }
    
    
//    public function indexAction($name)
//    {
//        return $this->render('FakeTemplateBundle:Default:index.html.twig', array('name' => $name));
//    }
}
