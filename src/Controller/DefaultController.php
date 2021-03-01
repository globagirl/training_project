<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends AbstractController
{

    /**
     * @Route("/home", name="home")
     */
    public function home(Request $request)//autowire
    {
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();

        //render method
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'users' => $users,
        ]);
    }
}
