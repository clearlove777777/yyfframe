<?php
/**
 * Created by PhpStorm.
 * User: 诺言
 * Date: 2017/12/6
 * Time: 21:07
 */

namespace yyf\core;


class Controller
{
    /**
     * 成功提示
     * @param $msg	提示消息
     * @param $url	跳转地址
     */
    protected function success($msg,$url)
    {
        include '/view/success.html';
        die;
    }
    /**
     * 失败提示
     * @param $msg	提示消息
     * @param $url	跳转地址
     */
    protected function error($msg,$url = '')
    {
        include 'view/error.html';
		die;
    }

}