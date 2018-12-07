<?php

namespace SensioCache\Controller;

use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{
    /**
     * @Route("/test", name="test")
     */
    public function testAction()
    {
        var_dump("Test"); die;
    }
}