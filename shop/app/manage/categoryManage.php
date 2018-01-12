<?php

class categoryManage extends main
{
    public $db;

    function __construct()
    {
        parent::__construct();
        $this->db = new db('category');
    }

    function index()
    {
        $unit = new unit();
        $str = $unit->cateTree(0, $this->db->connect, 'category', 0);
        $this->smarty->assign('cateTree', $str);
        $this->smarty->display('view/cateadd.html');
    }


    function add()
    {
        $pid = $_GET['pid'];
        $cname = $_GET['cname'];
        $cimage = $_GET['cimage'];
        $this->db->insert($_GET);
        exit();
//        $sql = "insert into category (pid,cname,cimage) values ($pid,'{$cname}','{$cimage}')";

//        $this->db->connect->query($sql);
        if ($this->db->connect->affected_rows == 1) {
            echo 'success';
        } else {
            echo 'fail';
        }
    }

    function show()
    {
        $unit = new unit();
        $table = $unit->cateTable($this->db->connect,$this->db->tablename);
        $this->smarty->assign('table',$table);
        $this->smarty->display('view/cateshow.html');
    }

    function delete(){
        $id = $_GET['id'];
        $result = $this->db->delete("cid={$id}");
        if($result ==1){
            echo 'ok';
        }else {
            echo 'error';
        }
    }

}