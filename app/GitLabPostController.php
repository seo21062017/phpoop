<?php

namespace App;

class GitLabPostController extends Worker
{
    use HasRest;
    protected string $position = 'GitLabPostController';

    public function work(): void
    {
        print_r('Im GitLabPostController');
    }

    public function __toString(): string
    {
        return $this->getName();
    }


}