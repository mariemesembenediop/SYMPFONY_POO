<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ControllerchambreController extends AbstractController
{
    /**
     * @Route("/yu", name="controllerchambre")
     */
    public function index()
    {
        return $this->render('controllerchambre/index.html.twig', [
            'controller_name' => 'ControllerchambreController',
        ]);
    }
}
