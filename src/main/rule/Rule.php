<?php

namespace src\main\rule;

use src\main\hand\Hand;

interface Rule
{
    public function battleResult(Hand $playerHand, Hand $opponentHand): string;
    public function hands(): array;
}