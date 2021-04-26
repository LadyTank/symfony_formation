<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ArticlesController extends AbstractController
{
 /**
 * @Route("/articles/", name="articles_index")
 */
    public function index()
    {
        return $this -> render('liste.html.twig');
    }
}