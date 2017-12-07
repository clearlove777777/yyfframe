<?php
/**
 * 助手函数
 */
header( 'Content-type:text/html;charset=utf8' );
//设置时区【PRC东八区北京时间】
date_default_timezone_set( 'PRC' );
//打印函数
if ( !function_exists( 'dd' ) ) {
	function dd ( $var )
	{
		echo '<pre style="width: 100%;background: #ccc;border-radius: 2px;padding: 6px;box-sizing: border-box">';
		if ( is_bool( $var ) || is_null( $var ) ) {
			var_dump( $var );
		}
		else {
			print_r( $var );
		}
		echo '</pre>';
	}
}









/**
 * 检测是否为post提交
 */
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {
    //说明是post请求
    define( 'IS_POST' , true );
}
else {
    define( 'IS_POST' , false );
}
/**
 * 检测是否为ajax
 */
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH']=='XMLHttpRequest')
{
    define('IS_AJAX',true);
}else{
    define('IS_AJAX',false);
}











