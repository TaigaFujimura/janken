<?php

namespace src\main\hand\definition;

use src\main\hand\HandAffinity;
use src\main\hand\Hand;
use src\main\hand\list\HandList;

interface HandDefinition
{
    public function hands(): HandList;
    public function affinity(Hand $playerHand, Hand ...$opponentHands): HandAffinity;
}