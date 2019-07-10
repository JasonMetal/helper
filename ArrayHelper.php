<?php
/**
 * Created by PhpStorm.
 * User: King
 * Date: 2018/5/30
 * Time: 13:54
 */

namespace app\helper;


class ArrayHelper
{
    /**
     * 获取除指定键数组外的所有给定数组。
     *
     * @param array $array
     * @param array $keys
     *
     * @return array
     * @author King
     */
    public static function except(array $array, array $keys)
    {
        return array_diff_key($array, array_flip($keys));
    }


}