<?php
  class router{
      static function run(){
         if(!isset($_SERVER['PATH_INFO'])|| $_SERVER['PATH_INFO'] =='/'){
             $model = 'home';
             $fn = 'index';
         }else{
             $pathinfo =  substr($_SERVER['PATH_INFO'],1);
             $arr = explode('/',$pathinfo);
             $model = $arr[0];
             $fn = isset($arr[1]) && $arr[1] ? $arr[1] : 'index';
         }
         if(file_exists('app/manage/'.$model.'.php')){
            include 'app/manage/'.$model.'.php';
            if(class_exists($model)){
                $obj = new $model();
                if(method_exists($obj,$fn)){
                    $obj->$fn();
                }else{
                    $tips = $fn .' method no exists';                                    
                    include 'app/view/404.html';                                   
                }
            }else{
                $tips = $model .' class no exists';                
                include 'app/view/404.html';                
            }
         }else{
             $tips = $model .' model no exists';
             include 'app/view/404.html';
         }

      }
  }
?>