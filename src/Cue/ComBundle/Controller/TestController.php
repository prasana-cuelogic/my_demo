<?php

namespace Cue\ComBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestController extends Controller
{
    public function checkAction($name, $age)
    {
    	return $this->render('CueComBundle:Test:check.html.twig', array('name' => $name, 'age' => $age));
    }

    public function clickAction()
    {
        return $this->render('CueComBundle:Test:click.html.twig');
    }
}
