<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\LivreurRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Livreur;
use App\Form\LivreurType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints as Assert;

class LivreurController extends AbstractController
{
    /**
     * @Route("/livreur", name="app_livreur")
     */
    public function index(): Response
    {
        return $this->render('livreur/listlivreur.html.twig', [
            'controller_name' => 'LivreurController',
        ]);
    }

    /**
     * @Route("/listLivreur", name="Livreurs")
     */
    public function listLivreur(LivreurRepository $repository){
        $livreurs= $repository->findAll();
        return $this->render("livreur/listlivreur.html.twig",
            array('livreurs'=>$livreurs));
    }

    /**
     * @Route("/removeLivreur/{id}",name="deleteLivreur")
     */
    public function deleteLivreur($id)
    {
        $livreur= $this->getDoctrine()->getRepository(Livreur::class)->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($livreur);
        $em->flush();
        return $this->redirectToRoute("Livreurs");
    }

    /**
     * @Route("/addLivreur",name="addLivreur")
     */
    public function addLivreur( Request $request)
    {
        $livreur= new Livreur();
        $form= $this->createForm(LivreurType::class,$livreur);
        $form->handleRequest($request);
        if($form->isSubmitted()  && $form->isValid() ){
            $em = $this->getDoctrine()->getManager();
            $em->persist($livreur);
            $em->flush();
            return $this->redirectToRoute("Livreurs");
        }
        return $this->render("livreur/addlivreur.html.twig",array("livreurform"=>$form->createView()));
    }

    /**
     * @Route("/updateLivreur/{id}", name="updateLivreur")
     */
    public function updateLivreur( Request $request,LivreurRepository $repository,$id)
    {
        $livreur= $repository->find($id);
        $form= $this->createForm(LivreurType::class,$livreur);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid() ){
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("Livreurs");
        }
        return $this->render("livreur/updatelivreur.html.twig",array("livreur"=>$livreur,"form"=>$form->createView()));
    }

}
