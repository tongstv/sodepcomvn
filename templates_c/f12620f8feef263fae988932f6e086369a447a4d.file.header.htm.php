<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-02-17 12:46:11
         compiled from "template/header.htm" */ ?>
<?php /*%%SmartyHeaderCode:17574312085c68f523030c61-87289291%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f12620f8feef263fae988932f6e086369a447a4d' => 
    array (
      0 => 'template/header.htm',
      1 => 1543333969,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17574312085c68f523030c61-87289291',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'des' => 0,
    'keyword' => 0,
    'thisdomain' => 0,
    'header' => 0,
    'canonical' => 0,
    'cartcount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5c68f523087602_94362411',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c68f523087602_94362411')) {function content_5c68f523087602_94362411($_smarty_tpl) {?><!DOCTYPE html>
<html lang="vi">
<head>
<title><?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {
echo $_smarty_tpl->tpl_vars['title']->value;
}?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta charset="utf-8">

<meta name="description" content="<?php if (isset($_smarty_tpl->tpl_vars['des']->value)) {
echo $_smarty_tpl->tpl_vars['des']->value;
}?>">
<meta name="keywords" content="<?php if (isset($_smarty_tpl->tpl_vars['keyword']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
 <?php }?>">

<base href="<?php echo $_smarty_tpl->tpl_vars['thisdomain']->value;?>
">

<?php if (isset($_GET['do'])&&$_GET['do']!='ordered') {?>

<?php }?>

<?php echo $_smarty_tpl->tpl_vars['header']->value;?>


<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['canonical']->value;?>
" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['thisdomain']->value;?>
/style/css.css" media="all">
<link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['thisdomain']->value;?>
/images/favicon.png" />
<style>
body{
-webkit-touch-callout: none;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
-o-user-select: none;
user-select: none;
}
</style>


</head>

<body>

<?php echo $_smarty_tpl->getSubTemplate ('slide.menu.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container-fluid">
<div class="modal fade" id="myModal" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     
    </div>
  </div>
</div>
</div>

<div class="container_top hidden-xs" style="background-image: url(/style/images/bg_menu_top.png); min-height: 26px; padding: 0 !important;">
<div class="container-fix">
<a href="<?php echo $_smarty_tpl->tpl_vars['thisdomain']->value;?>
" rel="nofollow">
<i class="glyphicon glyphicon-home"></i> Trang chủ</a>| <a href="/p/ho-tro" rel="nofollow">Hỗ trợ</a> | <a href="/tintuc" rel="nofollow">Tin tức</a> | <a href="/p/hinh-thuc-thanh-toan" rel="nofollow">Thanh toán</a> | <a  href="/p/lien-he" rel="nofollow">Liên hệ</a>
<span class="cart">
<a href="javascript://" class="addcart" rel="nofollow">
<i class="glyphicon glyphicon-shopping-cart font-12"></i> Giỏ hàng <span class="red strong" id="cart"><?php if (isset($_smarty_tpl->tpl_vars['cartcount']->value)) {
echo $_smarty_tpl->tpl_vars['cartcount']->value;
}?></span>
</a> | <a rel="nofollow"  href="index.php?ajax=cod" title="kiểm tra đơn hàng" data-width="60%" data-height="400" class="frame font-12">Kiểm tra đơn hàng</a>
</span>
</div>
</div>





<div class="clearfix"></div>
<div class="container-fix container-fix2">

<div class="hidden-xs">
<?php echo $_smarty_tpl->getSubTemplate ('menu.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

<div class="row">
<div id="left">

<?php }} ?>
