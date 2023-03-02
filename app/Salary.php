<?php

namespace App;

class Salary
{
    static public int $TotalHours;
    static public function count(array $hours): int
    {
        self::$TotalHours = array_sum($hours);
        return self::$TotalHours * 2000;
    }
}