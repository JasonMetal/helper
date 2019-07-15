<?php
/**
 * Created by PhpStorm.
 * User: King
 * Date: 2019/7/13
 * Time: 16:05
 */

namespace wangxin\helper;

class Tree
{
    public static function tree(array $data, $primaryId = 'id', $parentId = 'pid')
    {

    }

    /**
     * 获得所有父级栏目
     *
     * @param array  $data 栏目数据
     * @param int    $sid 子栏目
     * @param string $primaryId 唯一键名，如果是表则是表的主键
     * @param string $parentId 父ID键名
     *
     * @return array
     * @author King
     */
    public static function getParentChannel(array $data, int $sid, $primaryId = 'id', $parentId = 'pid')
    {
        if (empty($data)) {
            return $data;
        }

        $arr = [];
        foreach ($data as $v) {
            if ($v[$primaryId] == $sid) {
                $arr[] = $v;
                $_n    = self::getParentChannel($data, $v[$primaryId], $primaryId, $parentId);
                if (!empty($_n)) {
                    $arr = array_merge($arr, $_n);
                }
            }
        }

        return $arr;
    }
}
