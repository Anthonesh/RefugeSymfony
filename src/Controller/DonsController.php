<?php

namespace App\Controller;

use App\Entity\Formulaires;
use App\Form\FormulairesType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/dons')]
class DonsController extends AbstractController
{

    #[Route('/', name: 'app_dons_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $formulaire = new Formulaires();
        $form = $this->createForm(FormulairesType::class, $formulaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($formulaire);
            $entityManager->flush();

            return $this->redirectToRoute('app_dons_new', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('dons/new.html.twig', [
            'formulaire' => $formulaire,
            'form' => $form,
        ]);
    }

}
