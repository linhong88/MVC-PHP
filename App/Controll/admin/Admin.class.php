<?php
namespace App\Controll\admin;


class Admin extends Base{

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        if(!$this->userId){
            $this->redirect('/admin/Login/login');
        }
    }

    public function index(){
        $this->template->assign("config_front",$this->config_front);
        $this->template->display("admin/index.php");
    }
}