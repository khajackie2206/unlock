<?php

namespace Khanguyennfq\Unlock\Helper;

trait TestTrait
{
    public function getSum(int $a, $b): int
    {
        return $a + $b;
    }

    public function getMinus(int $a, $b): int
    {
        return $a - $b;
    }
}
