<?php
namespace src\main;

require_once __DIR__ . '/rule/Rule.php';
require_once __DIR__ . '/rule/NormalRule.php';
require_once __DIR__ . '/const/FightResult.php';
require_once __DIR__ . '/const/HandConst.php';
require_once __DIR__.'/Game.php';
require_once __DIR__ . '/hand/Hand.php';
require_once __DIR__ . '/hand/HandAffinity.php';

use src\main\rule\NormalRule;

$rule = new NormalRule();
$game = new Game($rule);
$hands = $rule->hands();

echo "出す手を決めて下さい.\n";
echo "1: グー\n";
echo "2: チョキ\n";
echo "3: パー\n";
echo "\n";

echo "あなたの手 > ";
$playerHandId = (int)fgets(STDIN);
$opponentHandId = rand(1,3);

$playerHand = $hands[$playerHandId];
$opponentHand = $hands[$opponentHandId];

echo "あなたの手: {$playerHand->name()}\n";
echo "プログラムの手: {$opponentHand->name()}\n";
echo "\n";

$result = $game->result($playerHand, $opponentHand);
echo $result."\n";
