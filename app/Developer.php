<?php

namespace App;

class Developer extends Worker
{
    use HasRest;
    protected string $position = 'developer';

    public function work(): void
    {
        print_r('Im developing');
    }

    public function __toString(): string
    {
        return $this->getName();
    }


}