<?php

namespace App\Controller;

use App\Entity\Livraison;
use App\Entity\User;
use App\Repository\LivreurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\LivraisonRepository;

class LivraisonController extends AbstractController
{
    /**
     * @Route("/livraison", name="app_livraison")
     */
    public function index(): Response
    {
        return $this->render('livraison/index.html.twig', [
            'controller_name' => 'LivraisonController',
        ]);
    }

    /**
     * @Route("/listLivraison", name="Livraisons")
     */
    public function listLLivraison(LivraisonRepository $repository){
        $livraisons= $repository->findAll();
        return $this->render("livraison/listlivraison.html.twig",
            array('livraisons'=>$livraisons));
    }
    /**
     * @Route("/affecter/{id}", name="affecter")
     */
    public function affecter($id,LivreurRepository $repository)
    {
        $livreurs= $repository->findAll();
        return $this->render("livreur/affecterlivreur.html.twig",array("idlivraison"=>$id,"livreurs"=>$livreurs));
    }

    /**
     * @Route("/choisirlivreur/{id}/{idlivreur}", name="choisirlivreur")
     */
    public function choisirlivreur($idlivreur,$id,LivraisonRepository $repository)
    {
        $livraison= $repository->find($id);
        $livraison->setIdLivreur($idlivreur);
        $em = $this->getDoctrine()->getManager();
        $em->flush();
        return $this->redirectToRoute("affecter");
    }

    /**
     * @Route("/listLivraisonsUser", name="livraisonsUsers")
     */
    public function listlivraisonsByuser( Request $request,LivraisonRepository $repository){
        $user = $this->getDoctrine()->getRepository(User::class)->find(44444459);
        $livraison = $this->getDoctrine()->getManager()
            ->getRepository(Livraison::class)
            ->findBy(['iduser' => $user]);

        return $this->render("livraison/listlivraisonclient.html.twig",
            array('livraisons'=>$livraison));
    }
}
