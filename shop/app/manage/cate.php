<?php
class cate extends indexMain {
    function __construct()
    {
        parent::__construct();
        $this->db = new db('category');
    }
    function show(){

        $sql = "select * from " . $this->db->tablename;
        $data = $this->db->where("pid=0")->select();
        $this->smarty->assign('data',$data);
        $this->smarty->display('view/cate.html');
    }

}