<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-12-03 18:31:52
         compiled from "/usr/local/lib/php/app/adm/templates/cachemanager.htm" */ ?>
<?php /*%%SmartyHeaderCode:16426612035c051428961be2-24660681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e595a4800ad789b165601cbe017984212b0d306' => 
    array (
      0 => '/usr/local/lib/php/app/adm/templates/cachemanager.htm',
      1 => 1540224319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16426612035c051428961be2-24660681',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5c05142898f752_30656239',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c05142898f752_30656239')) {function content_5c05142898f752_30656239($_smarty_tpl) {?><div class="container">
<div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Quản lý cache</h2>
  </div>
  <div class="panel-body">
    <table class="table table-hover table-condensed" >
    <thead>
    
        <tr>
        <th class="active center">STT</th>
          <th class="active center">Mục</th>
           <th class="active"></th>
        </tr>
    </thead>
    
    <tr>
    <td class="center">1</td>
        <td class="center">Cache seo</td>
        <td><a href="index.php?do=cachemanager&del=seo" class="btn btn-sm btn-danger"> <i class="glyphicon glyphicon-trash"></i> Xóa</a></td>
      
    </tr>
    
        <tr>
    <td class="center">2</td>
        <td class="center">Page cache</td>
        <td><a href="index.php?do=cachemanager&del=page" class="btn btn-sm btn-danger"> <i class="glyphicon glyphicon-trash"></i> Xóa</a></td>
      
    </tr>
    
        <tr>
    <td class="center">3</td>
        <td class="center">Menu cache</td>
        <td><a href="index.php?do=cachemanager&del=menu"  class="btn btn-sm btn-danger"> <i class="glyphicon glyphicon-trash"></i> Xóa</a></td>
      
    </tr>
    
            <tr>
    <td class="center">4</td>
        <td class="center">Cache đếm trang</td>
        <td><a href="index.php?do=cachemanager&del=num_rows"  class="btn btn-sm btn-danger"> <i class="glyphicon glyphicon-trash"></i> Xóa</a></td>
      
    </tr>
    
    </table>
  </div>
</div>

</div><?php }} ?>
