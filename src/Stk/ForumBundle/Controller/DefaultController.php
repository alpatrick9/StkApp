<?php

namespace Stk\ForumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * Class DefaultController
 * @package Stk\ForumBundle\Controller
 * @Route("/forum")
 */
class DefaultController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/home/", name="forum_home")
     */
    public function indexAction()
    {
        return $this->render('StkForumBundle:Default:index.html.twig');
    }
}
