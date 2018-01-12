<?php
/* Smarty version 3.1.30, created on 2018-01-11 11:57:15
  from "D:\wamp\wamp\www\shop\app\view\cateadd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a57430b4ed5d6_14409488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ed308a7dcb5b7d5bba59e1c8af7a88f80a3ba3a' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\shop\\app\\view\\cateadd.html',
      1 => 1515667469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/manageHeader.html' => 1,
    'file:view/leftNav.html' => 1,
  ),
),false)) {
function content_5a57430b4ed5d6_14409488 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/manageHeader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:view/leftNav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
upload.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
cateadd.js"><?php echo '</script'; ?>
>
<div class="main">
    <form>
        <div class="form-group">
            <label for="cateforyInput">所属分类</label>
            <select class="form-control" name='pid' id='categoryInput'>
                <option value="0">一级分类</option>
                <?php echo $_smarty_tpl->tpl_vars['cateTree']->value;?>

            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">分类名称</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="分类名称" name='cname'>
        </div>
        <div class="form-group">
            <label for="unloadInputFile">上传图片</label>
            <input type="file" id="uploadInputFile">
        </div>
        <img src="" alt="" class="img-rounded" width="100">
        <br>
        <input type="hidden" name='cimage'>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
</body>
</html><?php }
}
