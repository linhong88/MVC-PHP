<?php
namespace App\config;

class Config{
    private static $config=array(
        'dbconfig'=>array(  //数据库配置
            //'host'=>'10.10.11.140',
            'host'=>'192.168.1.105',
            'use'=>'root',
            'pass'=>'root',
            'db'=>'test'
        ),
        'nsconfig'=>array(  //命名空间别名配置
            'Database'=>'Core\database',
            "Dept"=>'Core\dept',
            "Lib"=>'Core\lib',
            "Template"=>'Core\template',
            "Config"=>'App\config',
            "Controll"=>'App\Controll',
            "Module"=>'App\Module',
        ),
        'admin_front'=>'/Public/admin/',
        'host' => 'http://myblog.com',
    );
    static function get_config(){
        return self::$config;
    }
}
?>