<?php
/**
 * Created by PhpStorm.
 * User: King
 * Date: 2018/5/30
 * Time: 13:54
 */

namespace wangxin\helper;


class Str
{
    /**
     * 生成随机字符串
     *
     * @param int $length
     *
     * @return string|null
     * @author King
     */
    public static function generateRandChar($length = 16)
    {
        $str    = null;
        $strPol = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";
        $max    = strlen($strPol) - 1;

        for ($i = 0; $i < $length; $i++) {
            $str .= $strPol[rand(0, $max)];
        }

        return $str;
    }
}