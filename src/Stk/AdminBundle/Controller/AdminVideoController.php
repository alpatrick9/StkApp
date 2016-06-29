<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 6/29/16
 * Time: 3:20 PM
 */

namespace Stk\AdminBundle\Controller;


use Stk\ArchiveBundle\Entity\Video;
use Stk\ArchiveBundle\Form\VideoType;
use Stk\ArchiveBundle\Repository\VideoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class AdminVideoController
 * @package Stk\AdminBundle\Controller
 * @Route("/admin/video")
 */
class AdminVideoController extends Controller
{

    /**
     * @param $page
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/list/{page}", name="admin_list_videos", defaults={"page" = 1})
     */
    public function listVideosAction($page) {
        $nbParPage = 30;
        /**
         * @var $repository VideoRepository
         */
        $repository = $this->getDoctrine()->getManager()
            ->getRepository('StkArchiveBundle:Video');
        /**
         * @var $videos Video[]
         */
        $videos = $repository->getVideos($nbParPage,$page);

        return $this->render('StkAdminBundle:AdminVideo:list-video.html.twig', [
            'videos'=>$videos,
            'page'=> $page,
            'nbPage' => ceil(count($videos)/$nbParPage)
        ]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/add/", name="add_video")
     */
    public function addVideoAction(Request $request) {
        $video = new Video();
        $form = $this->createForm(VideoType::class, $video);
        if($request->getMethod() == 'POST') {
            $form->handleRequest($request);
            $em = $this->getDoctrine()->getManager();
            $em->persist($video);
            $em->flush();
            return $this->redirect($this->generateUrl('admin_list_videos'));
        }
        return $this->render('StkAdminBundle:AdminVideo:video-form.html.twig',[
            'form'=>$form->createView()
        ]);
    }
}