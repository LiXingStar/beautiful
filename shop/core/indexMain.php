<?php
class indexMain{
    public  $smarty;
    function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->setTemplateDir('app');
        $this->smarty->setCompileDir('compile');
    }
}