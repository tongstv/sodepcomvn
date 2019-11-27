<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-02-17 12:47:53
         compiled from "template/search.htm" */ ?>
<?php /*%%SmartyHeaderCode:14661483325c68f589279072-99505417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9a8ba7cc3f248a288eb83bc77fd61a680783f67' => 
    array (
      0 => 'template/search.htm',
      1 => 1543332656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14661483325c68f589279072-99505417',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5c68f5892c02e2_85152278',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c68f5892c02e2_85152278')) {function content_5c68f5892c02e2_85152278($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/usr/local/lib/php/app/lib/libs/plugins/modifier.replace.php';
?><?php echo $_smarty_tpl->getSubTemplate ('search_box.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="panel-fix">
  <div class="panel-heading">
    <h1 class="panel-title"><?php if (isset($_smarty_tpl->tpl_vars['name']->value)) {
echo $_smarty_tpl->tpl_vars['name']->value;
}?> <a target="_blank" href="?<?php echo smarty_modifier_replace($_SERVER['QUERY_STRING'],"do","ajax");?>
&print=true" class="pull-right glyphicon glyphicon-print"></a></h1>
  </div>
  <div class="panel-body">
  
<table class="table table-hover table-condensed">

<thead>
<tr>

<th class="active center hidden-xs">STT</th>
<th class="active text-center">

Số sim


</th>
<th class="active sortprice">Giá tiền <span class="glyphicon"> <a class="pricetoogle" href="javascript://">
<?php if (!isset($_SESSION['toggleprice'])) {?>
<span class="glyphicon-arrow-up"></span><span class="glyphicon-arrow-down"></span>
<?php } elseif ($_SESSION['toggleprice']=='ASC') {?>
<span class="glyphicon-arrow-up red"></span>
<?php } else { ?>
<span class="glyphicon-arrow-down red"></span>
<?php }?>

</a>


</span></th>
<th class="active">Nhà mạng</th>
<th class="active hidden-xs text-center">Thể loại</th>
<th class="active hidden-xs">Đặt mua</th>
<th class="active hidden-xs">Giỏ hàng</th>
<th class="active visible-xs"></th>
</tr>
</thead>

<?php echo $_smarty_tpl->getSubTemplate ('tbody.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</tr>
<tr>
<td colspan="6" class="text-right"><div class="pagination pagination-sm"><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
</div></td>
</tr>
</table>

 </div>
</div><?php }} ?>
