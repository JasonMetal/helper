<?php
/**
 * Created by PhpStorm.
 * User: King
 * Date: 2018/5/30
 * Time: 13:54
 */

namespace app\helper;


class StringHelper
{
    public static function generateRandChar($length = 16)
    {
        $str = null;
        $strPol = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";
        $max = strlen($strPol) - 1;

        for ($i = 0; $i < $length; $i++) {
            $str .= $strPol[rand(0, $max)];
        }

        return $str;
    }
}