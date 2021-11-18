<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User ;
use App\Form\RegisterType;
use Symfony\Component\HttpFoundation\Request;

class RegisterController extends AbstractController
{
    /**
     * @Route("/register", name="register")
     */
    public function index(Request $request): Response
    {
        $user = new User();
        $form=$this->createForm(RegisterType::class,$user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $user = $form->getData();
            dd($user);
        }

        return $this->render('register/index.html.twig',
    ['form' => $form->createView()]);
    }
}
