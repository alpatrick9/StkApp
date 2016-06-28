<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 6/28/16
 * Time: 1:34 PM
 */

namespace Stk\ForumBundle\Controller;

use AppBundle\Model\NotificationCheck;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Stk\ForumBundle\Entity\Comment;
use Stk\ForumBundle\Entity\Subject;
use Stk\ForumBundle\Form\CommentType;
use Stk\ForumBundle\Repository\CommentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class CommentController
 * @package Stk\ForumBundle\Controller
 * @Route("/comment")
 */
class CommentController extends Controller
{

    /**
     * @param $page
     * @param Subject $subject
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/show/{id}/{page}", name="show_comment", defaults={"page" = 1})
     */
    public function showCommentAction(Subject $subject,$page) {
        $nbParPage = 30;
        /**
         * @var $repository CommentRepository
         */
        $repository = $this->getDoctrine()->getManager()
            ->getRepository('StkForumBundle:Comment');
        /**
         * @var $comments Comment[]
         */
        $comments = $repository->getComments($nbParPage,$page,$subject);

        return $this->render('StkForumBundle:Comment:list-comment.html.twig', [
            'subject'=>$subject,
            'comments'=>$comments,
            'page'=> $page,
            'nbPage' => ceil(count($comments)/$nbParPage)
        ]);
    }

    /**
     * @param Request $request
     * @param Subject $subject
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @Route("/add/{id}", name="add_comment")
     */
    public function createCommentAction(Request $request, Subject $subject) {
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        
        if($request->getMethod() == 'POST') {
            $form->handleRequest($request);
            $comment->setSubject($subject);
            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();
            return $this->redirect($this->generateUrl('show_comment',['id'=>$subject->getId()]));
        }
        return $this->render('StkForumBundle:Comment:comment-form.html.twig',[
            'form'=>$form->createView(),
            'subject'=>$subject
        ]);
    }

    /**
     * @param Request $request
     * @param Comment $comment
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route("/edit/{id}", name="edit_comment")
     */
    public function editCommentAction(Request $request, Comment $comment) {
        $form = $this->createForm(CommentType::class, $comment);
        if($request->getMethod() == 'POST') {
            $form->handleRequest($request);
            $this->getDoctrine()->getManager()->flush();
            return $this->redirect($this->generateUrl('show_comment',['id'=>$comment->getSubject()->getId()]));
        }
        return $this->render('StkForumBundle:Comment:comment-form.html.twig',[
            'form'=>$form->createView(),
            'subject'=>$comment->getSubject()
        ]);
    }

    /**
     * @param Request $request
     * @param Comment $comment
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route("/remove/{id}", name="remove_comment")
     */
    public function removeCommentAction(Request $request, Comment $comment) {
        $em = $this->getDoctrine()->getManager();
        $em->remove($comment);
        $em->flush();
        return $this->redirect($this->generateUrl('show_comment',['id'=>$comment->getSubject()->getId()]));
    }

    /**
     * @param Request $request
     * @return JsonResponse|Response
     * @Route("/notification-check", name="comment_notification_check")
     */
    public function checkCommentAction(Request $request) {
        if($request->isXmlHttpRequest()) {
            $status = new NotificationCheck();

            $oldSize = $request->get('size');
            $subjectId = $request->get('subjectId');
            $newSize = $this->getDoctrine()->getManager()->getRepository('StkForumBundle:Comment')->count(
                $this->getDoctrine()->getManager()->getRepository('StkForumBundle:Subject')->find($subjectId)
            );
            if($oldSize != $newSize) {
                $status->status = true;
            }
            return new JsonResponse(json_encode($status));
        }
        return new Response("Erreur: ce n'est pas une requête Ajax", 400);
    }
}