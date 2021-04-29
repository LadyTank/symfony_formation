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
        $articles = []; //création du tableau

        $articles [] = [ // ajout d'un tableau dans le tableau $articles
            'id' => 1,
            'auteur' => 'Katia',
            'titre' => 'Un titre',
            'description' => 'lorem ipsum',
            'date_publication' => '2021-05-01'
        ];

        $articles [] = [
            'id' => 2,
            'auteur' => 'Justine',
            'titre' => 'Un titre2',
            'description' => 'lorem ipsum',
            'date_publication' => '2021-05-02'
        ];

        $articles [] = [
            'id' => 3,
            'auteur' => 'Audrey',
            'titre' => 'Un titre3',
            'description' => 'lorem ipsum',
            'date_publication' => '2021-05-03'
        ];

        // fonctionnalité de symfony équivalente au var_dump. Le resultat sera indiqué dans le profileur sur le navigateur
        dump($articles);
        // dd($articles);

        return $this -> render('articles/index.html.twig', [
            'posts' => $articles
        ]);
    }
}