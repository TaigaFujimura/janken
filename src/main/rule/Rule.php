<?php
declare(strict_types=1);

namespace src\main\rule;

use src\main\hand\Hand;

interface Rule
{
    public function battleResult(Hand $player, Hand ...$opponents): string;
    public function hands(): array;
}