<?php
class index extends  indexMain {
    function __construct()
    {
       parent::__construct();
       $this->db = new db('category');
    }

    function index(){
        $this->smarty->display('view/index.html');
    }
}