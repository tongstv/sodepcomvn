<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-12-26 15:55:59
         compiled from "/usr/local/lib/php/app/adm/templates/webdesign.htm" */ ?>
<?php /*%%SmartyHeaderCode:5850049375c23421fa4e7b5-90458999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08fc41c16ba0f816c9a6f4bea6d626200e8ef1ec' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/webdesign.htm',
      1 => 1540224319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5850049375c23421fa4e7b5-90458999',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'body' => 0,
    'tophotline' => 0,
    'navbar_custom' => 0,
    'panel_heading' => 0,
    'btn_danger' => 0,
    'new_footer' => 0,
    'fontval' => 0,
    'fontselect' => 0,
    'css' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5c23421fa9ac88_43701659',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c23421fa9ac88_43701659')) {function content_5c23421fa9ac88_43701659($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/usr/local/php56/lib/php/app/lib/libs/plugins/function.html_options.php';
?>

<div  class="text-center"><a href="#" onclick="$('nav').hide();">Ẩn menu</a> <a href="#" onclick="$('nav').show()">Hiện menu</a></div>
  <div class="row">
<div class="row">
<form class="form-horizontal" method="POST" id="design">
<div class="col-sm-9">
<div class="row">
<iframe id="if" src="../index.php" width="100%" height="600px" style="border: 0;"></iframe>
</div>
</div>

<div class="col-sm-3">
<div class="row">
<div class="panel panel-danger">
  <div class="panel-heading">
    <h2 class="panel-title">Thiết kế mầu sắc</h2>
  </div>
  <div class="panel-body">
    
            <div class="form-group">
      
      <label class="control-label col-md-4">Mầu nền</label>
      <div class="col-md-7">
      
    <input class="form-control c" data-mode="gradient" value="<?php echo $_smarty_tpl->tpl_vars['body']->value;?>
" name="body" id="body"  placeholder="Mầu nền web" />

      </div>
      </div>
      
              <div class="form-group">
      
      <label class="control-label col-md-4">Top bar</label>
      <div class="col-md-7">
      
    <input class="form-control c" data-mode="gradient" value="<?php echo $_smarty_tpl->tpl_vars['tophotline']->value;?>
" name="tophotline" id="tophotline"  placeholder="Mầu nền top bar" />

      </div>
      </div>
      
      
      
      
                  <div class="form-group">
      
      <label class="control-label col-md-4">Mầu menu</label>
      <div class="col-md-7">
      
    <input class="form-control c" data-mode="gradient" name="navbar_custom" value="<?php echo $_smarty_tpl->tpl_vars['navbar_custom']->value;?>
" id="menu"  placeholder="Mầu menu" />

      </div>
      </div>
      
        
          <div class="form-group">
      
      <label class="control-label col-md-4">Mầu các thanh</label>
      <div class="col-md-7">
      
    <input class="form-control c" data-mode="gradient" name="panel_heading" id="panel" value="<?php echo $_smarty_tpl->tpl_vars['panel_heading']->value;?>
"  placeholder="Mầu các thanh" />

      </div>
      </div>

      
        <div class="form-group">
        
        <label class="control-label col-md-4">Mầu các nút</label>
        <div class="col-md-7">
        
        <input class="form-control c" data-mode="gradient" name="btn_danger" value="<?php echo $_smarty_tpl->tpl_vars['btn_danger']->value;?>
" placeholder="Mầu nút" id="btn" />
        </div>
        </div>
        
        
              <div class="form-group">
        
        <label class="control-label col-md-4">Mầu nền chân trang</label>
        <div class="col-md-7">
        
        <input class="form-control c" data-mode="gradient" name="new_footer" value="<?php echo $_smarty_tpl->tpl_vars['new_footer']->value;?>
" placeholder="Mầu nền chân trang" id="newfooter" />
        </div>
        </div>
        
        
                      <div class="form-group">
        
        <label class="control-label col-md-4">FONTS Chữ</label>
        <div class="col-md-7">
        
        
        
        
         <select name="fonts" class="form-control input-sm">
    <option value="">Chọn font chữ</option>
    <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['fontval']->value,'output'=>$_smarty_tpl->tpl_vars['fontval']->value,'selected'=>$_smarty_tpl->tpl_vars['fontselect']->value),$_smarty_tpl);?>

    </select>
        </div>
        </div>
        
        
          <div class="form-group">
          
          <label class="control-label col-md-4">Css tùy chỉnh</label>
          <div class="col-md-7">
          
          <textarea name="css" rows="6" cols="20" ><?php echo $_smarty_tpl->tpl_vars['css']->value;?>
</textarea>
          </div>
          </div>
            <div class="form-group text-center">
            <button class="btn btn-success" name="submit">Lưu thay đổi</button>
                  <button class="btn btn-danger" name="del">Xóa thay đổi</button>
            </div>
            
            <div class="text-center">
            <a href="index.php?ajax=webdesign.getclass" target="_blank">Xem khối css</a>
            <br />
          <a href="https://www.youtube.com/watch?v=Cx1XjEDmlxM" target="_blank">Hướng dẫn tùy chỉnh mầu nâng cao</a>
            </div>
      
      
  </div>
</div>
</div>
</div>
</form>

</div>


            

        </div>
       




<link rel="stylesheet" href="/apps/design/design/css/prism.css">
<link rel="stylesheet" href="/apps/design/design/css/asColorPicker.css">
<?php echo '<script'; ?>
 src="/apps/design/design/libs/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/apps/design/design/js/jquery.toc.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/apps/design/design/js/prism.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/apps/design/design/libs/jquery-asColor.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/apps/design/design/libs/jquery-asGradient.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/apps/design/design/src/core.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/apps/design/design/src/trigger.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/apps/design/design/src/alpha.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/apps/design/design/src/buttons.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/apps/design/design/src/gradient.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/apps/design/design/src/hue.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/apps/design/design/src/buttons.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/apps/design/design/src/hex.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/apps/design/design/src/info.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/apps/design/design/src/keyboard.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/apps/design/design/src/palettes.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/apps/design/design/src/preview.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/apps/design/design/src/saturation.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/apps/design/design/src/clear.js"><?php echo '</script'; ?>
>

 <?php echo '<script'; ?>
>
      $(document).ready(function() {
       
      
      function back()
      {
      
         $("#if").contents().find('.btn-danger').css('background',$("#btn").val());
         
        
            $("#if").contents().find('.tophotline, .inner').css('background',$("#tophotline").val());
         
        
      
          
           
         $("#if").contents().find('.navbar-custom, .navbar-default').css('background',$('#menu').val());
           
  
           $("#if").contents().find('body').css('background',$('#body').val());
           
   
            $("#if").contents().find('.panel-heading').css('background',$('#panel').val());
     
             $("#if").contents().find('.new-footer').css('background',$('#newfooter').val());
      
      }
          $(".c").asColorPicker({
   
      onChange: back
     
      });
      
       $('iframe').height( $(window).height() );
        $(window).resize(function(){
            $('iframe').height( $(this).height() );
        });
      
    
      $(".s").asColorPicker();
      
   
             
              $("#if").contents().find(".container").css('width','100%');
         
          $('#if').load(function(){
  $("#if").contents().find(".container").css('width','100%');
  back();
})
      });
   <?php echo '</script'; ?>
>
<style>
   .asColorPicker-dropdown {
   background: white none repeat scroll 0% 0%;
   padding: 10px;
   border: 1px solid #BBB;
   min-width: 260px;
   max-width: 250px;
   }
   .asColorPicker-trigger
   {
   float: right;
   margin-top: -35px;
   height: 34px;
   }
   .panel-title
   {
   color: inherit;
   }
</style>

<?php }} ?>
