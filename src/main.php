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

echo '出す手を決めて下さい.'."\n";
echo '1: グー'."\n";
echo '2: チョキ'."\n";
echo '3: パー'."\n";
echo "\n";

echo 'あなたの手 > ';
$opponent_hand = $hands[rand(1, 3)];
$player_hand = $hands[(int)fgets(STDIN)];
echo "\n";

$player = new Player("あなた", $player_hand);
$opponent = new Player("プログラム", $opponent_hand);

echo sprintf('%sの手: %s', "あなた", $player_hand->name)."\n";
echo sprintf('%sの手: %s', "プログラム", $opponent_hand->name)."\n";
echo "\n";

echo $player->fightWith($opponent)."\n";
