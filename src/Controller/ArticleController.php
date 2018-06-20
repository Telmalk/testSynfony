<?php
/**
 * Created by PhpStorm.
 * User: cleme
 * Date: 20/06/2018
 * Time: 16:33
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response("Wesh négro c'est stylé symfony t as vu !");
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        $comment = [
            "j'aime les fruits en sirop",
            "ARTHUUURRR MON PETIT OISEAU PROUT !!"
        ];
        return $this->render("article/show.html.twig",
            [
                'title' => ucwords(str_replace("-", ' ', $slug)),
                "comments" => $comment,
            ]);
    }
}