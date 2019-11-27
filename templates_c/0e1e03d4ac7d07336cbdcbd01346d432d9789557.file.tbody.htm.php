<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-02-17 12:46:49
         compiled from "template/tbody.htm" */ ?>
<?php /*%%SmartyHeaderCode:9929656915c68f54927e3c7-24536250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e1e03d4ac7d07336cbdcbd01346d432d9789557' => 
    array (
      0 => 'template/tbody.htm',
      1 => 1543332238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9929656915c68f54927e3c7-24536250',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'row' => 0,
    'thisdomain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5c68f5492a4967_66161331',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c68f5492a4967_66161331')) {function content_5c68f5492a4967_66161331($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['d'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['d']);
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
<td class="center hidden-xs"><?php echo $_smarty_tpl->tpl_vars['row']->value['stt'];?>
</td>
<td><a class="sim" href="<?php echo $_smarty_tpl->tpl_vars['thisdomain']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['sim2'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['row']->value['sim1'];?>
"><strong><?php echo $_smarty_tpl->tpl_vars['row']->value['sim1'];?>
</strong></a></td>
<td class="text-center"><strong class="bfix gia font-12"><?php echo number_format(($_smarty_tpl->tpl_vars['row']->value['giaban']*1000000));?>
</strong></td>
<td  class=" text-center"><span class="network n<?php echo $_smarty_tpl->tpl_vars['row']->value['mang'];?>
"></span></td>
<td  class="hidden-xs text-center"><a href="<?php echo $_smarty_tpl->tpl_vars['row']->value['loailink'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['loai'];?>
</a></td>

<td class=" text-center"><a rel="nofollow" href="<?php echo $_smarty_tpl->tpl_vars['thisdomain']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['sim2'];?>
" class="btn btn-sm btn-success dfix">Đặt mua</a></td>
<td class="center hidden-xs"><a data-toggle="tooltip" title="Thêm <?php echo $_smarty_tpl->tpl_vars['row']->value['sim1'];?>
 vào giỏ hàng" href="javascript://" class="addcart " data-sim="<?php echo $_smarty_tpl->tpl_vars['row']->value['sim2'];?>
" data-gia="<?php echo $_smarty_tpl->tpl_vars['row']->value['giaban'];?>
"><i class="cartbuy"></i></a></td>
</tr>
<?php endfor; endif; ?><?php }} ?>
