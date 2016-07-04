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

	
];
