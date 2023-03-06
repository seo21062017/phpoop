<?php

namespace App;

class PostController extends Worker
{
    use HasRest;
    protected string $position = 'PostController';

    public function work(): void
    {
        print_r('Im PostController');
    }
}