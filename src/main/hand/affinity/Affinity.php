<?php

namespace src\main\hand\affinity;

use src\main\hand\Hand;

interface Affinity
{
    public function compare(Hand $playerHand, Hand ...$opponentHands): string;
}