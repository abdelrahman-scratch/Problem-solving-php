<?php

class PermMissingElem
{
    public function solution($a)
    {
        $n = count($a);
        $sum = ($n + 2) * ($n + 1) / 2;
        return $sum - array_sum($a);

    }

}
