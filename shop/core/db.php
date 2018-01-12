<?php

class db
{
    public $tablename;
    public $connect;

    function __construct($tablename)
    {
        $this->tablename = $tablename;
        $this->connect = $this->config();
        $this->config();
        $this->opts["where"] = $this->opts["order"] = $this->opts["limit"] = "";
    }

    function config()
    {
        $this->connect = new mysqli('localhost', 'root', '', 'beautiful', 3306);
        if ($this->connect->connect_errno) {
            echo '数据库连接失败,失败的原因 ' . $this->connect->connect_errno;
            exit();
        }
        $this->connect->query('set names utf8');
    }

    /*
     *  insert into table (a,b,v) values ();
     * */
    function insert($info)
    {
        $sql = "insert into $this->tablename (";
        $keyarr = array_keys($info);
        for ($i = 0; $i < count($keyarr); $i++) {
            $sql .= $keyarr[$i] . " ,";
        }
        $sql = substr($sql, 0, -1) . ") values (";

        foreach ($info as $v){
            $sql .= "'". $v ."',";
        }
        $sql = substr($sql,0,-1) . ")";
        echo $sql;
    }


    function select($info = "")
    {
        if (strpos($info, 'elect')) {
            $sql = $info;
        } else {
            $type = empty($info) ? "*" : $info;
            $sql = "select " . $type . " from " . $this->tablename . " " . $this->opts['where'];
        }
        $result = $this->connect->query($sql)->fetch_all(MYSQLI_ASSOC);
        return $result;
    }

    function where($info = '')
    {
        $sql = empty($info) ? "" : "where $info";
        $this->opts['where'] = $sql;
        return $this;
    }

    function delete($info = "")
    {
        $sql = "delete from $this->tablename where $info";
        $this->connect->query($sql);
        return $this->connect->affected_rows;
    }
}