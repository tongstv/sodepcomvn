<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-02-17 12:47:57
         compiled from "template/ordered.htm" */ ?>
<?php /*%%SmartyHeaderCode:14324621735c68f58d425a41-93936522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee146edd2af5e60d586e3c8e9f51c88f59ad8654' => 
    array (
      0 => 'template/ordered.htm',
      1 => 1543553815,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14324621735c68f58d425a41-93936522',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'thisdomain' => 0,
    'mycart' => 0,
    'data' => 0,
    'row' => 0,
    'tt' => 0,
    'ttdoctien' => 0,
    'city' => 0,
    'goimua' => 0,
    'datmua' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5c68f58d4ba026_49339192',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c68f58d4ba026_49339192')) {function content_5c68f58d4ba026_49339192($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/usr/local/lib/php/app/lib/libs/plugins/function.html_options.php';
?><?php echo '<script'; ?>
 src="/apps/js/jquery.min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['thisdomain']->value;?>
/apps/css/chosen.css">

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['thisdomain']->value;?>
/apps/js/chosen.js"><?php echo '</script'; ?>
>
<div class="panel-fix">
  <div class="panel-heading">
    <h1 class="panel-title">Đặt mua sim số đẹp <?php if (isset($_GET['sosim'])) {
echo $_GET['sosim'];
}?></h1>
  </div>
  <div class="panel-body">
      <form class="form-horizontal" method="POST" id="ordered" action="index.php?do=ordered.done" onsubmit="return checkorder()">
   <table class="table table-condensed table-bordered" >
   <thead>
   <tr>
    <th class="active text-center col-md-1">STT</th>
     <th class="active text-center">Số sim</th>
      <th class="active text-center">Giá tiền</th>
      <?php if (isset($_smarty_tpl->tpl_vars['mycart']->value)) {?>
      <th class="active"></th>
      <?php }?>
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
   
   <input type="hidden" name="simdlx[<?php echo $_smarty_tpl->tpl_vars['row']->value['sim1'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['simdl'];?>
" />
   <input type="hidden" name="sim[<?php echo $_smarty_tpl->tpl_vars['row']->value['sim1'];?>
]" value="<?php echo ($_smarty_tpl->tpl_vars['row']->value['giaban']*1000000);?>
" />
   <?php echo $_smarty_tpl->getVariable('smarty')->value['section']['d']['index']+1;?>
</td>
   <td class="text-center"><strong style="font-size: 16px;"><?php echo $_smarty_tpl->tpl_vars['row']->value['sim1'];?>
</strong></td>
   <td class="text-center"><?php echo number_format(($_smarty_tpl->tpl_vars['row']->value['giaban']*1000000));?>
 vnđ<br /> (<?php echo $_smarty_tpl->tpl_vars['row']->value['doctien'];?>
)</td>

   <td class="text-center"><a href="javascript://" class="delcart" data-sim="<?php echo $_smarty_tpl->tpl_vars['row']->value['sim2'];?>
"> <i class="glyphicon glyphicon-trash text-danger"></i></a></td>
 
   </tr>
   <?php endfor; endif; ?>
   <?php if (isset($_smarty_tpl->tpl_vars['mycart']->value)) {?>
    <tr>
    <td colspan="2" class="text-center">   <strong>Tổng tiền</strong> </td>
     <td colspan="2" class="text-center">  <?php if (isset($_smarty_tpl->tpl_vars['tt']->value)) {?><span id="total"><strong><?php echo number_format(($_smarty_tpl->tpl_vars['tt']->value*1000000));?>
</strong></span> <strong>VNĐ</strong> <strong class="doifont">( <?php echo $_smarty_tpl->tpl_vars['ttdoctien']->value;?>
 )</strong></td><?php }?>

    </tr>
    <?php }?>
   </table>
   

   <div class="row">
   <div class="col-md-8">

   
   <div class="form-group ">
   <label class="control-label col-md-4">Họ và tên: <span class="red">(*)</span></label>
   <div class="col-md-7">
   <input name="fullname" class="form-control input-lg" required="" />
   </div>
   </div>
   
      <div class="form-group ">
   <label class="control-label col-md-4">Điện thoại: <span class="red">(*)</span></label>
   <div class="col-md-7">
   <input name="phone" type="tel" class="form-control input-lg" required="" />
   </div>
   </div>
   
      <div class="form-group hidden-xs">
   <label class="control-label col-md-4">Tỉnh/TP: <span class="red">(*)</span></label>
   <div class="col-md-7">
  <input type="hidden" name="city" />

   <select id="city" class="form-control city input-lg">
   <option value="0">Chọn Tỉnh/TP</option>
   <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['city']->value),$_smarty_tpl);?>

   </select>
   </div>
   </div>
   
         <div class="form-group ">
   <label class="control-label col-md-4">Địa chỉ: <span class="red">(*)</span></label>
   
   <div class="col-md-7">

    <textarea name="address" class="form-control"></textarea>
   </div>
   </div>
   
   

   
      <div class="form-group hidden-xs ">
   <label class="control-label col-md-4">Ghi chú:</label>
   <div class="col-md-7">
   <textarea class="form-control" name="note" style="height: 50px;"></textarea>
  
   </div>
   </div>
   
   
   <div class="form-group ">
   <div class="col-md-12">
        <div class="text-center">
           <button name="submit" class="btn btn-success btn-lg">Đặt mua</button>  <button type="reset" class="btn btn-danger btn-lg">Làm lại</button>
    </div>
   </div>
   </div>

   </form>
   </div>
   <div class="col-md-4 hidden-xs"><?php if (isset($_smarty_tpl->tpl_vars['goimua']->value['detail'])) {?>
<?php echo $_smarty_tpl->tpl_vars['goimua']->value['detail'];?>

<?php }?></div>
   
  
   
    </div>   

  </div>
</div>


<?php if (isset($_smarty_tpl->tpl_vars['datmua']->value['detail'])) {?>
<div class="panel-fix">
  <div class="panel-heading">
    <h2 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['datmua']->value['title'];?>
</h2>
  </div>
  <div class="panel-body">
  <?php echo $_smarty_tpl->tpl_vars['datmua']->value['detail'];?>

  </div>
</div>
<?php }?>



        <?php echo '<script'; ?>
>
                    $(function(){
                       
                        $("#city").change(function(){
                            index=$(this).find('option:selected').val();
                            $(".district").remove();
                            $(".se1").remove();
                            $.get('<?php echo $_smarty_tpl->tpl_vars['thisdomain']->value;?>
/index.php?ajax=city.getdistrict&id='+index).done(function(data){
                           
                         
                             
                            });
                            
                            city=$("#city").find('option:selected').text();
                            $("input[name='city']").val(city);
                            
                        });
                        
                        if($(window).width() < 600)
                        {
                            $("input[name='city']").val('Mobile');
                            
                            
                        }
                        $(document).on('change','.district',function(){
                             index=$(this).find('option:selected').val();
                            $(".se2").remove();
                            $.get('<?php echo $_smarty_tpl->tpl_vars['thisdomain']->value;?>
/index.php?ajax=city.getward&id='+index).done(function(data){
                           
                              $(".district").parents('.form-group').after(data);
                            
                    
                            });
                            qh=$(".se1").find('option:selected').text();
                            $("input[name='qh']").val(qh);
                        });
                      
                      
                      
                      
                                 $(document).on('change','.ward',function(){
                           
                            px=$(".se2").find('option:selected').text();
                            $("input[name='px']").val(px);
                        });
                        
                        
                         $(".city").chosen({ search_contains: true, width: "100%" });
                    })
                  
               <?php echo '</script'; ?>
>
               <?php }} ?>
