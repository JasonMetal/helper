<?php
/**
 * Created by PhpStorm.
 * User: King
 * Date: 2019/07/13
 * Time: 17:55
 */

namespace Tests;

use PHPUnit\Framework\TestCase;
use wangxin\helper\Arr;

class ArrTest extends TestCase
{
    /**
     * testExcept
     * @author King
     */
    public function testExcept()
    {
        $data   = ['a' => '123', 'b' => '456', 'c' => '789'];
        $except = ['a', 'c'];

        $arr = Arr::except($data, $except);

        $this->assertIsArray($arr);
        $this->assertArrayHasKey('b', $arr);
        $this->assertArrayNotHasKey('a', $arr);
        $this->assertArrayNotHasKey('c', $arr);
    }
}