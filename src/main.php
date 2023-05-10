<?php
require_once 'player.php';
require_once './hand/hand.php';
require_once './hand/gu.php';
require_once './hand/choki.php';
require_once './hand/pa.php';

$hands = array(
    1 => new Gu(),
    2 => new Choki(),
    3 => new Pa(),
);

echo "出す手を決めて下さい.\n";
echo "1: グー\n";
echo "2: チョキ\n";
echo "3: パー\n";
echo "\n";

echo 'あなたの手 > ';
$playerHandId = (int)fgets(STDIN);
$opponentHandId = rand(1, 3);
echo "\n";

$opponentHand = $hands[$opponentHandId];
$playerHand = $hands[$playerHandId];

$player = new Player("あなた", $playerHand);
$opponent = new Player("プログラム", $opponentHand);

echo "{$player->showHandInfo()}\n";
echo "{$opponent->showHandInfo()}\n";
echo "\n";

echo $player->fightWith($opponent)."\n";
