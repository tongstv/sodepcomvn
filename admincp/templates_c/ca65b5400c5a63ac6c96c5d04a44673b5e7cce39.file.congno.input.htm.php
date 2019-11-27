<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-01-13 11:56:50
         compiled from "/usr/local/lib/php/app/adm/templates/congno.input.htm" */ ?>
<?php /*%%SmartyHeaderCode:8942574895c3ac512ddbc52-16539916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca65b5400c5a63ac6c96c5d04a44673b5e7cce39' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/congno.input.htm',
      1 => 1540224319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8942574895c3ac512ddbc52-16539916',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'alert' => 0,
    'options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5c3ac512e5dfd6_67761955',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c3ac512e5dfd6_67761955')) {function content_5c3ac512e5dfd6_67761955($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/usr/local/php56/lib/php/app/lib/libs/plugins/function.html_options.php';
?><!DOCTYPE html>
<html lang="vi, en">
   <head>
      <title>Đơn Hàng</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <?php echo '<script'; ?>
 src="/apps/js/jquery.min.js"><?php echo '</script'; ?>
>
      <link href="/apps/css/bootstrap.min.css" rel="stylesheet" media="screen">
      <link rel="stylesheet" href="/apps/css/bootstrap-theme.min.css">
      <link rel="stylesheet" href="/apps/css/style.css">
      <?php echo '<script'; ?>
 src="/apps/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/apps/js/jquery.confirm.min.js"><?php echo '</script'; ?>
>
<link href="/apps/css/bootstrap-editable.css" rel="stylesheet"/>
<link href="/apps/css/style.css" rel="stylesheet"/>
<?php echo '<script'; ?>
 src="/apps/js/bootstrap-editable.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/apps/js/scriptlibs.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/apps/js/admin.js"><?php echo '</script'; ?>
>



      <?php if (isset($_REQUEST['dlid'])) {?>
      <input type="hidden" name="dlid" value="<?php echo $_REQUEST['dlid'];?>
" />
      <?php }?>
     
      <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
      <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
      <?php }?>
      <?php if (isset($_smarty_tpl->tpl_vars['alert']->value)) {?>
      <div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
</div>
      <?php }?>
   

<form method="POST">

<div class="form-group form-group-sm">
<label class="control-label col-md-3">Lựa chọn đại lý</label>
<div class="col-md-7">
   <select class="form-control input-sm chosen" name="daily">
    <option value="0">Chọn đại lý</option>
  
    <?php ob_start();?><?php echo $_GET['daily'];?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['options']->value['id'],'output'=>$_smarty_tpl->tpl_vars['options']->value['name'],'selected'=>$_tmp1),$_smarty_tpl);?>

    </select>
    <button name="submit" class="btn btn-sm btn-success">Nhập dữ liệu</button>
</div>
</div>
<div  class="clearfix"></div>
<br />
<h3>Dữ liệu nhập vào copy từ excel hoặc cách nhau bởi dấu # nếu nhập tay </h3>
<div class="form-group form-group-sm">

<table class="table table-hover table-condensed table-bordered">
<thead>
    <tr>
    <th class="aactive">Ngày</th>
    <th class="aactive">Khách hàng</th>
    <th class="aactive">Số sim</th>
    <th class="aactive">Giá nhập</th>
    <th class="aactive">HH</th>
     <th class="aactive">Giá bán</th>
      <th class="aactive">Tự thu</th>
    </tr>
</thead>
<tr>
<td colspan="7">
<textarea name="data" style="height: 300px;width: 100%;"><?php if (isset($_SESSION['loi'])) {
echo $_SESSION['loi'];
}?></textarea>
</td>
</tr>
</table>
</div>

</form>

<link rel="stylesheet" href="/apps/css/chosen.css">
<?php echo '<script'; ?>
 src="/apps/js/chosen.js"><?php echo '</script'; ?>
>
     
      <?php echo '<script'; ?>
>
      $(function(){
        $(".chosen").chosen({ search_contains: true, width: "100%" });
       
      });
      <?php echo '</script'; ?>
>
   </body>
</html><?php }} ?>
