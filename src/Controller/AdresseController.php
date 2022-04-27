<?php

namespace App\Controller;

use Knp\Component\Pager\PaginatorInterface;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\AdresseRepository;
use App\Entity\Adresse;
use App\Entity\User;
use App\Form\AdresseType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

class AdresseController extends AbstractController
{
    /**
     * @Route("/adresse", name="app_adresse")
     */
    public function index(): Response
    {
        return $this->render('adresse/listadresse.html.twig', [
            'controller_name' => 'AdresseController',
        ]);
    }

    /**
     * @Route("/removeAdresse/{id}",name="deleteAdresse")
     */
    public function deleteAdresse($id,FlashyNotifier $flashy)
    {
        $adresse= $this->getDoctrine()->getRepository(Adresse::class)->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($adresse);
        $em->flush();
        $flashy->info('Cet adresse a ete supprime');
        return $this->redirectToRoute("adresses");
    }

    /**
     * @Route("/addAdresse",name="addAdresse")
     */
    public function addAdresse( Request $request,FlashyNotifier $flashy)
    {
        $adresse= new Adresse();
        $form= $this->createForm(AdresseType::class,$adresse);
        $form->handleRequest($request);
        if($form->isSubmitted()  && $form->isValid() ){
            $em = $this->getDoctrine()->getManager();
            $user = $this->getDoctrine()->getRepository(User::class)->find(44444459);
            $adresse->setIduser($user);
            $em->persist($adresse);
            $em->flush();
            $flashy->success('Une nouvelle adresse est ajouté');
            return $this->redirectToRoute("adresses");
        }
        return $this->render("adresse/addadresse.html.twig",array("form"=>$form->createView()));
    }

    /**
     * @Route("/updateAdresse/{id}", name="updateAdresse")
     */
    public function updateAdresse( Request $request,AdresseRepository $repository,$id,FlashyNotifier $flashy)
    {
        $adresse= $repository->find($id);
        $form= $this->createForm(AdresseType::class,$adresse);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $flashy->primaryDark('adresse a ete modifier');
            return $this->redirectToRoute("adresses");
        }
        return $this->render("adresse/updateadresse.html.twig",array("adresse"=>$adresse,"form"=>$form->createView()));
    }

    /**
     * @Route("/listAdresses", name="adresses")
     */
    public function listAdressesByuser(Request $request,AdresseRepository $repository,PaginatorInterface $paginator){

        $user = $this->getDoctrine()->getRepository(User::class)->find(44444459);
        $adresses = $this->getDoctrine()->getManager()
            ->getRepository(Adresse::class)
            ->findBy(['iduser' => $user]);

        $entityManager = $this->getDoctrine()->getManager();
        $query = $entityManager->createQuery(
            'SELECT a.ville
            FROM  App\Entity\Adresse a
            WHERE a.iduser = :id'
        )
            ->setParameter('id', 44444459);

        $ad=$query->getResult();
        dd($ad);
        $adresses= $paginator->paginate(
            $adresses, //on passe les données
            $request->query->getInt('page', 1), //num de la page en cours, 1 par défaut
            2
        );
        return $this->render("adresse/listadresse.html.twig",array("adresse"=>$adresses,"ville" => $adresses));

    }

    /**
     * @Route("/listvilles", name="villes")
     */
    public function listvilles( Request $request,AdresseRepository $repository,PaginatorInterface $paginator){

        $entityManager = $this->getDoctrine()->getManager();
        $query = $entityManager->createQuery(
            'SELECT a
            FROM  App\Entity\Adresse a
            WHERE a.iduser = :id
            ORDER BY a.ville asc'
        )
            ->setParameter('id', 44444459);

        $adresses=$query->getResult();

        $adresses= $paginator->paginate(
            $adresses, //on passe les données
            $request->query->getInt('page', 1), //num de la page en cours, 1 par défaut
            2
        );
        return $this->render("adresse/listadresse.html.twig",
            array('adresses'=>$adresses));
    }



}
