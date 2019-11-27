<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-01-27 13:54:55
         compiled from "/usr/local/lib/php/app/adm/templates/thanhtoan.htm" */ ?>
<?php /*%%SmartyHeaderCode:18920964535c4d55bf11d394-60264023%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b03d0653746bf2adf40a9f2836675588495bec59' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/thanhtoan.htm',
      1 => 1540224319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18920964535c4d55bf11d394-60264023',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'thu' => 0,
    'chi' => 0,
    'conlai' => 0,
    '_search_txt' => 0,
    '_search' => 0,
    'data' => 0,
    'row' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5c4d55bf1a1dd1_19232228',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4d55bf1a1dd1_19232228')) {function content_5c4d55bf1a1dd1_19232228($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/usr/local/php56/lib/php/app/lib/libs/plugins/modifier.date_format.php';
?><div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Thanh toán<a href="index.php?do=congno" class="pull-right"><strong style="color: white;">Công Nợ</strong></a></h2>
  </div>
  <div class="panel-body">
   
<div class="text-center">Thu: <strong style="color: green;"><?php echo $_smarty_tpl->tpl_vars['thu']->value;?>
</strong> VNĐ -- Chi <strong style="color: red;"><?php echo $_smarty_tpl->tpl_vars['chi']->value;?>
</strong> VNĐ -- Số dư: <strong style="color: blue;"><?php echo $_smarty_tpl->tpl_vars['conlai']->value;?>
</strong>  VCB</div>
<div class="pull-left">
<form class="form-inline" action="index.php">
<div class="form-group">
<input type="hidden" name="do" value="<?php echo $_GET['do'];?>
" />
<input name="keyword" class="form-control input-sm" placeholder="<?php echo $_smarty_tpl->tpl_vars['_search_txt']->value;?>
" />
<button class="btn btn-warning btn-sm"> <i class="glyphicon glyphicon-search"></i><?php echo $_smarty_tpl->tpl_vars['_search']->value;?>
</button>
</div>
</form>

</div>
<form method="POST">
<div class="btn-group pull-right">
<a class="btn btn-default" href="index.php?do=<?php echo $_GET['do'];?>
">ALL</a>
<a class="btn btn-success" href="index.php?do=<?php echo $_GET['do'];?>
&type=1">Thu tiền</a>
<a class="btn btn-danger" href="index.php?do=<?php echo $_GET['do'];?>
&type=0">Chi tiền</a>
<a class="btn btn-default" href="index.php?ajax=<?php echo $_GET['do'];?>
.excell">excel</a>
</div>




<table class="table table-hover table-condensed" id="tablesort">
<thead>
    <tr>
        <th class="active text-center">STT</th>
                <th class="active text-center noSort">Ngày</th>
        <th class="active">Đại lý</th>
         <th class="active text-center noSort">Số tiền</th>
         
 
           <th class="active text-center noSort">Nội dung</th>
                     <th class="active text-center noSort">Thu/Chi</th>
         
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
    <tr <?php if ($_smarty_tpl->tpl_vars['row']->value['type']==1) {?> style="background:#EFFDD7" <?php } else { ?> style="background: #F9EBEB;" <?php }?>">
        <td class="text-center col-md-1"><?php echo $_smarty_tpl->tpl_vars['row']->value['stt'];?>
</td>
           <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['date'],'d/m/Y H:j:s');?>
</td>
        <td>
        <a class="ajax" href="index.php?ajax=congno&tt=1&daily=<?php echo $_smarty_tpl->tpl_vars['row']->value['daily'];?>
"> <?php echo $_smarty_tpl->tpl_vars['row']->value['fullname'];?>
</a>
       </td>
          <td><?php echo number_format(($_smarty_tpl->tpl_vars['row']->value['sotien']*1000));?>
</td>
        
             <td><?php echo $_smarty_tpl->tpl_vars['row']->value['note'];?>
</td>
                 <td>
                 
                 <?php if ($_smarty_tpl->tpl_vars['row']->value['type']==1) {?>
                 <div class="badge text-success" style="background: green;">Thu tiền</div>
                
                 <?php } else { ?>
      <div class="badge text-danger" style="background: red;">Chi tiền</div>
             <?php }?>
                 
                 </td>
   
    </tr>
<?php endfor; endif; ?>    
</table>
</form>
<div class="pull-right"><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
</div>
  </div>
</div>
<?php echo '<script'; ?>
 src="/apps/js/tablesort.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>

$(function(){
<?php if ($_smarty_tpl->tpl_vars['row']->value['stt']) {?>
var theHeaders = {}
    $(this).find('th.noSort').each(function(i,el){
        theHeaders[$(this).index()] = { sorter: false };
    });

$("#tablesort").tablesorter({
    
headers: theHeaders
    
});
<?php }?>
});
<?php echo '</script'; ?>
><?php }} ?>
