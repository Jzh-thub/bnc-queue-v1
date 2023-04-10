<?php
// +----------------------------------------------------------------------
// | CoreApi
// +----------------------------------------------------------------------
// | 开源协议  https://mit-license.org
// +----------------------------------------------------------------------
use think\facade\Env;

return [
    'connector'  => 'redis',
    'expire'     => 60,                                            // 任务的过期时间，默认为60秒; 若要禁用，则设置为 null
    'default'    => 'default',                                     // 默认的队列名称
    'host'       => Env::get('redis.redis_hostname', '127.0.0.1'), // redis 主机ip
    'port'       => Env::get('redis.port', 6379),                  // redis 端口
    'password'   => Env::get('redis.redis_password', ''),          // redis 密码
    'select'     => Env::get('redis.select', 0),                   // 使用哪一个 db，默认为 db0
    'timeout'    => 0,                                             // redis连接的超时时间
    'persistent' => false,                                         // 是否是长连接
    'prefix'     => 'bnc',                                         //前缀

];
