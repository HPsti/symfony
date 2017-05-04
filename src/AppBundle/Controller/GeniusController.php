<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class GeniusController
{
    /**
     * @Route("/genius")
     */
    public function showAction()
    {
        return new Response("Hello, World!");
    }
}