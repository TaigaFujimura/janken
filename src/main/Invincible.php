<?php
namespace src\main;

require_once __DIR__ . '/Game.php';
require_once __DIR__ . '/rule/Rule.php';
require_once __DIR__ . '/rule/InvincibleRule.php';
require_once __DIR__ . '/hand/HandAffinity.php';
require_once __DIR__ . '/hand/HandProperty.php';
require_once __DIR__ . '/hand/Hand.php';
require_once __DIR__ . '/hand/definition/HandDefinition.php';
require_once __DIR__ . '/hand/definition/InvincibleHandDefinition.php';
require_once __DIR__ . '/hand/list/HandList.php';
require_once __DIR__ . '/hand/list/GuChokiPaInvincible.php';

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
$opponent1HandId = rand(1,4);
$opponent2HandId = rand(1,4);
$opponent3HandId = rand(1,4);

$playerHand = $hands[$playerHandId];
$opponent1Hand = $hands[$opponent1HandId];
$opponent2Hand = $hands[$opponent2HandId];
$opponent3Hand = $hands[$opponent3HandId];
$opponentHands = [$opponent1Hand, $opponent2Hand, $opponent3Hand];

echo "あなたの手: {$playerHand->name()}\n";
echo "プログラム1の手: {$opponent1Hand->name()}\n";
echo "プログラム2の手: {$opponent2Hand->name()}\n";
echo "プログラム3の手: {$opponent3Hand->name()}\n";
echo "\n";

$result = $game->fight($playerHand, ...$opponentHands);
echo $result."\n";
