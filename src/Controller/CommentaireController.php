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




}
