<?php
/* Smarty version 3.1.30, created on 2018-01-11 07:26:40
  from "D:\wamp\wamp\www\shop\app\view\cateshow.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5703a07e1097_95871369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c34201d8741aaa75ee808749638c359e48c9a3b1' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\shop\\app\\view\\cateshow.html',
      1 => 1515651453,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/manageHeader.html' => 1,
    'file:view/leftNav.html' => 1,
  ),
),false)) {
function content_5a5703a07e1097_95871369 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/manageHeader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:view/leftNav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
cateshow.js"><?php echo '</script'; ?>
>
<div class="main">
    <table class="table table-responsive table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>名称</th>
                <th>图片</th>
                <th>父栏目</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
          <?php echo $_smarty_tpl->tpl_vars['table']->value;?>

        </tbody>
    </table>
</div><?php }
}
