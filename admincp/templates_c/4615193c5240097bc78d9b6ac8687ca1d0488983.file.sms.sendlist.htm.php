<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-01-09 10:14:19
         compiled from "/usr/local/lib/php/app/adm/templates/sms.sendlist.htm" */ ?>
<?php /*%%SmartyHeaderCode:13482620145c35670ba71929-95891354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4615193c5240097bc78d9b6ac8687ca1d0488983' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/sms.sendlist.htm',
      1 => 1540224319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13482620145c35670ba71929-95891354',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mobile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5c35670bab26c9_51452247',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c35670bab26c9_51452247')) {function content_5c35670bab26c9_51452247($_smarty_tpl) {?>      <form class="ajax-form form-horizontal" action="index.php?ajax=<?php echo $_GET['ajax'];?>
">
      <input name="submit" value="true" type="hidden" />
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Gửi tin nhắn tới danh sách</h4>
      </div>
      <div class="modal-body">
     
       <div class="form-group form-group-sm">
       <label class="control-label col-md-4">Danh sách nhận:</label>
       <div class="col-md-6">
          <textarea name="list" rows="10" cols="40"><?php echo $_smarty_tpl->tpl_vars['mobile']->value;?>

</textarea>
      <a class="ajax" href="index.php?ajax=sms.sendlist&all=1">Tải danh bạ đại lý để sms</a>
      
      |  <a class="ajax" href="index.php?ajax=sms.sendlist&all=1&3t=1">3 Tháng chưa gửi bảng</a>
       </div>
       </div>

        <div class="form-group form-group-sm">
        <label class="control-label col-md-4">Nội dung</label>
        <div class="col-md-6">
        <textarea name="msg" rows="10" cols="40"></textarea>
        </div>
        </div>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-primary">Gửi tin nhắn</button>
      </div>
    </div>
      </form>
      
                  <?php }} ?>
