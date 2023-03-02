<?php

namespace App;

class Designer extends Worker
{
    use HasRest;
    protected string $position = 'designer';

    public function work(): void
    {
        print_r('Im designering');
    }
}