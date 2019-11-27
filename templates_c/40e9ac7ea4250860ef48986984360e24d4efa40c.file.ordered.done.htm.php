<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-02-17 17:35:23
         compiled from "template/ordered.done.htm" */ ?>
<?php /*%%SmartyHeaderCode:2523092245c6938eb3f2772-62879787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40e9ac7ea4250860ef48986984360e24d4efa40c' => 
    array (
      0 => 'template/ordered.done.htm',
      1 => 1431415736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2523092245c6938eb3f2772-62879787',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'row' => 0,
    'doctien' => 0,
    'tt' => 0,
    'tongtien' => 0,
    'fullname' => 0,
    'address' => 0,
    'city' => 0,
    'phone' => 0,
    'note' => 0,
    'dathangxong' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5c6938eb44b3b8_71888120',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c6938eb44b3b8_71888120')) {function content_5c6938eb44b3b8_71888120($_smarty_tpl) {?>
<div class="panel-fix">
  <div class="panel-heading">
    <h4 class="panel-title">Đặt hàng thành công</h4>
  </div>
  <div class="panel-body">
   <table class="table table-condensed table-bordered" >
   <thead>
   <tr>
    <th class="active text-center col-md-1">STT</th>
     <th class="active text-center">Số sim</th>
      <th class="active text-center">Giá tiền</th>
     
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
   
   <td class="center">
   

   <?php echo $_smarty_tpl->getVariable('smarty')->value['section']['d']['index']+1;?>
</td>
   <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['row']->value['sosim'];?>
</td>
   <td class="text-center "><?php echo number_format(($_smarty_tpl->tpl_vars['row']->value['giatien']));?>
 vnđ <span> ( <?php echo $_smarty_tpl->tpl_vars['doctien']->value;?>
 )</span></td>


 
   </tr>
   <?php endfor; endif; ?>

    <tr>
    <td colspan="2" class="text-center font-b">Tổng tiền</td>
    <td colspan="1" class="text-center"> <span id="total" class="font-b"><?php if (isset($_smarty_tpl->tpl_vars['tt']->value)) {
echo number_format(($_smarty_tpl->tpl_vars['tt']->value));?>
 VNĐ</span> <strong class="doifont">( <?php echo $_smarty_tpl->tpl_vars['tongtien']->value;?>
 )</strong><?php }?></td>

    </tr>
  
   </table>
   
   
   <table class="table table-bordered">
   <thead>
    <tr>
        <th class="active" colspan="2">Thông tin giao hàng</th>
    </tr>
   </thead>
   <tr>
   <td>Họ và tên:</td>
   <td><?php echo $_smarty_tpl->tpl_vars['fullname']->value;?>
</td>
   </tr>
   
      <tr>
   <td>Địa chỉ:</td>
   <td><?php echo $_smarty_tpl->tpl_vars['address']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['city']->value;?>
</td>
   </tr>
   
         <tr>
   <td>Điện thoại:</td>
   <td><?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
</td>
   </tr>
   
   <?php if (isset($_smarty_tpl->tpl_vars['note']->value)) {?>
            <tr>
   <td>Ghi chú:</td>
   <td><?php echo $_smarty_tpl->tpl_vars['note']->value;?>
</td>
   </tr>
   
   <?php }?>
   </table>
   

   
  </div>
</div>

   <?php if (isset($_smarty_tpl->tpl_vars['dathangxong']->value)) {?>
   <div class="panel-fix">
     <div class="panel-heading">
       <h4 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['dathangxong']->value['title'];?>
</h4>
     </div>
     <div class="panel-body">
      <?php echo $_smarty_tpl->tpl_vars['dathangxong']->value['detail'];?>

     </div>
   </div>
   <?php }?><?php }} ?>
