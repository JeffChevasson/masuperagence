<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class PropertyController extends  AbstractController
{
    /**
     * @return Response
     * @Route("/biens", name="property.index")
     */
    public function index(): Response
    {
        return $this->render('pages/property/index.html.twig',

        [
            'current_menu' => 'properties'
        ]);
    }
}