<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class taskcontroller
{
    public function index(): Response
    {
        return new Response(
            'hello world'
        );
    }
    /**
     * @Route("/create/task")
     */

    public function create_task(): Response
    {
        return new Response(
            'hello from create task'
        );
    }
}