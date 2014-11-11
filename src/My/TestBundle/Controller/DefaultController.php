<?php

namespace My\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Component\Debug\Exception\FatalErrorException;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        //throw new FatalErrorException('MyMessage', E_ERROR, 0, 'myfile', 112);
        $myVar = 'string';
        $myVar->functionNotExists();
        return array('name' => 'world');
    }

    /**
     * @Route("/working")
     * @Template()
     */
    public function workingAction()
    {
        throw new FatalErrorException('MyMessage', E_ERROR, 0, 'myfile', 112);
    }
}
