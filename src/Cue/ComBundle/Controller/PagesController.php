<?php

namespace Cue\ComBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PagesController extends Controller
{
    public function aboutUsAction()
    {
    	return $this->render('CueComBundle:Pages:aboutus.html.twig', array());
    }

    public function contactUsAction()
    {
    	return $this->render('CueComBundle:Pages:contactus.html.twig', array());
    }

    public function homeAction()
    {
    	return $this->render('CueComBundle:Pages:home.html.twig', array());
    }

}
