<?php

namespace src\main\rule;

interface Rule
{
    public function handAffinity(): HandAffinity;
    public function hands(): array;
}