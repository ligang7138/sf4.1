<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends Controller
{
	/**
	 * @Route("/test/test")
	 */
	public function test(){
		return $this->render('a.html.twig',['name' => 'symfony']);
	}
}