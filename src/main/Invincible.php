<?php
namespace src\main;

require_once __DIR__ . '/Game.php';
require_once __DIR__ . '/rule/Rule.php';
require_once __DIR__ . '/rule/InvincibleRule.php';
require_once __DIR__ . '/player/Player.php';
require_once __DIR__ . '/player/User.php';
require_once __DIR__ . '/player/Computer.php';
require_once __DIR__ . '/hand/HandAffinity.php';
require_once __DIR__ . '/hand/Hand.php';
require_once __DIR__ . '/hand_define/HandDefine.php';
require_once __DIR__ . '/hand_define/InvincibleHandDefine.php';
require_once __DIR__ . '/hand_list/HandList.php';
require_once __DIR__ . '/hand_list/GuChokiPaInvincible.php';

use src\main\player\Computer;
use src\main\player\User;
use src\main\rule\InvincibleRule;

echo "出す手を決めて下さい.\n";
echo "1: グー\n";
echo "2: チョキ\n";
echo "3: パー\n";
echo "4: 無敵\n";
echo "\n";

$player = User::newPlayer("あなた");
$opponent1 = Computer::newPlayer("コンピューター1");
$opponent2 = Computer::newPlayer("コンピューター2");
$opponent3 = Computer::newPlayer("コンピューター3");

$rule = new InvincibleRule(1);
$game = new Game($rule, $player, $opponent1, $opponent2, $opponent3);

$game->setAllHands();
$game->fight();
