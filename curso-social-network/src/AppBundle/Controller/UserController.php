<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use BackendBundle\Entity\User;
use AppBundle\Form\RegisterType;

class UserController extends Controller{
	
	public function loginAction(Request $request){
		
			return $this->render('AppBundle:User:login.html.twig', array(
				"titulo" => "Prueba"
			));
	}
	
	public function registerAction(Request $request){
		
		$user = new User();
		$form = $this->createForm(RegisterType::class, $user);
			
		return $this->render('AppBundle:User:register.html.twig', array(
				"form" => $form->createView()
			));
	}
}
