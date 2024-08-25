<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProfileController extends AbstractController
{
    #[Route('/profile', name: 'profile')]
    public function profile(Security $security): Response
    {
        $this->denyAccessUnlessGranted("ROLE_USER");

        // $user = $this->getUser();
        $user = $security->getUser();

        return $this->render('profile/profile.html.twig', [
            "user" => $user
        ]);
    }
}
