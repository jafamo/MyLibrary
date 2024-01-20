<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DocumentationController extends abstractController
{

    #[Route('/api/doc', name: 'api_doc')]
    public function getDoc(): Response
    {
        return $this->render('doc/documentation_api.html.twig');
    }
}