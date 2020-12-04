<?php

namespace App\Controller;

use App\Entity\EmailAddress;
use Doctrine\ORM\Query\Expr\Base;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/smail.ic")
 */
class EmailController extends BaseController
{
    /**
     * @Route("/", name="smail_index")
     */
    public function index(): Response
    {
        return $this->render('email/index.html.twig', [
            'controller_name' => 'EmailController',
            'smail_addresses' => $this->getDoctrine()->getManager()->getRepository(EmailAddress::class)->findAll()
        ]);
    }

    /**
     * @Route("/set/{id}", name="smail_set_address")
     */
    public function set(int $id): Response
    {
        //todo: do budoucna implementovat ochranu, aby nebylo možné se přihlásit do schránky někoho jinýho
        $em = $this->getDoctrine()->getManager();
        $smailAddress = $em->getRepository(EmailAddress::class)->find($id);

        if(!$smailAddress)
            throw $this->createNotFoundException();

        $this->session->set('smail:address', $smailAddress);

        return $this->redirectToRoute('smail_index');
    }

}
