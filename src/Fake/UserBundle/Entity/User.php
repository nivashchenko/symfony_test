<?php

// src/Fake/FakeBundle/Entity/User.php

namespace Fake\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * @ORM\Entity
 * @ORM\Table(name="FakeUsers")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

//    /**
//     * @ORM\Column(type="string", length=100)
//     */
//    protected $firstName;
//
//    /**
//     * @ORM\Column(type="string", length=100)
//     */
//    protected $lastName;
//    
//    /**
//     * @ORM\Column(type="integer")
//     */
//    protected $status_id;
    
    

    
    public function __construct()
    {
        parent::__construct();
        
        $kernel = $GLOBALS['kernel'];
        $em = $kernel->getContainer();
        
        if ( $salt = $em->getParameter('secret') ) 
        {
            $this->salt = $salt;
        }
        $this->roles = array('ROLE_USER','ROLE_USER_ADMIN');
    }
    
//    private function getConfig($param)
//    {
//        $kernel = $GLOBALS['kernel'];
//        $em = $kernel->getContainer();
//        if ( $result = $this->container->parameters[$param] )
//        {
//            return $result;
//        }
//        else
//        {
//            return false;
//        }
//    }
}