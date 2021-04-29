<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    /**
     * @Route("/")
     */
    public function homepage(): Response
    {
        return new Response('Welcome to my page');
    }

    /**
     * @Route("/questions")
     */

    public function show(): Response
    {
        return new Response('Future page for questions');
    }

    /**
     * @Route("/hello/this-is-a-test")
     */
    public function hello()
    {
        return new Response('helloWorld');
    }

}
