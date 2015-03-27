<?php

class Helper_Plural
{
    public static function get($n, $arr, $includeNumber = true)
    {
        if ($includeNumber == false) {
            return self::calc($n, $arr);
        } else {
            return $n . ' ' . self::calc($n, $arr);
        }
    }

    private static function calc($n, $arr) {
        $n = $n % 100;
        if ($n < 20 && $n > 10) {
            return $arr[0];
        }
        $n = $n % 10;
        if ($n == 0) {
            return $arr[0];
        }
        if ($n == 1) {
            return $arr[1];
        }
        if ($n < 5) {
            return $arr[2];
        }
        return $arr[0];
    }
}
