<?php

namespace App\Controller;

use App\Service\MessageGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/test")
 * Class TestController
 * @package App\Controller
 */
class TestController extends Controller
{
	/**
	 * @Route("/test")
	 */
	public function test(){
		return $this->render('a.html.twig',['name' => 'symfony']);
	}

	/**
	 * 测试把service当作服务使用
	 * @Route("/service")
	 * @param MessageGenerator $messageGenerator
	 */
	public function testService(MessageGenerator $messageGenerator){
		$message = $messageGenerator->getHappyMessage();
		echo $message;die;
		return $this->addFlash('success',$message);
	}

	/**
	 * 测试把controller当作服务使用
	 * @Route("/contr")
	 * @param BaiduController $baiduController
	 */
	public function testContr(BaiduController $baiduController){
		$baiduController->testService();
	}
}