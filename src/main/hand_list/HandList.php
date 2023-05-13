<?php
declare(strict_types=1);

namespace src\main\hand_list;

use src\main\hand\Hand;

interface HandList
{
    public function findById(int $handId): Hand;
}