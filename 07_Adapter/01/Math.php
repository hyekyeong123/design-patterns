<?php
class Math
{
    public function twoTime(float $num) : float
    {
        echo "실수 2배 적용합니다.";
        return $num * 2;
    }

    public function halfTime(float $num) : float
    {
        echo "실수 1/2배 적용합니다.";
        return $num / 2;
    }
}