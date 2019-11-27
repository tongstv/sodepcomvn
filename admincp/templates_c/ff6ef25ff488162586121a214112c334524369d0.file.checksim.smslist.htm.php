<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-11-23 12:26:18
         compiled from "/usr/local/lib/php/app/adm/templates/checksim.smslist.htm" */ ?>
<?php /*%%SmartyHeaderCode:9103423115bf78f7a33c576-82106744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff6ef25ff488162586121a214112c334524369d0' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/checksim.smslist.htm',
      1 => 1540224319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9103423115bf78f7a33c576-82106744',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5bf78f7a3763c6_04403208',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bf78f7a3763c6_04403208')) {function content_5bf78f7a3763c6_04403208($_smarty_tpl) {?>      <form class="ajax-form form-horizontal" action="index.php?ajax=<?php echo $_GET['ajax'];?>
">
      <input name="submit" value="true" type="hidden" />
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Nhắn list số</h4>
      </div>
      <div class="modal-body">
     
       <div class="form-group form-group-sm">
       <label class="control-label col-md-4">To:</label>
       <div class="col-md-6">
       <input name="mobile" class="form-control" />
       </div>
       </div>

        <div class="form-group form-group-sm">
        <label class="control-label col-md-4">Nội dung:</label>
        <div class="col-md-6">
        <textarea name="msg" rows="15" cols="35"><?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {
echo $_smarty_tpl->tpl_vars['msg']->value;
}?></textarea>
        </div>
        </div>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-primary">Nhắn tin</button>
      </div>
    </div>
      </form>
      
                  <?php }} ?>
