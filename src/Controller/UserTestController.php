<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserTestController extends AbstractController
{
    #[Route('/userss/test', name: 'app_user_test')]
    public function index(User $user): Response
    {
        $password = $user->getPassword();

        return $this->render('user_test/index.html.twig', [
            'controller_name' => 'UserTestController',
        ]);
    }
}
