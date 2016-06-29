<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 6/29/16
 * Time: 4:14 PM
 */

namespace Stk\ArchiveBundle\Controller;


use Stk\ArchiveBundle\Entity\Video;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * Class VideoController
 * @package Stk\ArchiveBundle\Controller
 * @Route("/video")
 */
class VideoController extends Controller
{
    /**
     * @param Video $video
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/show/{id}", name="show_video")
     */
    public function showAction(Video $video) {
        return $this->render('StkArchiveBundle:Video:show.html.twig', [
            'video'=> $video
        ]);
    }
}