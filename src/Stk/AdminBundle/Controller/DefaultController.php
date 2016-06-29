<?php

namespace Stk\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * Class DefaultController
 * @package Stk\AdminBundle\Controller
 * @Route("/admin")
 */
class DefaultController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/home/", name="admin_home")
     */
    public function indexAction()
    {
        return $this->render('StkAdminBundle:Default:index.html.twig');
    }
}
