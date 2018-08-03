<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MYPController extends Controller
{
    /**
     * @Route("/", name="accueil")
     */
    public function index()
    {
        return $this->render('myp/index.html.twig', [
            'controller_name' => 'MYPController',
        ]);
    }
}
