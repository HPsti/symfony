<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class GeniusController
{
    /**
     * @Route("/article/{articleName}")
     */
    public function showAction($articleName)
    {
        return new Response('The Article is ' . $articleName);
    }
}