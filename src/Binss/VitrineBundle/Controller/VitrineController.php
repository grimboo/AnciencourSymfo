<?php
/**
 * Created by PhpStorm.
 * User: JJérémy
 * Date: 02/05/2015
 * Time: 14:56
 */



namespace Binss\VitrineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class VitrineController extends Controller
{

    /**
     * @Route("/accueil")
     * @Template
     */
    public function accueilAction()
    {
        return array();
    }


    /**
     * @Route("/cv")
     * @Template
     */
    public function cvAction()
    {
        return array();
    }


    /**
     * @Route("/contact")
     * @Template
     */
    public function contactAction()
    {
        return array();
    }
}