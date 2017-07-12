# Development Environment based on Docker
>单一进程的进程服务

>前段时间，鸟哥也在说提高开发效率的事情，再加上自己因为新项目开发的原因，把环境搭建的版本在php7的基础上做了相关扩展的升级。开放出来给别的同学也省省时间。
## MNMP list 
- php7.1.6 based on debian/jessia
- nginx:1.9.0 based on debian/jessia
- mysql:5.6 based on debian/jessia
- mac os 

## PHP扩展列表

>gearman、xhrpof、yar等不支持php7,故,并没有被包含进来

- redis-3.1.2.tgz
- msgpack-2.0.2.tgz
- swoole-1.9.15.tgz
- taint-2.0.2.tgz
- xdebug-2.5.5.tgz
- yaf-3.0.5.tgz
- composer


##  Note
- 在复制tar包文件时，使用的Docker指令是COPY而不是ADD，这是由于ADD指令会自动解压tar文件；
- 多个容器之间的连接，使用对应容器的hostname 即可连接；
- 多个容器连接时，直接用容器名称即可，如nginx将fascgi传递给PHP时，直接使用容器名称：
```
fastcgi_pass    php:9000;
```

2017