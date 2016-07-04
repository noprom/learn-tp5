<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
	// 全局变量规则
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],
    // 路由参数name为可选
    'hello/[:name]$' => 'index/hello',
    // 当路由规则以$结尾的时候就表示当前路由规则需要完整匹配。
 	// http://tp5.com/hello // 正确匹配
	// http://tp5.com/hello/thinkphp // 正确匹配
	// http://tp5.com/hello/thinkphp/val/value // 不会匹配

	// Blog控制器的路由
	// 路由分组
	'[blog]' => [
		// http://tp5.com/blog/2015/05
        ':year/:month' => ['blog/archive', ['method' => 'get'], ['year' => '\d{4}', 'month' => '\d{2}']],
        // http://tp5.com/blog/5
        ':id'          => ['blog/get', ['method' => 'get'], ['id' => '\d+']],
        // http://tp5.com/blog/thinkphp
        ':name'        => ['blog/read', ['method' => 'get'], ['name' => '\w+']],
    ],
];