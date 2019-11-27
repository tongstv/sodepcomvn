<?php
$stv->setTemplateDir(TEMPLATE);
if(isset($_GET['desktop']) AND $_GET['desktop']==1)
$_SESSION['desktop']=1;
else if(isset($_GET['desktop']) AND $_GET['desktop']==2)
{
    unset($_SESSION['desktop']);
    
}

$stv->assign('desktop',isset($_SESSION['desktop']) ? $_SESSION['desktop'] :0);

$stv->assign("cartcount",isset($_SESSION['mycart']) ? count($_SESSION['mycart']) : 0);
$stv->assign("menu",menu(1));

$stv->assign("top_menu",menu(18));
$stv->assign("thisdomain",thisdomain);


$stv->assign("menuloai",create_loai($loai['s'],$sloai));

include 'app/share/seo.php';


$seo=seo($_SERVER['REQUEST_URI'],$array1,$array2);
$stv->assign($txt->getPage('header'));
$stv->assign($seo);


$canonical = thisdomain. $_SERVER["REQUEST_URI"];

$canonical = str_replace(['index.php','index.htm','index.html'],'',$canonical);


$canonical = preg_replace('/\?page=([0-9]+)/','',$canonical);

$stv->assign("canonical",$canonical);



$stv->assign("header",getconfig('header'));

$stv->assign($config);
$stv->registerFilter("output", "minify_html");

$stvconfig['date']=date('d/m/Y');

$stv->assign($stvconfig);
if(isset($_GET['styleid']))
{
    $_SESSION['styleid']=trim($_GET['styleid']);
}

$stv->display("header.htm");
?>