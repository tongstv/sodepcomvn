<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-03-15 14:06:03
         compiled from "template/cod.htm" */ ?>
<?php /*%%SmartyHeaderCode:5696503695c8b4edbd0d3b6-78096936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cef6c38a03639597e87e02ff245213e1d2c594db' => 
    array (
      0 => 'template/cod.htm',
      1 => 1422772752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5696503695c8b4edbd0d3b6-78096936',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'alert' => 0,
    'simcard' => 0,
    'date_send' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5c8b4edbde81a7_36823443',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8b4edbde81a7_36823443')) {function content_5c8b4edbde81a7_36823443($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/usr/local/lib/php/app/lib/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<html lang="vi, en">
   <head>
      <title>Kiểm tra đơn hàng</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <?php echo '<script'; ?>
 src="../js/jquery.min.js"><?php echo '</script'; ?>
>
      <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
      <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
      <link rel="stylesheet" href="../css/style.css">
      <?php echo '<script'; ?>
 src="../js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../js/jquery.confirm.min.js"><?php echo '</script'; ?>
>
<link href="../css/bootstrap-editable.css" rel="stylesheet"/>
<link href="../css/style.css" rel="stylesheet"/>
<?php echo '<script'; ?>
 src="../js/bootstrap-editable.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../js/scriptlibs.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../js/admin.js"><?php echo '</script'; ?>
>

<link rel="stylesheet" href="../css/chosen.css">
<?php echo '<script'; ?>
 src="../js/chosen.js"><?php echo '</script'; ?>
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
   



      <form action="index.php?ajax=<?php echo $_GET['ajax'];?>
" class="form-inline" method="POST">

    <div class="form-group form-group-sm">
<label class="control-label">Số sim đặt mua:</label>
<input name="simcard" class="form-control" style="max-width: 300px;" />
<button class="btn btn-success">Check</button>
    </div>
   

   
      </form>
    
<?php if (isset($_smarty_tpl->tpl_vars['simcard']->value)&&$_smarty_tpl->tpl_vars['simcard']->value!='') {?>
    <br />
    <table class="table table-hover table-condensed">
    
    <thead>
    <tr>
    <th class="active" colspan="2">Thông tin vận đơn</th>
    </tr>
    </thead>
    <tr>
    
        <td><strong>Số sim:</strong></td>
        <td><?php echo $_smarty_tpl->tpl_vars['simcard']->value;?>
</td>
    </tr>
    <tr>
        <td><strong>Ngày chuyển:</strong></td>
        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['date_send']->value,'d/m/Y');?>
</td>
    </tr>
    <?php if ($_smarty_tpl->tpl_vars['name']->value) {?>
    <tr>
        <td><strong>Họ tên khách hàng:</strong></td>
        <td><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td>
    </tr>
    <?php }?>
    </table>
    
    </table>
<?php }?>
    </body>
    </html><?php }} ?>
