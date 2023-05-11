<?php
declare(strict_types=1);

namespace src\main\hand;

interface Hand
{
    public function id(): int;
    public function name(): string;
    public function fightResult(Hand $hand): string;
}
