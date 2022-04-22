<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Form\CommentaireType;
use App\Repository\ArticleRepository;
use App\Repository\CommentaireRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommentaireController extends AbstractController
{
    /**
     * @Route("/commentaire", name="app_commentaire")
     */
    public function index(): Response
    {
        return $this->render('commentaire/index.html.twig', [
            'controller_name' => 'CommentaireController',
        ]);
    }

    /**
     * @Route("/deleteCommentAdmin/{id}",name="deleteCommentAdmin")
     */
    public function deleteCommentAdmin($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $commentaire=$this->getDoctrine()->getRepository(Commentaire::class)
            ->find($id);
        $idarticle=0;
        if($commentaire!=null){
            $idarticle=$commentaire->getIdArticle()->getIdarticle();
            $entityManager->remove($commentaire);
            $entityManager->flush();
        }

        return $this->redirectToRoute("articledetail",array('id'=>$idarticle));
    }


    /**
     * @Route("/deleteComment/{id}",name="deleteComment")
     */
    public function deleteComment($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $commentaire=$this->getDoctrine()->getRepository(Commentaire::class)
            ->find($id);
        $idarticle=0;
        if($commentaire!=null){
            $idarticle=$commentaire->getIdArticle()->getIdarticle();
            $entityManager->remove($commentaire);
            $entityManager->flush();
        }

        return $this->redirectToRoute("articledetail",array('id'=>$idarticle));
    }
    /**
     * @Route("/updateComment/{id}", name="updateComment")
     */
    public function updateComment(Request $request,CommentaireRepository $repository,$id)
    {
        $comment= $repository->find($id);
        $form= $this->createForm(CommentaireType::class,$comment);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("articledetail",array('id'=>$comment->getIdArticle()->getIdarticle()));
        }
        return $this->render("commentaire/index.html.twig",array("form"=>$form->createView()));
    }

    /**
     * @Route("/triComments", name="triComments")
     */
    public function triComment(CommentaireRepository $repository,Request $request,ArticleRepository $articleRepository){
        $article=$articleRepository->findOneBy(array('idarticle'=>$request->get('idarticle')));
        if($request->get('type')==1){
            $comments= $repository->triRecentesArticle($article);
        }
        else{
            $comments= $repository->triAnciensArticle($article);
        }

        $serializedEntity = $this->container->get('serializer')->serialize($comments, 'json');

        return new Response($serializedEntity);
    }



}
