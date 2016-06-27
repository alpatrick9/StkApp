<?php

namespace Stk\ArchiveBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * Class DefaultController
 * @package Stk\ArchiveBundle\Controller
 * @Route("/archive")
 */
class DefaultController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/home", name="archive_home")
     */
    public function indexAction()
    {
        return $this->render('StkArchiveBundle:Default:index.html.twig');
    }
}
