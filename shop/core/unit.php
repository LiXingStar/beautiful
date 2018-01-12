<?php

class unit
{
    public $str;

    function __construct()
    {
        $this->str = '';
    }

    function cateTree($pid, $db, $tablename, $flag, $currentId = null)
    {
        $flag++;
        $sql = "select * from $tablename where pid=$pid";
        $result = $db->query($sql);
        while ($row = $result->fetch_assoc()) {
            $str = str_repeat('-', $flag);
            $this->str .= "<option value=\"{$row['pid']}\">
               {$str}{$row['cname']}
</option>";
            $this->cateTree($row['cid'], $db, $tablename, $flag, $currentId = null);
        }
        return $this->str;
    }

    function cateTable($db, $tablename)
    {
        $sql = "select * from $tablename";
        $data = $db->query($sql)->fetch_all(MYSQLI_ASSOC);
        foreach ($data as $key => $value) {
            $this->str .= "
               <tr>
           <td>{$value['cid']}</td>
           <td>{$value['cname']}</td>
           <td><img src=\"{$value['cimage']}\" alt=\"\" class=\"img-responsive img-rounded\" width='40'></td>
           <td>{$value['pid']}</td>
           <td>
               <a href=\"\" class=\"btn btn-info\" >修改</a>
               <button id=\"{$value['cid']}\" class=\"btn btn-warning del\">删除</button>
           </td>
        </tr>
            ";
        }
        return $this->str;
    }
}