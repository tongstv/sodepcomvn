<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-11-23 16:38:41
         compiled from "/usr/local/lib/php/app/adm/templates/sms.huongdan.htm" */ ?>
<?php /*%%SmartyHeaderCode:20512279065bf7caa126aee9-80862847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb3b48781ba3769b5e915eac0995e9d8427d6188' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/sms.huongdan.htm',
      1 => 1540224319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20512279065bf7caa126aee9-80862847',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'domain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5bf7caa12a6f35_77762342',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bf7caa12a6f35_77762342')) {function content_5bf7caa12a6f35_77762342($_smarty_tpl) {?>      <form class="ajax-form form-horizontal" action="index.php?ajax=<?php echo $_GET['ajax'];?>
">
      <input name="submit" value="true" type="hidden" />
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Hướng dẫn cấu hình</h4>
      </div>
      <div class="modal-body">
    <strong> ** Yêu cầu máy điện thoại sử dụng hệ điều hành android **</strong>
     <br />
     Truy cập link: <strong><a href="https://play.google.com/store/apps/details?id=sms.gate">https://play.google.com/store/apps/details?id=sms.gate</a></strong>
     <br />
     Tải phần mềm về
     <br />
     Cài đặt xong mở ứng dụng lên cấu hình như sau:
     <br />
     1. vào mục <strong>config incoming sms</strong>
     <br />
     coppy: <?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/index.php?ajax=smsapi
     <br />
     
     paste vào: <strong>url or phone redirect (*)</strong>
     <br />
     Nhấn Appy All
     <br />
     2. vào mục config sms web
     <br />
       coppy: <?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/index.php?ajax=smsapi
       <br />
       
       paster vào <strong>url(*)</strong>
     <br />
     3.
     vào mục config password
     <br />
     Nhập mật khẩu là: <strong>123</strong>
     
     <br />
     Sau đó vào mục  config sms web nhấn <strong>on</strong> để ứng dụng làm việc
     
     
     <br />
     
     =============================================
     <br />
   <strong>Ứng dụng mới</strong>
    <br />
    Ưu điểm ( Tự động start khi tắt máy)
    <br />
    Nhắn tin ổn định ko lỗi
    <br />
    Nhược điểm, nhắn tin chậm 1 phút mới đồng bộ 1 lần
     <br />
     <a target="_blank" href="https://onedrive.live.com/redir?resid=FA81DF5047210D0B!194059&authkey=!ALsmnUcwvLH21LA&ithint=file%2capk">
    Tải ứng dụng smsync
    </a>
     <br />
     Link cấu hình :
     <?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/smssync
     <br />
     secret: 123
    </div>
    
    
      </form>
      
                  <?php }} ?>
