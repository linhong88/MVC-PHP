<?php
namespace App\Controll\admin;

use Core\controll\Controll;
use App\config\Config;

class Base extends Controll{
    public $config_front;
    public $userId;
    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub

        $this->userId = $this->session->getSession("userId");

        $config_all = Config::get_config();
        $config_admin_front = $config_all['admin_front'];
        $this->config_front = $config_admin_front;

    }
}