<?php

class upload
{
    function index()
    {
//      var_dump($_FILES['file']);
        $info = $_FILES['file'];
        if (is_uploaded_file($info['tmp_name'])) {
            if (!file_exists('public/upload')) {
                mkdir('public/upload');
            }
            $data = date('y-m-d');
            if (!file_exists('public/upload/' . $data)) {
                mkdir('public/upload/' . $data);
            }
            $type = substr($info['name'],strpos($info['name'],'.')+1);
            $name = time() . '.' . $type;
            $path = 'public/upload/' . $data . '/' . $name;
            if (move_uploaded_file($info['tmp_name'], $path)) {
                echo '/shop/' . $path;
            }
        }
    }
}
