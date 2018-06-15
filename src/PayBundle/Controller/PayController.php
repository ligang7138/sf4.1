<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-6-14
 * Time: 下午5:03
 */

namespace App\PayBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class PayController
 * @package App\PayBundle\Controller
 */
class PayController extends Controller
{

	/**
	 * @Route("pay/index")
	 * @return \Symfony\Component\HttpFoundation\Response
	 * @throws \Exception
	 */
	public function indexAction(){

		$em = $this->getDoctrine()->getManager();

		$userRepository = $em->getRepository('PayBundle:User');

		$params = $this->getParameter('pay_name');

		print_r($params);die;

		print_r($userRepository->getUser(61256));die;
		$number = random_int(0, 100);
		return $this->render("@Pay/pay/index.html.twig",['name' => $number]);

	}
}