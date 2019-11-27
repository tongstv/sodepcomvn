<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-02-17 12:46:49
         compiled from "template/home.htm" */ ?>
<?php /*%%SmartyHeaderCode:14048643925c68f549232326-50650154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77d0e0f28e42410ef9a2a6c8bb07b01cb8fd0b66' => 
    array (
      0 => 'template/home.htm',
      1 => 1543334552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14048643925c68f549232326-50650154',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nav' => 0,
    'paging' => 0,
    'seo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5c68f549278754_79007626',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c68f549278754_79007626')) {function content_5c68f549278754_79007626($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('search_box.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="panel-fix">
  <div class="panel-heading">
    <h3 class="panel-title">SIM SỐ ĐẸP</h3>
  </div>
  <div class="panel-body">
   <ul id="navigation">
<?php echo $_smarty_tpl->tpl_vars['nav']->value;?>

</ul>
<br />
<br />
<div class="line"></div>
<div class="clearfix line"></div>
<table class="table table-hover fix">

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
<th class="active ">Nhà mạng</th>
<th class="active hidden-xs text-center">Thể loại</th>
<th class="active text-center">Đặt mua</th>
<th class="active hidden-xs text-center ">Giỏ hàng</th>

</tr>
</thead>

<?php echo $_smarty_tpl->getSubTemplate ('tbody.htm', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<tr>
<td colspan="7" class="text-right"><div class="pagination pagination-sm"><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
</div></td>
</tr>
</table>



 </div>
 
</div>




<?php if (isset($_smarty_tpl->tpl_vars['seo']->value['page_title'])) {?>
<div id="seocontent">
<div class="panel panel-fix6 hidden-xs">
  <div class="panel-heading">
    <h2 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['seo']->value['page_title'];?>
</h2>
  </div>
  <div class="panel-body">
  <div style="max-height: 400px; overflow: auto;">
  <div class="table-responsive">   <?php echo $_smarty_tpl->tpl_vars['seo']->value['page_detail'];?>
</div>
 
    </div>
  </div>
</div>
</div>


<?php }?>
<?php }} ?>
