<?php

class Helper_Value
{
    public static function format($summ)
    {
        return number_format($summ, 0, '.', ' ');
    }

    public static function money($summ)
    {
        return number_format($summ, 0, '.', ' ') . '&nbsp;руб.';
    }
}
