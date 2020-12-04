<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends AbstractController
{
    public $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
        $this->session->start();
    }

}
