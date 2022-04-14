<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProduitRepository;
use App\Entity\Produit;
use App\Form\ProduitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ProduitController extends AbstractController
{
    /**
     * @Route("/produit", name="app_produit")
     */
    public function index(): Response
    {

        return $this->render('produit/index.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }

    /**
     * @Route("/listProduit", name="Produits")
     */
    public function listProduit(ProduitRepository $repository){
        $produits= $repository->findAll();
        return $this->render("produit/listproduit.html.twig",
            array('produits'=>$produits));
    }
 
    /**
     * @Route("/removeProduit/{id}",name="deleteProduit")
     */
    public function deleteProduit($id)
    {
        $produits= $this->getDoctrine()->getRepository(Produit::class)->find($id);
         $em=$this->getDoctrine()->getManager();
         $em->remove($produits);
         $em->flush();
          return $this->redirectToRoute("Produits");
    }
    /**
     * @Route("/addProduit",name="addProduit")
     */
    public function addProduit( Request $request)
    {
        $produit= new Produit();
        $form= $this->createForm(ProduitType::class,$produit);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();
            return $this->redirectToRoute("Produits");
        }
        return $this->render("produit/addproduit.html.twig",array("produitform"=>$form->createView()));
    }
    /**
     * @Route("/updateProduit/{id}", name="updateProduit")
     */
  
}

