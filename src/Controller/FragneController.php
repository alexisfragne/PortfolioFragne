<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FragneController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function home(): Response
    {
        return $this->render('Pages/index.html.twig');
    }
    /**
     * @Route("/cv", name="cv")
     */
    public function cv(): Response
    {
        return $this->render('Pages/cv.html.twig');
    }
    /**
     * @Route("/loisir", name="loisir")
     */
    public function loisir(): Response
    {
        return $this->render('Pages/loisir.html.twig');
    }
    /**
     * @Route("/competences", name="competences")
     */
    public function competences(): Response
    {
        return $this->render('Pages/portfolio.html.twig');
    }    
    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('Pages/formulaire.html.twig');
    }
}
