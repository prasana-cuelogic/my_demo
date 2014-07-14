<?php

namespace Cue\ComBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
    	return $this->render('CueComBundle:Default:index.html.twig', array('name' => $name));
    }

    public function aboutusAction() {
    	return $this->ender('CueComBundle:Default:about_us.html.twig');
    }
}
