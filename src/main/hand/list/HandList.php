<?php
declare(strict_types=1);

namespace src\main\hand\list;

interface HandList
{
    public function get(): array;
}