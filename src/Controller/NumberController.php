<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NumberController extends AbstractController
{
    #[Route('/number', name: 'app_number')]
    public function luckyNumber(): Response
    {
        $number = random_int(0, 100);
        return $this->render('number/number.html.twig', [
            'luckyNumber' => $number,
        ]);
    }
}
