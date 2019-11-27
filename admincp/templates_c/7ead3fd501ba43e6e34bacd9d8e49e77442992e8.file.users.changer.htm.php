<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-11-27 19:04:59
         compiled from "/usr/local/lib/php/app/adm/templates/users.changer.htm" */ ?>
<?php /*%%SmartyHeaderCode:19525973025bfd32ebec07b8-98695093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ead3fd501ba43e6e34bacd9d8e49e77442992e8' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/users.changer.htm',
      1 => 1540224319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19525973025bfd32ebec07b8-98695093',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'email' => 0,
    'fullname' => 0,
    'address' => 0,
    'phone' => 0,
    'option_name' => 0,
    'gender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5bfd32ebf07fd0_84953265',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bfd32ebf07fd0_84953265')) {function content_5bfd32ebf07fd0_84953265($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/usr/local/php56/lib/php/app/lib/libs/plugins/function.html_options.php';
?>      <form class="ajax-form form-horizontal" action="index.php?ajax=<?php echo $_GET['ajax'];?>
">
      <input name="submit" value="true" type="hidden" />
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Thay đổi thông tin cá nhân</h4>
      </div>
      <div class="modal-body">
     
   

<div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Thay đổi thông tin cá nhân</h2>
  </div>
  <div class="panel-body">
  
  <form method="POST" class="form-horizontal ajax-form" action="index.php?ajax=<?php echo $_GET['ajax'];?>
" autocomplete="off">
    
    <input name="submit" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" type="hidden" />
     <div class="form-group form-group-sm">
    <label class="control-label col-xs-4">Email/ Tên đăng nhập:</label>
    <div class="col-xs-6">
    <?php echo $_smarty_tpl->tpl_vars['email']->value;?>

    
    </div>
    </div>
    <div class="form-group form-group-sm">
    <label class="control-label col-xs-4">Họ và tên:</label>
    <div class="col-xs-6">
    <input name="fullname" value="<?php echo $_smarty_tpl->tpl_vars['fullname']->value;?>
" class="form-control" />
    </div>
    </div>
    
    <div class="form-group form-group-sm">
    <label class="control-label col-xs-4">Địa chỉ:</label>
    <div class="col-xs-6">
    <input name="address" value="<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
" class="form-control" />
    </div>
    </div>
    
    
    <div class="form-group form-group-sm">
    <label class="control-label col-xs-4">Điện thoại:</label>
    <div class="col-xs-6">
    <input name="phone" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
" class="form-control" />
    </div>
    </div>
    
    <div class="form-group form-group-sm">
    <label class="control-label col-xs-4">Gới tính:</label>
    <div class="col-xs-6">
   <select name="gender" class="form-control">

     <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['option_name']->value,'output'=>$_smarty_tpl->tpl_vars['option_name']->value,'selected'=>$_smarty_tpl->tpl_vars['gender']->value),$_smarty_tpl);?>

   </select>
    </div>
    </div>
    
    
    <div class="form-group form-group-sm">
    <label class="control-label col-xs-4">Mật khẩu:</label>
    <div class="col-xs-6">
    <input name="password" type="password" class="form-control" />
    </div>
    </div>
    
 
    <div class="form-group form-group-sm">
 
    <div class="col-md-12">
<button class="btn btn-success center-block">Thay đổi thông tin</button>
    </div>
    </div>
    </form>
    
    
  </div>
</div>

     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   
      </div>
    </div>
      </form>
      
                  
<?php }} ?>
