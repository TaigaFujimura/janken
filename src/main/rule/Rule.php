<?php
declare(strict_types=1);

namespace src\main\rule;

use src\main\hand\Hand;
use src\main\hand\list\HandList;

interface Rule
{
    public function hands(): HandList;
    public function battleResult(Hand $player, Hand ...$opponents): string;
    public function numberOfWinner(): int;
}