<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-12-24 09:36:54
         compiled from "/usr/local/lib/php/app/adm/templates/cod.edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:2996822065c20464678b3c8-61025315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6257f8b120eb8b1ee20db2e9ed7825a342feada0' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/cod.edit.htm',
      1 => 1540224319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2996822065c20464678b3c8-61025315',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'date_send' => 0,
    'simcard' => 0,
    'price' => 0,
    'code' => 0,
    'name' => 0,
    'phone' => 0,
    'noprice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5c2046467e1475_61724303',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c2046467e1475_61724303')) {function content_5c2046467e1475_61724303($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/usr/local/php56/lib/php/app/lib/libs/plugins/modifier.date_format.php';
?>
      <form class="ajax-form form-horizontal" action="index.php?ajax=<?php echo $_GET['ajax'];?>
">
      <input name="submit" value="true" type="hidden" />
       <input name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" type="hidden" />
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Sửa cod</h4>
      </div>
      <div class="modal-body">
     
       <div class="form-group form-group-sm">
       <label class="control-label col-md-4">Ngày chuyển</label>
       <div class="col-md-6">
       <input name="date_send" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['date_send']->value,'d/m/Y');?>
" class="form-control" />
       </div>
       </div>

        <div class="form-group form-group-sm">
        <label class="control-label col-md-4">Số sim:</label>
        <div class="col-md-6">
        <input name="simcard" value="<?php echo $_smarty_tpl->tpl_vars['simcard']->value;?>
" class="form-control" />
        </div>
        </div>
     
     <div class="form-group form-group-sm">
     <label class="control-label col-md-4">Giá tiền:</label>
     <div class="col-md-6">
     <input name="price" value="<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
"  onkeyup="executeComma(event,this)" class="form-control" />
     </div>
     </div>
     
     
     <div class="form-group form-group-sm">
     <label class="control-label col-md-4">Mã cod:</label>
     <div class="col-md-6">
     <input name="code" value="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" class="form-control" />
     </div>
     </div>
     
     <div class="form-group form-group-sm">
     <label class="control-label col-md-4">Họ tên:</label>
     <div class="col-md-6">
     <input name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="form-control" />
     </div>
     </div>
     
     <div class="form-group form-group-sm">
     <label class="control-label col-md-4">Điên thoại:</label>
     <div class="col-md-6">
     <input name="phone" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
" class="form-control" />
     </div>
     </div>
     
     <div class="form-group form-group-sm">
     <label class="control-label col-md-4">Không thu tiền</label>
     <div class="col-md-6">
     <?php if ($_smarty_tpl->tpl_vars['noprice']->value) {?>
     <input name="noprice" type="checkbox" checked="checked"/>
     <?php } else { ?>
     <input name="noprice" type="checkbox"/>
     <?php }?>
     
     </div>
     </div>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-primary">Sửa Cod</button>
      </div>
    </div>
      </form>
    <?php }} ?>
