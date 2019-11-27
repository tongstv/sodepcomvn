<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-02-17 13:08:15
         compiled from "template/sodep.htm" */ ?>
<?php /*%%SmartyHeaderCode:1505315525c68fa4fddabd2-62194087%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '849a855f310d3a95a4f897b3bb7e74a7d1d06ceb' => 
    array (
      0 => 'template/sodep.htm',
      1 => 1540061727,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1505315525c68fa4fddabd2-62194087',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'print_url' => 0,
    'paging' => 0,
    'seo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5c68fa4fe27bd4_01903841',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c68fa4fe27bd4_01903841')) {function content_5c68fa4fe27bd4_01903841($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('search_box.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="panel-fix">
  <div class="panel-heading">
    <h1 class="panel-title"><?php if (isset($_smarty_tpl->tpl_vars['name']->value)) {
echo $_smarty_tpl->tpl_vars['name']->value;
}?>     <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['print_url']->value;?>
" class="pull-right glyphicon glyphicon-print"></a></h1>

  </div>
  <div class="panel-body">
  
<table class="table table-hover table-condensed">

<thead>
<tr>

<th class="active center hidden-xs">STT</th>
<th class="active">

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
<th class="active">Giỏ hàng</th>
<th class="active visible-xs"></th>
</tr>
</thead>


<?php echo $_smarty_tpl->getSubTemplate ('tbody.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</tr>
<tr>
<td colspan="7" class="text-right"><ul class="pagination pagination-sm"><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
</ul></td>
</tr>
</table>

 </div>
</div>

<?php if (isset($_smarty_tpl->tpl_vars['seo']->value['page_title'])) {?>
<div class="panel panel-fix6">
  <div class="panel-heading">
    <h2 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['seo']->value['page_title'];?>
</h2>
  </div>
  <div class="panel-body">
  <div style="max-height: 400px; overflow: auto;">
    <?php echo $_smarty_tpl->tpl_vars['seo']->value['page_detail'];?>

    </div>
  </div>
</div>
<style>

.panel-fix6 h1 {
    background: white url(/style/images/panel-icon.png) no-repeat left;
    padding-left: 30px;
    color: #ff5400;
    font-weight: bold;
    line-height: 30px;
    margin: 0;
    line-height: 35px;
    border-bottom: 1px solid #cccccc;
}
.panel-fix6 .panel-body h1, .panel-fix6 .panel-body h2,.panel-fix6 .panel-body h3,.panel-fix6 .panel-body h4,.panel-fix6 .panel-body h5
{
    font-size: 14px;
}
</style>
<?php }?><?php }} ?>
