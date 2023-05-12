<?php
namespace src\main;

require_once __DIR__ . '/Game.php';
require_once __DIR__ . '/rule/Rule.php';
require_once __DIR__ . '/rule/NormalRule.php';
require_once __DIR__ . '/hand/Hand.php';
require_once __DIR__ . '/hand/list/HandList.php';
require_once __DIR__ . '/hand/list/GuChokiPa.php';
require_once __DIR__ . '/hand/HandAffinity.php';
require_once __DIR__ . '/hand/HandProperty.php';
require_once __DIR__ . '/hand/definition/HandDefinition.php';
require_once __DIR__ . '/hand/definition/NormalHandDefinition.php';

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
$opponent1HandId = rand(1,3);
$opponent2HandId = rand(1,3);

$playerHand = $hands[$playerHandId];
$opponent1Hand = $hands[$opponent1HandId];
$opponent2Hand = $hands[$opponent2HandId];
$opponentHands = [$opponent1Hand, $opponent2Hand];

echo "あなたの手: {$playerHand->name()}\n";
echo "プログラム1の手: {$opponent1Hand->name()}\n";
echo "プログラム2の手: {$opponent2Hand->name()}\n";
echo "\n";

$result = $game->fight($playerHand, ...$opponentHands);
echo $result."\n";
