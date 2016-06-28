<?php

namespace Stk\ForumBundle\Controller;

use AppBundle\Model\NotificationCheck;
use Stk\ForumBundle\Entity\Subject;
use Stk\ForumBundle\Form\SubjectType;
use Stk\ForumBundle\Repository\SubjectRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class DefaultController
 * @package Stk\ForumBundle\Controller
 * @Route("/forum")
 */
class DefaultController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/home/{page}", name="forum_home", defaults={"page" = 1})
     */
    public function indexAction($page)
    {
        $nbParPage = 30;
        /**
         * @var $repository SubjectRepository
         */
        $repository = $this->getDoctrine()->getManager()
            ->getRepository('StkForumBundle:Subject');
        /**
         * @var $subjects Subject[]
         */
        $subjects = $repository->getSubjects($nbParPage,$page);

        return $this->render('StkForumBundle:Default:index.html.twig', [
            'subjects'=>$subjects,
            'page'=> $page,
            'nbPage' => ceil(count($subjects)/$nbParPage)
        ]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @Route("/create-subject/", name="create_subject")
     */
    public function createSubjectAction(Request $request) {
        $subject = new Subject();
        $form = $this->createForm(SubjectType::class, $subject);

        if($request->getMethod() == 'POST') {
            $form->handleRequest($request);
            $em = $this->getDoctrine()->getManager();
            $em->persist($subject);
            $em->flush();
            return $this->redirect($this->generateUrl('forum_home'));
        }
        return $this->render('StkForumBundle:Default:subject-formulaire.html.twig',[
            'form'=>$form->createView()
        ]);
    }

    /**
     * @param Request $request
     * @param Subject $subject
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route("/edit/{id}", name="edit_subject")
     */
    public function editSubjectAction(Request $request, Subject $subject) {
        $form = $this->createForm(SubjectType::class, $subject);

        if($request->getMethod() == 'POST') {
            $form->handleRequest($request);
            $this->getDoctrine()->getManager()->flush();
            return $this->redirect($this->generateUrl('forum_home'));
        }
        return $this->render('StkForumBundle:Default:subject-formulaire.html.twig',[
            'form'=>$form->createView()
        ]);
    }

    /**
     * @param Request $request
     * @param Subject $subject
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route("/remove/{id}", name="remove_subject")
     */
    public function removeSubjectAction(Request $request, Subject $subject) {
        $em = $this->getDoctrine()->getManager();
        $em->remove($subject);
        $em->flush();
        return $this->redirect($this->generateUrl('forum_home'));
    }

    /**
     * @param Request $request
     * @return JsonResponse|Response
     * @Route("/notification-check", name="subject_notification_check")
     */
    public function checkSubject(Request $request) {
        if($request->isXmlHttpRequest()) {
            $status = new NotificationCheck();
            $oldSize = $request->get('size');
            $newSize = $this->getDoctrine()->getManager()->getRepository('StkForumBundle:Subject')->count();
            if($newSize > 0 && $oldSize != $newSize) {
                $status->status = true;
            }
            return new JsonResponse(json_encode($status));
        }
        return new Response("Erreur: ce n'est pas une requête Ajax", 400);
    }
}
