<?php
interface Hand {
    public function name(): string;
    public function fightResult(Hand $hand): string;
}
