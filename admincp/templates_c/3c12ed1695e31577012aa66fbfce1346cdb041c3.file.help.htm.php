<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-11-24 17:34:24
         compiled from "/usr/local/lib/php/app/adm/templates/help.htm" */ ?>
<?php /*%%SmartyHeaderCode:11202662015bf92930b0dc39-79008947%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c12ed1695e31577012aa66fbfce1346cdb041c3' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/help.htm',
      1 => 1540224319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11202662015bf92930b0dc39-79008947',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'video' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5bf92930b44267_33530276',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bf92930b44267_33530276')) {function content_5bf92930b44267_33530276($_smarty_tpl) {?>      <form class="ajax-form form-horizontal" action="index.php?ajax=<?php echo $_GET['ajax'];?>
">
      <input name="submit" value="true" type="hidden" />
      
<!--- EDIT--->

<input name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" type="hidden" />
<!------> 


    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Trợ giúp / Hướng dẫn</h4>
      </div>
      <div class="modal-body">
     
  
  
  <?php if ($_smarty_tpl->tpl_vars['video']->value) {?>
  
  <iframe width="100%" height="315" src="<?php echo $_smarty_tpl->tpl_vars['video']->value;?>
" frameborder="0" allowfullscreen></iframe>
  <br />
  Để xem video chất lượng cao các bạn click vào biểu tượng cài đặt góc phải video
  <br />
  Chọn chất lượng video HD
  <?php } else { ?>
  
  Chưa có video hướng dẫn cho chức năng này!
  <br />
  Chúng tôi sẽ cập nhật sớm nhất!
  <br />
 <strong> Chú ý: </strong>Mỗi mục sẽ có video hướng dẫn riêng
  <br />
  Quý khách muốn xem hướng dẫn mục nào truy cập vào mục đó và nhấn <strong>help</strong>
  <?php }?>
  
  

<br />
Để xem tất cả video hướng dẫn bạn truy cập <a href="https://www.youtube.com/channel/UCpK1GXaNj1dYccpdoT41YgA/videos?view=0&sort=dd&shelf_id=0" target="_blank">kenh33.com</a>
     
     <br />
     <br />
     ================ Dành Cho khách hàng mới bắt đầu ================ 
 <br />
<a href="/apps/ultraview.exe" target="_blank">Tải về phần mềm hướng dẫn trực tiếp </a>
<br />

Skype: tongstv
<br />
Skype: 

<br />
Hotline: <strong>0125.875.9999</strong>:  mr. Hiếu

<br />
Vấn đề nghiêm trọng: <strong>0914.77.9999</strong>
<br />
   ================ Dành Cho khách hàng mới bắt đầu ================ 

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
      </form>
      
                  <?php }} ?>
