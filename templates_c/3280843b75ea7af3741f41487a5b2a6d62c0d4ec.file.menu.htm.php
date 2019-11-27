<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-02-17 12:46:11
         compiled from "template/menu.htm" */ ?>
<?php /*%%SmartyHeaderCode:6412465415c68f52309fcc2-26197569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3280843b75ea7af3741f41487a5b2a6d62c0d4ec' => 
    array (
      0 => 'template/menu.htm',
      1 => 1543333882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6412465415c68f52309fcc2-26197569',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'thisdomain' => 0,
    'menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5c68f5230a6372_26188518',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c68f5230a6372_26188518')) {function content_5c68f5230a6372_26188518($_smarty_tpl) {?>
<nav class="navbar navbar-default" id="navbar">

    <div class="navbar-header">
  
    
       <button style="border: 1px solid black;" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span style="color: red; background-color: red;" class="icon-bar"></span>
        <span style="color: red; background-color: red;" class="icon-bar"></span>
        <span style="color: red; background-color: red;" class="icon-bar"></span>
      </button>
    
  <a  href="<?php echo $_smarty_tpl->tpl_vars['thisdomain']->value;?>
">
      <img class="visible-xs" src="/images/logo.png?"  alt="sim so dep" style="float: left; margin-left:0px; margin-bottom: 10px; z-index: 1; position: absolute;" />
      </a>
    
    </div>
      <a  href="<?php echo $_smarty_tpl->tpl_vars['thisdomain']->value;?>
">
      <img class="hidden-xs" src="/images/logo.png?"  alt="sim so dep" style="float: left; margin-bottom: 10px; z-index: 1; position: absolute; margin-left: 5px;" />
      </a>
  
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right" style="margin-right: 
      50px;">
    <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>
 
      </ul>

    </div>

   
</nav>
<?php }} ?>
