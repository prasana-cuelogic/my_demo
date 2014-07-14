<?php

namespace Cue\ComBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class staticPagesController extends Controller
{
    public function homeAction($name)
    {
    	return $this->render('CueComBundle:Default:index.html.twig', array('name'=>$name));
    }

    public function aboutMeAction(){
    	return $this->render('CueComBundle:staticPages:aboutme.html.twig');
    }

    public function careerAction(){
    	return $this->render('CueComBundle:staticPages:career.html.twig');
    }

    public function clientAction(){
    	return $this->render('CueComBundle:staticPages:client.html.twig');
    }

    public function tocAction(){
    	return $this->render('CueComBundle:staticPages:toc.html.twig');
    }
}
