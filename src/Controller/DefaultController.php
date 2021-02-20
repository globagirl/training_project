<?php

namespace App\Controller;

use App\Entity\User;
use App\Services\GiftService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
//    public function __construct(GiftService $gifts)
//    {
//        $gifts->gifts =['a','b','c','d'];
//    }

    /**
     * @Route("/", name="default")
     */
    public function index(GiftService $gifts)//autowire
    {
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();

        //render method
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'users' => $users,
            'random_gift'=>$gifts->gifts,
        ]);
    }
}
