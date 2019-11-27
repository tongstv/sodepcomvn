<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-03-15 14:22:37
         compiled from "template/ordered.mycart.htm" */ ?>
<?php /*%%SmartyHeaderCode:541103215c8b52bd415a30-73184251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc2a958db48a61c3d9de6788576f92e888fc9d3a' => 
    array (
      0 => 'template/ordered.mycart.htm',
      1 => 1422863006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '541103215c8b52bd415a30-73184251',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mycart' => 0,
    'k' => 0,
    'v' => 0,
    'tt' => 0,
    'thisdomain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5c8b52bd4ee8c3_83763191',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8b52bd4ee8c3_83763191')) {function content_5c8b52bd4ee8c3_83763191($_smarty_tpl) {?>   
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Giỏ hàng của bạn</h4>
      </div>
      <div class="modal-body">
     

    <table class="table table-condensed table-bordered table-striped">
    <tr>
    <thead>
        <th class="active text-center"></th>
        <th class="active">Số sim</th>
        <th class="active">Giá tiền (VNĐ)</th>
        <th class="active"></th>
    </thead>
    </tr>
    <?php $_smarty_tpl->tpl_vars['tt'] = new Smarty_variable(0, null, 0);?>
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['mycart']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['f']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['f']['index']++;
?>
    
    <tr>
        <td class="text-center"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['f']['index']+1;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</td>
        <td><?php echo number_format(($_smarty_tpl->tpl_vars['v']->value*1000000));?>
 VNĐ</td>
        <td class="text-center"><a href="javascript://" class="delcart" data-sim="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"> <i class="glyphicon glyphicon-trash text-danger"></i></a></td>
    </tr>
    <?php $_smarty_tpl->tpl_vars['tt'] = new Smarty_variable($_smarty_tpl->tpl_vars['tt']->value+$_smarty_tpl->tpl_vars['v']->value, null, 0);?>
    <?php } ?>
    <tr>
    <td class="active" colspan="4">
    <h5 class="pull-right">
    Tổng tiền: <span id="total"><?php echo number_format(($_smarty_tpl->tpl_vars['tt']->value*1000000));?>
</span> VNĐ
    </h5>
    </td>
    </tr>
    </table>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Chọn tiếp</button>
        <?php if (isset($_smarty_tpl->tpl_vars['k']->value)) {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['thisdomain']->value;?>
/mua-sim-trong-gio-hang.html" class="btn btn-success">Mua sim trong giỏ</a>
        <?php }?>
      </div>
    </div>
      </form>
    <?php }} ?>
