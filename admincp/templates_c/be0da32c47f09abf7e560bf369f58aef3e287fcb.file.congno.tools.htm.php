<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-11-23 12:13:48
         compiled from "/usr/local/lib/php/app/adm/templates/congno.tools.htm" */ ?>
<?php /*%%SmartyHeaderCode:16263785245bf78c8c2a9401-25995232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be0da32c47f09abf7e560bf369f58aef3e287fcb' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/congno.tools.htm',
      1 => 1540224319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16263785245bf78c8c2a9401-25995232',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'alert' => 0,
    'config' => 0,
    'data' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5bf78c8c337563_50138977',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bf78c8c337563_50138977')) {function content_5bf78c8c337563_50138977($_smarty_tpl) {?>   <div class="container"><div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Công cụ công nợ</h2>
  </div>
  <div class="panel-body">

<form method="POST" class="form-horizontal" id="fr">

  <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
  
  <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
  <?php }?>
  
  <?php if (isset($_smarty_tpl->tpl_vars['alert']->value)) {?>
  
  <div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
</div>
  <?php }?>

<div class="form-group">
<div class="col-md-6"><div class="input-group">
<div class="input-group-addon">Từ ngày</div>
<input type="text" value="<?php if (isset($_POST['sdate'])) {
echo $_POST['sdate'];
} else { ?>01/01/2000<?php }?>" name="sdate" class="form-control datef" />
</div>
</div>
<div class="col-md-6"><div class="input-group">
<div class="input-group-addon">Đến ngày</div>
<input type="text" value="<?php if (isset($_POST['edate'])) {
echo $_POST['edate'];
}?>" name="edate" class="form-control datef" />
</div></div>

</div>

<div class="form-group text-center">
<label class="control-label"></label>
<input type="radio" name="status" checked="" value="0" />Tất cả
<input type="radio" name="status" value="1" />Đang dư ĐL
<input type="radio" name="status" value="2" />Đang nợ ĐL
<input type="radio" name="status" value="3" />Đã Thanh toán
</div>
<div class="form-group text-center">


<div class="btn-group">
<button class="btn btn-success" name="baocao">Tạo báo cáo</button>
<a class="btn btn-default" name="email" id="email"  data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Gửi email báo công nợ</a>
<button class="btn btn-info" name="excell" id="excell">Xuất ra excell</button>
<input type="hidden" name="submit" />
</div>

<div class="collapse" id="collapseExample">
  <div class="well">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h2 class="panel-title">Gửi email thông báo công nợ</h2>
  </div>
  <div class="panel-body">

<div class="form-group">
<label class="col-sm-3 control-label text-right">Tới:</label>
<div class="col-sm-9"><input type="text" name="to" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['to'];?>
" class="form-control"></div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label text-right">Tiêu đề:</label>
<div class="col-sm-9"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['title'];?>
" name="title" class="form-control"></div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label text-right">Nội dung:</label>
<div class="col-sm-9"><textarea name="body" rows="10" class="form-control"><?php echo $_smarty_tpl->tpl_vars['config']->value['body'];?>
</textarea></div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label text-right">Chữ ký:</label>
<div class="col-sm-9"><textarea name="footer" rows="5" class="form-control"><?php echo $_smarty_tpl->tpl_vars['config']->value['footer'];?>
</textarea></div>
</div>

<div class="form-group">
<button name="sendmail">Gửi email</button>
</div>
  </div>
</div>
  </div>
  
  
</div>


</div>







</form>


<?php if (isset($_smarty_tpl->tpl_vars['data']->value)) {?>

<table class="table table-bordered table-striped">
<thead>
<tr>
<th class="active text-center">STT</th>
<th class="active">Đại lý</th>
<th class="active">Số GD</th>
<th class="active">Giá ĐL</th>
<th class="active">Giá Bán</th>
<th class="active">Tự thu</th>
<th class="active">Phí</th>
<th></th>
</tr>
</thead>
<tbody>

<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['d'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['d']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['name'] = 'd';
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['data']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total']);
?>
<?php $_smarty_tpl->tpl_vars['row'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']], null, 0);?>
<tr>

<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['row']->value['stt'];?>
</td>

<td class=""><a class="ajax" href="index.php?ajax=congno&daily=<?php echo $_smarty_tpl->tpl_vars['row']->value['daily'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['fullname'];?>
</a></td>
<td class="text-center"><?php echo number_format($_smarty_tpl->tpl_vars['row']->value['c']);?>
</td>
<td class=""><?php echo number_format(($_smarty_tpl->tpl_vars['row']->value['gianhap']*1000));?>
</td>
<td class=""><?php echo number_format(($_smarty_tpl->tpl_vars['row']->value['giaban']*1000));?>
</td>
<td class=""><?php echo number_format(($_smarty_tpl->tpl_vars['row']->value['tuthu']*1000));?>
</td>
<td class=""><?php echo number_format(($_smarty_tpl->tpl_vars['row']->value['phi']*1000));?>
</td>
<td class=""><a target="_blank"  href="index.php?ajax=congno.ex&daily=<?php echo $_smarty_tpl->tpl_vars['row']->value['daily'];
if (isset($_POST['edate'])) {?>&edate=<?php echo $_POST['edate'];
}
if (isset($_POST['sdate'])) {?>&sdate=<?php echo $_POST['sdate'];
}?>">EX</a></td>

</tr>
<?php endfor; endif; ?>

</tbody>
</table>

<?php }?>

  </div>
</div>
</div>

<link rel="stylesheet" href="/apps/css/bootstrap-datepicker.min.css" />
      
    <?php echo '<script'; ?>
 src="/apps/js/bootstrap-datepicker.vi.min.js"><?php echo '</script'; ?>
>    
            
<link rel="stylesheet" href="/apss/css/chosen.css">
<?php echo '<script'; ?>
 src="/apps/js/chosen.js"><?php echo '</script'; ?>
>

     
      <?php echo '<script'; ?>
>
      
      $(function(){
   
   $("#excell").click(function(){
    
    $("#fr").attr('action','index.php?ajax=congno.tools');
    
   });
   
     $("#email").click(function(){
    
    $("#fr").attr('action','index.php?do=congno.tools');
    
   });
        
        $(".chosen").chosen({ search_contains: true, width: "300px" });
        $(".datef").datepicker({
                    format: "dd/mm/yyyy"
                });
                

$(document).ajaxComplete(function(){
       $(".chosen").chosen({ search_contains: true, width:"100%" });
       $(".chosen").trigger("liszt:updated");
       
       $('.date').datepicker({
        format: "dd/mm/yyyy"
});
       
       
       $("#link").click(function(e){
       $(this).attr('href','index.php?ajax=congno.sms&daily='+$("input[name='dlx']").val()+'&sdate='+$("input[name='sdate']").val()+'&edate='+$("input[name='edate']").val());
        
    });
    
    
})



              });
              
      <?php echo '</script'; ?>
>
      <?php }} ?>
