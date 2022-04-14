<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Form\CategorieType;
use App\Repository\CategorieRepository;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends AbstractController
{
    /**
     * @Route("/categorie", name="app_categorie")
     */
    public function index(): Response
    {
        return $this->render('categorie/index.html.twig', [
            'controller_name' => 'CategorieController',
        ]);
    }

    /**
     * @Route("/admin/categories", name="categorieAdmin")
     */
    public function categorieAdmin(CategorieRepository $repository){
        $categories= $repository->findAll();
        return $this->render("categorie/listcategoriesAdmin.html.twig",
            array('categories'=>$categories));
    }

    /**
     * @Route("/admin/addCategorie",name="addCategorie")
     */
    public function addProduit( Request $request)
    {
        $categ= new Categorie();
        $form= $this->createForm(CategorieType::class,$categ);
        $form->add('Ajouter',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($categ);
            $em->flush();
            return $this->redirectToRoute("categorieAdmin");
        }
        return $this->render("categorie/addCategorie.html.twig",array("categform"=>$form->createView()));
    }

    /**
     * @Route("/admin/updateCategorie/{id}", name="updateCategorie")
     */
    public function updateCategorie(Request $request,CategorieRepository $categorieRepository,$id)
    {
        $categ= $categorieRepository->find($id);
        $form= $this->createForm(CategorieType::class,$categ);
        $form->add('Modifier',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){

            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("categorieAdmin");
        }

        return $this->render("categorie/updateCategorie.html.twig",array("categ"=>$categ,"categform"=>$form->createView()));
    }

    /**
     * @Route("/deleteCategorie/{id}",name="deleteCategorie")
     */
    public function deleteCategorie($id,ProduitRepository $produitRepository)
    {
        $categ= $this->getDoctrine()->getRepository(Categorie::class)->find($id);
        $produits=$produitRepository->findBy(array('idCateg'=>$categ));
        $em=$this->getDoctrine()->getManager();
        foreach ($produits as $produit) {
            $em->remove($produit);
            $em->flush();
        }

        $em->remove($categ);
        $em->flush();
        return $this->redirectToRoute("categorieAdmin");
    }

    /**
     * @Route("/categories", name="categories")
     */
    public function categories(CategorieRepository $repository){
        $categories= $repository->findAll();
        return $this->render("categorie/listcategories.html.twig",
            array('categories'=>$categories));
    }

}
