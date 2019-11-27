<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-11-23 12:05:34
         compiled from "/usr/local/lib/php/app/adm/templates/congno.chot.htm" */ ?>
<?php /*%%SmartyHeaderCode:20545537345bf78a9ea8d8f3-97911213%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f433b111f4587a45a64bb5965b977523613ce9c' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/congno.chot.htm',
      1 => 1540224319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20545537345bf78a9ea8d8f3-97911213',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'alert' => 0,
    'fullname' => 0,
    'id' => 0,
    'sotien' => 0,
    'data' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5bf78a9eb16462_72113968',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bf78a9eb16462_72113968')) {function content_5bf78a9eb16462_72113968($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/usr/local/php56/lib/php/app/lib/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<html lang="vi, en">
   <head>
      <title>Chốt công nợ</title>
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

<link rel="stylesheet" href="/apps/css/datepicker.css" />
<?php echo '<script'; ?>
 type="text/javascript" src="/apps/js/bootstrap-datepicker.js"><?php echo '</script'; ?>
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
   



<div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
    <li role="presentation"><a href="#lichsu" aria-controls="lichsu" role="tab" data-toggle="tab">Lịch sử thanh toán</a></li>

  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
      
      <form class="form-horizontal" method="POST">
      <br />
      
      <div class="form-group form-group-sm">
      <label class="control-label col-md-4">Đại lý:</label>
      <div class="col-md-6">
       <strong><?php echo $_smarty_tpl->tpl_vars['fullname']->value;?>
</strong>
       <input name="fullname" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['fullname']->value;?>
" />
      <input name="daily" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
      </div>
      </div>
        <div class="form-group form-group-sm">
        <label class="control-label col-sm-4">Chốt đến ngày:</label>
        <div class="col-sm-6">
        <div class="input-group">
         <input name="date" value="<?php if (isset($_GET['edate'])&&$_GET['edate']!='') {
echo $_GET['edate'];
} else {
echo smarty_modifier_date_format(time(),'d/m/Y H:j:s');
}?>" data-old="<?php echo smarty_modifier_date_format(time(),'d/m/Y H:j:s');?>
" class="form-control" />
         <div class="input-group-addon"><a class="glyphicon glyphicon-calendar" id="date_select" href="javascript://"></a></div>
        
        </div>
       
        </div>
        </div>
    
        <div class="form-group form-group-sm">
        <label class="control-label col-md-4">Số tiền:</label>
        <div class="col-md-6">
        <input name="sotien" value="<?php echo number_format($_smarty_tpl->tpl_vars['sotien']->value);?>
"  class="price form-control" />
        </div>
        </div>
    
    <div class="form-group form-group-sm">
    <label class="control-label col-md-4">Ghi chú:</label>
    <div class="col-md-6">
    <textarea name="note" class="form-control" rows="10" style="height: 50px;"></textarea>
    
    </div>
    </div>
    
    <div class="form-group form-group-sm">
   
    <?php if ($_smarty_tpl->tpl_vars['sotien']->value<0) {?>
    
   <button name="submit" class="btn btn-sm btn-danger center-block">Xác nhận đã thanh toán</button>
    <?php } else { ?>
    <button name="submit" class="btn btn-sm btn-success center-block">Xác nhận đã nhận tiền</button>
    <input type="hidden" name="type" value="1" />
    <?php }?>
    </div>
      </form>
    
    
    </div>
    
    
        <div role="tabpanel" class="tab-pane active" id="lichsu">
      
    <table class="table table-bordered table-striped">
   <thead>
        <tr>
            <th class="active">STT</th>
            <th class="active">Ngày</th>
              <th class="active">Số tiền</th>
              <th class="active"></th>
              <th class="active">Ghi chú</th>
        </tr>
   </thead>
   
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
   <td></td>
     <td> 
     
     
     <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['date'],'d/m/Y H:j:s');?>
</td>
       <td><?php echo number_format($_smarty_tpl->tpl_vars['row']->value['sotien']);?>
</td>
         <td>
         <?php if ($_smarty_tpl->tpl_vars['row']->value['type']==1) {?>
      <strong class="text-info">   Đã Nhận</strong>
         <?php } else { ?>
       <strong class="red">  Đã Thanh toán cho đại lý</strong>
         <?php }?>
         </td>
           <td><?php echo $_smarty_tpl->tpl_vars['row']->value['note'];?>
</td>
   
   </tr>
   <?php endfor; endif; ?>
    </table>
    </div>
    
    
    
    </div>
    
    
  </div>

<link rel="stylesheet" href="/apps/css/chosen.css">
<?php echo '<script'; ?>
 src="/apps/js/chosen.js"><?php echo '</script'; ?>
>
     
      <?php echo '<script'; ?>
>
      $(function(){
   
   
      
       $("input[name='date']").datepicker({
                    format: "dd/mm/yyyy <?php echo smarty_modifier_date_format(time(),'H:j:s');?>
"
                }).on('changeDate', function(ev){


$mydate=$("input[name='date']").val();

$.get("index.php?ajax=congno.gettien&daily=<?php echo $_GET['daily'];?>
&date="+$mydate, function( data ) {

$("input[name='sotien']").val(data);
});


     
     
});



});
      <?php echo '</script'; ?>
>
   </body>
</html><?php }} ?>
