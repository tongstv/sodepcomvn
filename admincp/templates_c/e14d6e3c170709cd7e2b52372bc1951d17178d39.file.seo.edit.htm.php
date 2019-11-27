<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-01-25 16:18:06
         compiled from "/usr/local/lib/php/app/adm/templates/seo.edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:18569081405c4ad44ec56a24-69583027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e14d6e3c170709cd7e2b52372bc1951d17178d39' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/seo.edit.htm',
      1 => 1540224319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18569081405c4ad44ec56a24-69583027',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'url' => 0,
    'title' => 0,
    'des' => 0,
    'keyword' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5c4ad44eca2fa7_48353363',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4ad44eca2fa7_48353363')) {function content_5c4ad44eca2fa7_48353363($_smarty_tpl) {?>      <form class="ajax-form form-horizontal" action="index.php?ajax=<?php echo $_GET['ajax'];?>
">
      <input name="submit" value="true" type="hidden" />
      <input name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" type="hidden" />
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Sửa seo</h4>
      </div>
      <div class="modal-body">
     
    <div class="form-group form-group-sm">
    <label class="control-label col-md-4">Url:</label>
    <div class="col-md-6">
    <input name="url" value="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" class="form-control" />
    </div>
    </div>
    
    <div class="form-group form-group-sm">
    <label class="control-label col-md-4">Tiêu đề:</label>
    <div class="col-md-6">
    <input onkeyup="checkchar(this)" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" name="title" class="form-control" id="title" />
    <span id="etitle"></span>
    </div>
    </div>
    
    <div class="form-group form-group-sm">
    <label class="control-label col-md-4">Mô tả:</label>
    <div class="col-md-6">
    
    <textarea onkeyup="checkchar(this)" maxlength="250" name="des" cols="40" rows="5" id="des"><?php echo $_smarty_tpl->tpl_vars['des']->value;?>
</textarea>
    <span id="edes"></span>
    </div>
    </div>
    
    <div class="form-group form-group-sm">
    <label class="control-label col-md-4">Từ khóa:</label>
    <div class="col-md-6">
    <input name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" class="form-control" />
    </div>
    </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-primary">Sửa seo</button>
      </div>
    </div>
      </form>
      
      <?php echo '<script'; ?>
>
      function checkchar(input)
{
	var id=$(input).attr('id');
	
	if(id=='title')var max=69;
	else if(id=='des') var max=165;
	
	$('#e'+id).html('<br>Số ký tự còn lại: '+(max -input.value.length)+' ký tự');
		

}
<?php echo '</script'; ?>
><?php }} ?>
