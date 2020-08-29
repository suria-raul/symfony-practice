<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class MagicController extends AbstractController
{
  public function firstRoute()
  {
    return new Response('this is you first route');
  }

  public function firstTwig()
  {
    return $this->render('magic.html.twig');
  }
}