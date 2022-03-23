<?php

namespace App\Controller\Web;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DictionaryController extends AbstractController
{
    /**
     * @return Response
     */
    #[Route("/dictionary", name: "dictionary", methods: ['GET'])]
    public function dictionary(): Response
    {
        return $this->render('pages/dictionary.html.twig');
    }

    /**
     * @return Response
     */
    #[Route("/dictionary/upload", name: "uploadDictionary", methods: ['POST'])]
    public function uploadDictionary(): Response
    {
        dd('s');
    }
}
