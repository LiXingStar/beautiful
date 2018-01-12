<?php
/* Smarty version 3.1.30, created on 2018-01-11 10:26:51
  from "D:\wamp\wamp\www\shop\app\view\cate.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a572ddb3a2217_44128899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19e3d0d44bb4b6a524f4f11ed90ff1f944c96b4a' => 
    array (
      0 => 'D:\\wamp\\wamp\\www\\shop\\app\\view\\cate.html',
      1 => 1515662809,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/header.html' => 1,
  ),
),false)) {
function content_5a572ddb3a2217_44128899 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- 全部分类 -->
<!-- 标题导航 -->
<div class="title-box">
    <div class="title-left">正在流行</div>
    <a href="" class="title-right"></a>
</div>
<!-- 标题导航结束 -->
<div class="class-box">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
$_smarty_tpl->tpl_vars['v']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->index++;
$__foreach_v_0_saved = $_smarty_tpl->tpl_vars['v'];
?>
    <?php if ($_smarty_tpl->tpl_vars['v']->index == 4) {?>
      <?php break 1;?>

    <?php }?>
    <a href="/shop/index.php/cate/show2?pid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
" class="shop">
        <div class="shop1"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['cimage'];?>
"
                                alt=""></div>
        <div class="shop-word"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</div>
    </a>
    <?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>

<!-- 标题导航 -->
<div class="title-box">
    <div class="title-left">时尚经典</div>
    <a href="" class="title-right"></a>
</div>
<!-- 标题导航结束 -->
<div class="class-box">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
$_smarty_tpl->tpl_vars['v']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->index++;
$__foreach_v_1_saved = $_smarty_tpl->tpl_vars['v'];
?>
    <?php if ($_smarty_tpl->tpl_vars['v']->index <= 4) {?>
    <?php continue 1;?>
    <?php }?>
    <a href="/shop/index.php/cate/show2?pid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
" class="shop">
        <div class="shop1"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['cimage'];?>
"
                                alt=""></div>
        <div class="shop-word"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</div>
    </a>
    <?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_1_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>
<!-- 全部分类结束 -->
<!-- 热门穿搭 -->
<!-- 标题导航 -->
<!--<div class="title-box">-->
    <!--<div class="title-left">热门穿搭</div>-->
    <!--<a href="" class="title-right">更多 ></a>-->
<!--</div>-->
<!-- 标题导航结束 -->
<!--<div class="remen-box">-->
<!--<div class="remen-shop">-->
<!--<a href=""><img src="<?php echo IMG_PATH;?>
170824_4975gaggggi10ie9jic6g30904el7_750x390.jpg_999x999.v1c0.webp" alt=""></a>-->
<!--</div>-->
<!--<div class="remen-shop">-->
<!--<a href=""><img src="<?php echo IMG_PATH;?>
170823_8bd00cgikiia4a29fh4kl98047f31_750x390.jpg_999x999.v1c0.webp" alt=""></a>-->
<!--</div>-->
<!--&lt;!&ndash; <div class="remen-shop">-->
<!--<a href=""><img src="" alt=""></a>-->
<!--</div> &ndash;&gt;-->
<!--</div>-->
<!-- 热门穿搭结束 -->
<!-- 畅销热榜 -->
<!--<div class="title-box">-->
<!--<div class="title-left">畅销热榜</div>-->
<!--<a href="" class="title-right">更多  ></a>-->
<!--</div>-->
<!-- 标题导航结束 -->
<!--<div class="remen-box">-->
<!--<div class="remen-shop">-->
<!--<a href=""><img src="<?php echo IMG_PATH;?>
170824_0jfj28507kc5dbb5f5g52he2cljll_750x390.jpg_999x999.v1c0.webp" alt=""></a>-->
<!--</div>-->
<!--<div class="remen-shop">-->
<!--<a href=""><img src="<?php echo IMG_PATH;?>
170823_0f56ib5cfil8k90l7e257eakg6fk8_750x390.jpg_999x999.v1c0.webp" alt=""></a>-->
<!--</div>-->
<!--&lt;!&ndash; <div class="remen-shop">-->
<!--<a href=""><img src="" alt=""></a>-->
<!--</div> &ndash;&gt;-->
<!--</div>-->
<!-- 畅销热榜结束 -->
<!-- 猜你喜欢 -->
<!--<div class="title-box">-->
<!--<div class="title-left">猜你喜欢</div>-->
<!--<a href="" class="title-right">更多  ></a>-->
<!--</div>-->
<!-- 标题导航结束 -->
<!--<div class="remen-box">-->
<!--<div class="remen-shop">-->
<!--<a href=""><img src="<?php echo IMG_PATH;?>
170824_0g885dg1b15bk0kjhi31cgekjia30_750x390.jpg_999x999.v1c0.webp" alt=""></a>-->
<!--</div>-->
<!--<div class="remen-shop">-->
<!--<a href=""><img src="<?php echo IMG_PATH;?>
170823_3f2ib28b94hf8dfa62gd9689llbl3_750x390.png" alt=""></a>-->
<!--</div>-->
<!--&lt;!&ndash; <div class="remen-shop">-->
<!--<a href=""><img src="" alt=""></a>-->
<!--</div> &ndash;&gt;-->
<!--</div>-->
<!-- 猜你喜欢结束 -->
<!-- 流行 -->
<!--<div class="liuxing-box">-->
<!--<div class="liuxing-title-box">-->
<!--<ul class="liuxing-word-box">-->
<!--<li class="liuxing-word">流行</li>-->
<!--<li class="liuxing-word">热销</li>-->
<!--<li class="liuxing-word">上新</li>-->
<!--</ul>-->
<!--</div>-->
<!--<div class="liuxing-shop-box">-->
<!--<div class="liuxing-box1">-->
<!--<a href="" class="liuxing-shangpin"><img src="<?php echo IMG_PATH;?>
upload_889fk05c17gfk4g257hbebh62cagb_640x900.jpg_320x999.webp" alt=""></a>-->
<!--<div class="danpin-word">-->
<!--<ul class="danpin-top">-->
<!--<li>优选</li>-->
<!--<li>休闲裤</li>-->
<!--<li>显瘦阔腿裤</li>-->
<!--<li>黑色</li>-->
<!--<li>宽松</li>-->
<!--<li>韩版</li>-->
<!--<li>休闲</li>-->
<!--</ul>		-->
<!--<div class="danpin-bottom">-->
<!--<div class="danpin-bottom-left">¥56.25</div>-->
<!--<ul class="danpin-bottom-right">-->
<!--<li class="shu">161</li>-->
<!--<li class="xing iconfont icon-wujiaoxing"></li>-->
<!--</ul>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--<div class="liuxing-box1">-->
<!--<a href="" class="liuxing-shangpin"><img src="<?php echo IMG_PATH;?>
upload_6h7ae6f12aabdf98gf1500a6ie06e_1600x2250.jpg_320x999.webp" alt=""></a>-->
<!--<div class="danpin-word">-->
<!--<ul class="danpin-top">-->
<!--<li>优选</li>-->
<!--<li>休闲裤</li>-->
<!--<li>显瘦阔腿裤</li>-->
<!--<li>黑色</li>-->
<!--<li>宽松</li>-->
<!--<li>韩版</li>-->
<!--<li>休闲</li>-->
<!--</ul>	-->
<!--<div class="danpin-bottom">-->
<!--<div class="danpin-bottom-left">¥56.25</div>-->
<!--<ul class="danpin-bottom-right">-->
<!--<li class="shu">161</li>-->
<!--<li class="xing iconfont icon-wujiaoxing"></li>-->
<!--</ul>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!-- 流行结束 -->
<!-- foot -->
<div class="footer">
    <a href="index.html" class="bankuai">
        <div class="bankuai-icon iconfont icon-shouye"></div>
        <div class="bankuai-word">首页</div>
    </a>
    <a href="cate/show" class="bankuai">
        <div class="bankuai-icon iconfont icon-leimupinleifenleileibie"></div>
        <div class="bankuai-word1">分类</div>
    </a>
    <a href="shop-car.html" class="bankuai">
        <div class="bankuai-icon iconfont icon-bao"></div>
        <div class="bankuai-word">购物车</div>
    </a>
    <a href="wo.html" class="bankuai">
        <div class="bankuai-icon iconfont icon-5"></div>
        <div class="bankuai-word">我</div>
    </a>
</div>
<div id="foot"></div>
<!-- foot结束 -->
</body>
</html><?php }
}
