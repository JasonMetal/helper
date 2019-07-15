<?php
/**
 * Created by PhpStorm.
 * User: King
 * Date: 2018/5/30
 * Time: 13:54
 */

namespace wangxin\helper;


class Arr
{
    /**
     * 获取除指定键数组外的所有给定数组。
     *
     * @param array $array 原数组
     * @param array $keys 要舍去的key
     *
     * @return array
     * @author King
     */
    public static function except(array $array, array $keys)
    {
        return array_diff_key($array, array_flip($keys));
    }

    /**
     * 二分查找
     *
     * @param int|float $number 查找数
     * @param array     $array 待查找区间
     *
     * @return int
     * @author King
     */
    public static function binarySearch($number, array $array)
    {
        if (!is_array($array) || empty($array)) {
            return -1;
        }

        sort($array);

        $length = count($array);
        $lower  = 0;
        $high   = $length - 1;

        while ($lower < $high) {
            $middle = intval(($lower + $high) / 2);
            if ($array[$middle] > $number) {
                $high = $middle - 1;
            } elseif ($array[$middle] < $number) {
                $lower = $middle + 1;
            } else {
                return $middle;
            }
        }

        return -1;
    }

}