<?php

$redis = new Redis();

# redis 连接为redis容器中指示的hostname -i 
$redis->connect('bd872cd78d0e', '6379');

$redis->set('key', mt_rand(1, 10000));
echo $redis->get('key');