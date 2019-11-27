<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-11-23 15:55:58
         compiled from "/usr/local/lib/php/app/adm/templates/sim.quickremove.htm" */ ?>
<?php /*%%SmartyHeaderCode:14815276205bf7c09e632633-62177582%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2edda7d4c205d3265d60e833f9e757f6f1c7bd56' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/sim.quickremove.htm',
      1 => 1540224319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14815276205bf7c09e632633-62177582',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'alert' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5bf7c09e66ffb2_87055872',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bf7c09e66ffb2_87055872')) {function content_5bf7c09e66ffb2_87055872($_smarty_tpl) {?><div class="container">

  <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
  
  <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
  <?php }?>
  
  <?php if (isset($_smarty_tpl->tpl_vars['alert']->value)) {?>
  
  <div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
</div>
  <?php }?>
<div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Xóa nhanh sim</h2>
  </div>
  <div class="panel-body">
  <form method="POST">
   <div class="row">
  
   <button class="btn btn-sm btn-danger center-block">Xóa nhanh danh sách</button>
   <br />
  </div>
  <div class="row">

  
  <textarea class="center-block"  name="data" cols="40" rows="20" placeholder="0914779999
0973357777"></textarea>

  </div>
 
 
  </form>
  </div>
</div>
</div><?php }} ?>
