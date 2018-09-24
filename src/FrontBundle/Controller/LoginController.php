<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
    	//Define structure site
    	return $this->render('FrontBundle:Pages:login.html.twig');
    }
}
