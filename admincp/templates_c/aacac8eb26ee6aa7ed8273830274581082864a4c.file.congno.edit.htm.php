<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-11-23 12:06:56
         compiled from "/usr/local/lib/php/app/adm/templates/congno.edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:14525997795bf78af045d357-71878562%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aacac8eb26ee6aa7ed8273830274581082864a4c' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/congno.edit.htm',
      1 => 1541604747,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14525997795bf78af045d357-71878562',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'ngay' => 0,
    'options' => 0,
    'daily' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5bf78af04aee95_57990711',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bf78af04aee95_57990711')) {function content_5bf78af04aee95_57990711($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/usr/local/php56/lib/php/app/lib/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_html_options')) include '/usr/local/php56/lib/php/app/lib/libs/plugins/function.html_options.php';
?>      <form class="ajax-form form-horizontal" action="index.php?ajax=<?php echo $_GET['ajax'];?>
">
      <input name="submit" value="true" type="hidden" />
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Sửa công nợ</h4>
      </div>
      <div class="modal-body">
     
     
     <div class="form-group form-group-sm">
     <label class="control-label col-md-4">Ngày:</label>
     <div class="col-md-6">
      <input name="id" class="form-control" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
     <input name="ngay" class="form-control" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['ngay']->value,'d/m/Y');?>
" />
     </div>
     </div>
     
     <div class="form-group form-group-sm">
     <label class="control-label col-md-4">Đại lý:</label>
     <div class="col-md-6">
        <select class="form-control input-sm chosen" name="daily">
    <option value="0">Xem theo đại lý</option>
    <?php if (isset($_GET['daily'])&&$_GET['keyword']=='') {?>
    <?php $_smarty_tpl->tpl_vars['dlid'] = new Smarty_variable($_GET['daily'], null, 0);?>
    <?php }?>
    <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['options']->value['id'],'output'=>$_smarty_tpl->tpl_vars['options']->value['name'],'selected'=>$_smarty_tpl->tpl_vars['daily']->value),$_smarty_tpl);?>

    </select>

     </div>
     </div>


     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-primary">Chỉnh sửa</button>
      </div>
    </div>
      </form>
    <?php }} ?>
