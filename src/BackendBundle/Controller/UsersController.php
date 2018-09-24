<?php

namespace BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class UsersController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        //Define structure site
    	return $this->render('BackendBundle:Users:index.html.twig');
    }
}
