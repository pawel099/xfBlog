<?php

namespace aplicationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class usersController extends Controller
{
    /**
     * @Route("{id}")
     */
    public function userAction($id)
    {
	   	
		$em = $this->getDoctrine()->getEntityManager()->getRepository('aplicationBundle:uzytkownicy')->findBy(array('id'=>$id));
  
	
	if (!$em) {
			
			throw $this->createNotFoundException('Brak rekordu!');
		}
		
		 
        return $this->render('aplicationBundle:users:user.html.twig',array('wynik'=>$em));
		
		
        
    }

}
