<?php
    define('RES_PATH','public_html');                     //定义资源文件的目录
    define('APP_PATH','home');                            //定义应用目录名称
    define('DEBUG',1);                                    //开启debug
    require('core.php');                           //加载框架（注意这里的路径）
    \z\z::start();