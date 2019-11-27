<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-03-05 09:28:32
         compiled from "/usr/local/lib/php/app/adm/templates/setting.htm" */ ?>
<?php /*%%SmartyHeaderCode:19356077055c7dded0198022-41838176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1dcf1a937209a26dbf04552498889bb50e1e5e5' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/setting.htm',
      1 => 1540224319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19356077055c7dded0198022-41838176',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'alert' => 0,
    'title' => 0,
    'panel' => 0,
    'paneltitle' => 0,
    'menu' => 0,
    'menutext' => 0,
    'icon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5c7dded01e7629_90956564',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7dded01e7629_90956564')) {function content_5c7dded01e7629_90956564($_smarty_tpl) {?><div class="container">
<div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Cấu hình tùy chỉnh cá nhân hóa trang admin</h2>
  </div>
  <div class="panel-body">
   
     <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
     
     <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
     <?php }?>
     
     <?php if (isset($_smarty_tpl->tpl_vars['alert']->value)) {?>
     
     <div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
</div>
     <?php }?>
    <form method="POST" class="form-horizontal">
    <?php echo '<script'; ?>
 src="/apps/js/colpick.js" type="text/javascript"><?php echo '</script'; ?>
>
    
    <link rel="stylesheet" href="/apps/css/colpick.css" />
      <link href="/apps/css/upload.css" rel="stylesheet">
<?php echo '<script'; ?>
 src="/apps/js/upload.min.js"><?php echo '</script'; ?>
>

    <div class="form-group">
    <label class="col-sm-3 control-label text-right">Icon biểu tượng</label>
    <div class="col-sm-9"><div id="fileuploader">Upload</div></div>
    </div>
    
    <div class="form-group">
    <label class="col-sm-3 control-label text-right">Tiêu đề trang admin</label>
    <div class="col-sm-9"><input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" class="form-control"></div>
    </div>
    
    
    <div class="form-group">
    <label class="col-sm-3 control-label text-right">Mầu nền thanh panel</label>
    <div class="col-sm-4"><input type="text" name="panel" value="<?php echo $_smarty_tpl->tpl_vars['panel']->value;?>
" class="col form-control"></div>
    <div class="col-sm-4"><input type="text" name="paneltitle" value="<?php echo $_smarty_tpl->tpl_vars['paneltitle']->value;?>
" placeholder="Mẫu chữ" class="col form-control"></div>
    </div>
    
    <div class="form-group">
    <label class="col-sm-3 control-label text-right">Mầu nền thanh menu</label>
    <div class="col-sm-4"><input type="text" name="menu" value="<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>
" class="col form-control"></div>
     <div class="col-sm-4"><input type="text" name="menutext" placeholder="Mầu chữ menu" value="<?php echo $_smarty_tpl->tpl_vars['menutext']->value;?>
" class="col form-control"></div>
    </div>
    
    <div class="form-group">
    <input type="hidden" name="icon" value="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
">
    <button name="submit" class="btn btn-success center-block">Lưu cấu hình</button>
    </div>
    
    
    </form>
  </div>
</div>

</div>


<?php echo '<script'; ?>
>
$(document).ready(function(){
    
    $('.col').colpick({
    layout:'hex',
    submit:0,
    colorScheme:'dark',
    onChange:function(hsb,hex,rgb,el,bySetColor) {
        $(el).css('border-color','#'+hex);
        // Fill the text box just if the color was set using the picker, and not the colpickSetColor function.
        if(!bySetColor) $(el).val('#'+hex);
    }
    }).keyup(function(){
        $(this).colpickSetColor('#'+this.value);
    });
$("#fileuploader").uploadFile({
	url:"index.php?ajax=setting.upload",
	fileName:"icon",
 
    onSuccess:function(files,data,xhr,pd)
    {
        $("input[name='icon']").val('/data/'+files);
        img += '<input type="hidden" name="icon" value="/data/'+files+'">';
        $("#fileuploader").html(img);
    }
	});
    
})
<?php echo '</script'; ?>
><?php }} ?>
