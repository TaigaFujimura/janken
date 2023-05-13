<?php
declare(strict_types=1);

namespace src\main\hand\list;

use src\main\hand\Hand;

interface HandList
{
    public function findById(int $handId): Hand;
}