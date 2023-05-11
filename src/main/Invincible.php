<?php
namespace src\main;

require_once __DIR__ . '/Game.php';
require_once __DIR__ . '/rule/Rule.php';
require_once __DIR__ . '/rule/InvincibleRule.php';
require_once __DIR__ . '/const/FightResult.php';
require_once __DIR__ . '/const/HandConst.php';
require_once __DIR__ . '/hand/Hand.php';
require_once __DIR__ . '/hand/InvincibleAffinity.php';

use src\main\rule\InvincibleRule;

$rule = new InvincibleRule();
$game = new Game($rule);
$hands = $rule->hands();

echo "出す手を決めて下さい.\n";
echo "1: グー\n";
echo "2: チョキ\n";
echo "3: パー\n";
echo "4: 無敵\n";
echo "\n";

echo "あなたの手 > ";
$playerHandId = (int)fgets(STDIN);
$opponentHandId = rand(1,4);

$playerHand = $hands[$playerHandId];
$opponentHand = $hands[$opponentHandId];

echo "あなたの手: {$playerHand->name()}\n";
echo "プログラムの手: {$opponentHand->name()}\n";
echo "\n";

$result = $game->result($playerHand, $opponentHand);
echo $result."\n";
