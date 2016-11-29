<?php

namespace aplicationBundle\Controller;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use aplicationBundle\Entity\uzytkownicy;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
	 
    public function indexAction()
	
{
	
	$em = $this->getDoctrine()->getEntityManager()->getRepository('aplicationBundle:uzytkownicy')->findAll();
  
	
	if (!$em) {
			
			throw $this->createNotFoundException('Brak rekordu!');
		}
		
		 
        return $this->render('aplicationBundle:Default:index.html.twig',array('wynik'=>$em));
    }
}
