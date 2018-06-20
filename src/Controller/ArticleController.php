<?php
/**
 * Created by PhpStorm.
 * User: cleme
 * Date: 20/06/2018
 * Time: 16:33
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
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
        return new Response(sprintf(
            "Futur Page in construction %s",
            $slug
        ));
    }
}