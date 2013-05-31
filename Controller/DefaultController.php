<?php

namespace Bix\Bundle\CategoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BixCategoryBundle:Default:index.html.twig', array('name' => $name));
    }
}
