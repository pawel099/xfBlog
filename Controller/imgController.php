<?php

namespace aplicationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class imgController extends Controller
{
    /**
     * @Route("/")
     */
    public function imagesAction($id)
    {
        return $this->render('aplicationBundle:imgController:images.html.twig', array(
            // ...
        ));
    }

}
