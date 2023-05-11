<?php

namespace src\main\rule;

use src\main\hand\NormalAffinity;

interface Rule
{
    public function handAffinity(): NormalAffinity;
    public function hands(): array;
}