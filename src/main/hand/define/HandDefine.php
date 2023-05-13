<?php

namespace src\main\hand\define;

use src\main\hand\HandAffinity;
use src\main\hand\Hand;
use src\main\hand\list\HandList;

interface HandDefine
{
    public function hands(): HandList;
    public function affinity(Hand $playerHand, Hand ...$opponentHands): HandAffinity;
}