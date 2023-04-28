<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloSymfonyController {

  #[Route('/')]
  public function hellosymfony() {
    return new Response("Hello Symfony!");
  }

}