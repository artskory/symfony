<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

    /**
     * 
     * @Route("/annonce")
     */
class AnnonceController extends Controller
{
    /**
     * 
     * @Route("/", name="annonce_home")
     */
    public function indexAction()
    {
        return $this->render('OCPlatformBundle:Annonce:index.html.twig');
    }
}
