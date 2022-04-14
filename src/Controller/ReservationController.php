<?php

namespace App\Controller;

use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReservationController extends AbstractController
{
    /**
     * @Route("/reservation", name="app_reservation")
     */
    public function index(): Response
    {
        return $this->render('reservation/index.html.twig', [
            'controller_name' => 'ReservationController',
        ]);
    }
    /**
     * @Route("/deleteReservation/{id}",name="deleteReservation")
     */
    public function deleteReservation($id,ReservationRepository $reservationRepository)
    {
        $reservation=$reservationRepository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($reservation);
        $em->flush();
        return $this->redirectToRoute("SalledetailFront",array('id'=>$reservation->getIdSalle()->getIdsalle()));
    }

    /**
     * @Route("/updateReservation/{id}", name="updateReservation")
     */
    public function updateReservation( Request $request,ReservationRepository $reservationRepository,$id)
    {
        $reservation= $reservationRepository->find($id);
        $form= $this->createForm(ReservationType::class,$reservation);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){
            if($reservationRepository->findBySalleAndDate($reservation->getIdSalle(),$reservation->getDate())==0){
                $em = $this->getDoctrine()->getManager();
                $em->flush();
                return $this->redirectToRoute("SalledetailFront",array('id'=>$reservation->getIdSalle()->getIdsalle()));
            }
            else{
                return $this->render("reservation/index.html.twig",array('form'=>$form->createView(),'salle'=>$reservation->getIdSalle(),'err'=>'il existe une réservation à la date choisie'));
            }

        }
        return $this->render("reservation/index.html.twig",array('form'=>$form->createView(),'salle'=>$reservation->getIdSalle()));
    }
}
