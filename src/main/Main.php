<?php
namespace src\main;

require_once __DIR__.'/Game.php';
require_once __DIR__.'/hand/Hand.php';
require_once __DIR__.'/hand/Gu.php';
require_once __DIR__.'/hand/Choki.php';
require_once __DIR__.'/hand/Pa.php';

$game = new Game();

echo "出す手を決めて下さい.\n";
echo "1: グー\n";
echo "2: チョキ\n";
echo "3: パー\n";
echo "\n";

echo "あなたの手 > ";
$playerHandId = (int)fgets(STDIN);
$opponentHandId = rand(1,3);

$playerHand = $game->hand($playerHandId);
$opponentHand = $game->hand($opponentHandId);

echo "あなたの手: {$playerHand->name()}\n";
echo "プログラムの手: {$opponentHand->name()}\n";
echo "\n";

$game->result($playerHand, $opponentHand);
