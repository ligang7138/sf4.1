<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/baidumap")
 * Class BaiduController
 * @package App\Controller
 * @return \Symfony\Component\HttpFoundation\Response
 */
class BaiduController extends Controller
{
	/**
	 * @Route("/case")
	 */
	public function testAction(){
		return $this->render("baidu/case.html.twig",['name' => '百度地图使用案例']);
	}
}