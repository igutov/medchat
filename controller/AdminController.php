<?php
require_once 'model/admin.php';
/**
*
*/
class AdminController
{
    public $data;
    public $action;
    public $smarty;
    public $user;

    function __construct($data, $action, $smarty)
    {
        $this->data = $data;
        $this->action = $action;
        $this->smarty = $smarty;
        $this->user = new Admin($this->data);

        $this->$action();
    }

    public function index(){
        $this->smarty->display('admin/index.tpl');
    }

    public function update(){

    }

    public function delete(){

    }

    public function create(){

    }

    public function read(){

    }
}

?>
