<?php

namespace aplicationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use aplicationBundle\Entity\images;

class mojaGaleriaController extends Controller
{
    /**
     * @Route("gallery/{nazwa}")
     */
    public function galleryAction($nazwa)
    {
		
	 
	   	
		$em = $this->getDoctrine()->getEntityManager()->getRepository('aplicationBundle:uzytkownicy')->findBy(array('nazwa'=>$nazwa));
  
	
	if (!$em) {
			
			throw $this->createNotFoundException('Brak rekordu!');
		}
		
		
		
        return $this->render('aplicationBundle:mojaGaleria:gallery.html.twig', array(
            'id'=>$em
        
		
		
		
		
		));
    }

}
