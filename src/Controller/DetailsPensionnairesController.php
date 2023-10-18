<?php

namespace App\Controller;

use App\Entity\Pensionnaires;
use App\Entity\InformationsPensionnaires;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DetailsPensionnairesController extends AbstractController
{
    #[Route('/details/pensionnaires/{id}', name: 'app_details_pensionnaires')]
    public function index(Request $request,EntityManagerInterface $entityManager,  $id): Response
    {
        $pensionnaire = $entityManager->getRepository(Pensionnaires::class)->find($id);

        if (!$pensionnaire) {
            throw $this->createNotFoundException("Le pensionnaire n'a pas été trouvé.");
        }

        $informationsPensionnaires = $entityManager->getRepository(InformationsPensionnaires::class)->find($id);

        return $this->render('details_pensionnaires/index.html.twig', [
            'pensionnaire' => $pensionnaire,
            'informationsPensionnaires' => $informationsPensionnaires,
        ]);
    }
}