<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-11-24 16:49:57
         compiled from "/usr/local/lib/php/app/adm/templates/users.add.htm" */ ?>
<?php /*%%SmartyHeaderCode:4611654265bf91ec52ff679-79245047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29092837705115b2bb4ce1b13a2eac44a3f5f96b' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/users.add.htm',
      1 => 1540224319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4611654265bf91ec52ff679-79245047',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5bf91ec532f452_26989150',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bf91ec532f452_26989150')) {function content_5bf91ec532f452_26989150($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/usr/local/php56/lib/php/app/lib/libs/plugins/function.html_options.php';
?> <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Thêm tài khoản</h4>
      </div>
      <div class="modal-body">
        
        <form class="form-horizontal ajax-form" action="index.php?ajax=users.addsubmit">
        
             
          <div class="form-group">
        <label class="control-label col-md-4">Email:</label>
        <div class="col-md-8">
        <input name="email" class="form-control"  />
        </div>  
        </div>   
    
        
        <div class="form-group">
        <label class="control-label col-md-4">Mật khẩu:</label>
        <div class="col-md-8">
        <input name="password" type="password" class="form-control"  />
        </div>  
        </div>
        
        <div class="form-group">
        <label class="control-label col-md-4">Họ và tên:</label>
        <div class="col-md-8">
        <input name="fullname" class="form-control"  />
        </div>  
        </div>
        
        <div class="form-group">
        <label class="control-label col-md-4">Địa chỉ:</label>
        <div class="col-md-8">
        <input name="address" class="form-control"  />
        </div>  
        </div>
        
        <div class="form-group">
        <label class="control-label col-md-4">Điện thoại:</label>
        <div class="col-md-8">
        <input name="phone" class="form-control"  />
        </div>  
        </div>

      
        
        <div class="form-group">
        <label class="control-label col-md-4">Phân quyền:</label>
        <div class="col-md-8">
        <select name="perm" class="form-control">
         <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['options']->value,'output'=>$_smarty_tpl->tpl_vars['options']->value,'selected'=>''),$_smarty_tpl);?>

        </select>
        </div>  
        </div>
        <div class="form-group"> <button type="submit" class="btn btn-primary center-block">Thêm tài khoản</button></div>
        
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
      </div><?php }} ?>
