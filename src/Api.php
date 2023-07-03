<?php

declare(strict_types=1);

namespace Alucas\td2;

class Api 
{
    public function getRandNumber(): int
    {
        return rand (0,100);
    }
}