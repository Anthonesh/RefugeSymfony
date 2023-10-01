<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NosProtegesController extends AbstractController
{
    #[Route('/nos/proteges', name: 'app_nos_proteges')]
    public function index(): Response
    {
        return $this->render('nos_proteges/nos_proteges.html.twig', [
            'controller_name' => 'NosProtegesController',
        ]);
    }
}
