<?php

namespace App\Controller;

use App\Repository\PensionnairesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class CarouselController extends AbstractController
{
    #[Route('/components/carousel/{id}', name: 'show_image')]
    public function showImage(Request $request, PensionnairesRepository $pensionnairesRepository, int $id): Response
    {
        $pensionnaire = $pensionnairesRepository->find($id);
    
        if (!$pensionnaire) {
            throw $this->createNotFoundException('Pensionnaire introuvable');
        }

        $imageData = $pensionnaire->getImageData();
    
        if (!$imageData) {
            throw $this->createNotFoundException('Image introuvable');
        }
    
        $response = new Response($imageData);
    
        $response->headers->set('Content-Type', 'image/jpeg,image/png,image/gif'); 
    
        return $response;
    }
}    