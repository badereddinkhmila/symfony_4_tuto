<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
     * @Route("/api/v1/auth")
     */
class AuthController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index(): JsonResponse
    {
       return new JsonResponse('from controller');
    }
}