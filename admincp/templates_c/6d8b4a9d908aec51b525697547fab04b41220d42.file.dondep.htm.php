<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-12-10 15:01:11
         compiled from "/usr/local/lib/php/app/adm/templates/dondep.htm" */ ?>
<?php /*%%SmartyHeaderCode:5810666125c0e1d474c2329-81469888%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d8b4a9d908aec51b525697547fab04b41220d42' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/dondep.htm',
      1 => 1540224319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5810666125c0e1d474c2329-81469888',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'alert' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5c0e1d475278a5_73286468',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0e1d475278a5_73286468')) {function content_5c0e1d475278a5_73286468($_smarty_tpl) {?><div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Dọn dẹp và tối ưu database</h2>
  </div>
  <div class="panel-body">
   
<form method="POST">

<span style="color: red;"><strong>Quý khách chú ý:</strong> Thực hiện vào lúc máy chủ đang chạy nhanh
<br />
Bởi vì chức năng này rất tốn ram.
<br />
Nếu website đang chậm ko lên thực hiện

<br />
Lên thực hiện từng lệnh 1
</span>
<br />
Chức năng giúp xóa bỏ dữ liệu dư thừa, Tối ưu dữ liệu website sẽ nhanh hơn

    <button class="btn center-block btn-success">Thực hiện</button>
    <div class="text-left" style="width: 300px; margin: 0 auto;">
    <?php if (isset($_smarty_tpl->tpl_vars['alert']->value)) {?>
    <div class="alert"><?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
</div>
    <?php }?>
    <input type="checkbox" name="fixid" value="1" />&nbsp;Fix auto simso.id
    <br />
    <input type="checkbox" name="orders" value="1" />&nbsp;Xóa đơn hàng đã hủy lâu hơn 30 ngày
    <br />
    <input type="checkbox" name="lichsuchecksim" value="1" />&nbsp;Xóa lịch sử check sim lâu hơn 30 ngày
    <br />
    <input type="checkbox" name="myevent" value="1" />&nbsp;Xóa sự kiện đã hoàn thành lâu hơn 7 ngày
    <br />
    <input type="checkbox" name="fix" value="1" />&nbsp; Sửa chữa  cơ sở dữ liệu & tối ưu
    <br />
    
    <input type="checkbox" name="delevent" value="1" />&nbsp; Xóa hết sự kiện
    </div>
    </form
</div>
<?php }} ?>
