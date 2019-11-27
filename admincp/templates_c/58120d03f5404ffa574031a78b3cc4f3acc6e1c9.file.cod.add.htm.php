<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-11-24 16:40:00
         compiled from "/usr/local/lib/php/app/adm/templates/cod.add.htm" */ ?>
<?php /*%%SmartyHeaderCode:18807013805bf91c7090ff02-62454001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58120d03f5404ffa574031a78b3cc4f3acc6e1c9' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/cod.add.htm',
      1 => 1540224319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18807013805bf91c7090ff02-62454001',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5bf91c7094b954_85601794',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bf91c7094b954_85601794')) {function content_5bf91c7094b954_85601794($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/usr/local/php56/lib/php/app/lib/libs/plugins/modifier.date_format.php';
?>
      <form class="ajax-form form-horizontal" action="index.php?ajax=<?php echo $_GET['ajax'];?>
">
      <input name="submit" value="true" type="hidden" />
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Thêm cod</h4>
      </div>
      <div class="modal-body">
     
       <div class="form-group form-group-sm">
       <label class="control-label col-md-4">Ngày chuyển</label>
       <div class="col-md-6">
       <input name="date_send" value="<?php echo smarty_modifier_date_format(time(),'d/m/Y');?>
" class="form-control" />
       </div>
       </div>

        <div class="form-group form-group-sm">
        <label class="control-label col-md-4">Số sim:</label>
        <div class="col-md-6">
        <input data-toggle="tooltip" data-placement="bottom" title="Chỉ cần nhập số sim và nhấn tìm dữ liệu khách hàng sẽ được lấy từ công nợ điền vào" name="simcard" class="form-control" />
        <a class="find glyphicon glyphicon-search" href="javascript://">Tìm</a>
        </div>
        </div>
     
     <div class="form-group form-group-sm">
     <label class="control-label col-md-4">Giá tiền:</label>
     <div class="col-md-6">
     <input name="price"  onkeyup="executeComma(event,this)" class="form-control" />
     </div>
     </div>
     
     
     <div class="form-group form-group-sm">
     <label class="control-label col-md-4">Mã cod:</label>
     <div class="col-md-6">
     <input name="code" class="form-control" />
     </div>
     </div>
     
     <div class="form-group form-group-sm">
     <label class="control-label col-md-4">Họ tên:</label>
     <div class="col-md-6">
     <input name="name" class="form-control" />
     </div>
     </div>
     
     <div class="form-group form-group-sm">
     <label class="control-label col-md-4">Điên thoại:</label>
     <div class="col-md-6">
     <input name="phone" class="form-control" />
     </div>
     </div>
     
     <div class="form-group form-group-sm">
     <label class="control-label col-md-4">Không thu tiền</label>
     <div class="col-md-6">
     <input name="noprice" type="checkbox"/>
     </div>
     </div>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-primary">Thêm</button>
      </div>
    </div>
      </form>
    <?php }} ?>
