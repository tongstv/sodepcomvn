<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-02-17 12:46:11
         compiled from "template/slide.menu.htm" */ ?>
<?php /*%%SmartyHeaderCode:7856697255c68f52308ada8-70559293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '603c60f896eb18e9dc1ac938a76565e3373d7a1f' => 
    array (
      0 => 'template/slide.menu.htm',
      1 => 1543334766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7856697255c68f52308ada8-70559293',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'newmenu' => 0,
    'thisdomain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5c68f52309d905_03006150',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c68f52309d905_03006150')) {function content_5c68f52309d905_03006150($_smarty_tpl) {?>
<noscript id="slidecss">


#slide .sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #fafafa;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
    z-index: 999999999999999;
}

#slide .sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

#slide .sidenav a:hover {
    color: #f1f1f1;
}

#slide .sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 0px;
    font-size: 50px;
    margin-left: 50px;
}


@media screen and (max-height: 450px) {
 #slide .sidenav {padding-top: 15px;}
 #slide .sidenav a {font-size: 18px;}
}

#slide .accordion {
    background-color: #4f6ea7;
    color: white;
    text-transform: uppercase;
    cursor: pointer;
    padding: 12px;
    width: 100%;
    text-align: left;
    border: none;
    outline: none;
    transition: 0.4s;
    border-bottom: 2px solid #fff;
}

/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
#slide .active,#slide .accordion:hover {
    background-color: #ccc;
}

/* Style the accordion panel. Note: hidden by default */
#slide .panel {
    padding: 0 18px;
    background-color: white;
    display: none;
    overflow: hidden;
}
#slide .accordion:after {
    content:"\2b"; /* Unicode character for "plus" sign (+) */
    font-size: 25px;
    color: #fff;
    float: right;
    margin-left: 5px;
}

#slide .active:after {
      font-size: 25px;
    content:"\2212";/* Unicode character for "minus" sign (-) */
}


/* Navbar links */
#slide1 .navbar1 a {
  float: left;
  text-align: center;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 16px;
}
#slide1 .navbar1 a.active
{
    padding-left: 20px;
    padding-right: 20px;

}
/* Navbar links on mouse-over */
#slide1 .navbar1 a:hover {
  background-color: #000;
  
}

/* Current/active navbar link */
#slide1 .active {
  background-color: #ff834b;
}

/* Add responsiveness - will automatically display the navbar vertically instead of horizontally on screens less than 500 pixels */
@media screen and (max-width: 500px) {
    
#slide1  .navbar1 a {
    float: none;
    display: inline-block;
    padding: 10px;
  }
  
  
  
  #slide1  .navbar1
  {
    margin: 0;
  }
  
  #slide > .slidefix
{
    list-style: none;
    padding: 15px;
}
#slide > .slidefix > li
{
    list-style: none;
}
#slide > .slidefix > li > a
{
    font-size: 13px;
}



#slide1 .navbar1 {
  width: 100%;
  background-color: #3f5c9a;
  overflow: auto;

}
}
.slidefix 
{
    padding: 5px;
}
.slidefix li
{
    list-style: none;
}
.slidefix > li > a
{
    font-size: 14px !important;
    border-bottom: 1px solid #eee;
}


#mySidenav1 a {
    position: fixed; /* Position them relative to the browser window */
    right: -160px; /* Position them outside of the screen */
    transition: 0.3s; /* Add transition on hover */
    padding: 7px; /* 15px padding */
    width: 200px; /* Set a specific width */
    text-decoration: none; /* Remove underline */
    font-size: 20px; /* Increase font size */
    color: white; /* White text color */
    border-radius: 5px 0px 0px 5px; /* Rounded corners on the top right and bottom right side */
    z-index: 9999999999999999999;
}

#mySidenav1 a:hover {
    right: 0; /* On mouse-over, make the elements appear as they should */
}



#projects {
    top: 240px;
    background-color: #3c5998; /* Red */
}

#contact {
    top: 300px;
    background-color: #ff7c26 /* Light Black */
}
#slide .panel ul
{
    list-style: none;
    padding: 0;
    margin: 0;
}
#slide .panel ul  li > a
{
    font-size: 13px;
    border-bottom: 1px solid #eee;
}
</noscript>



<h1 style="font-size: 11px; z-index: 2; position: absolute; top: -300px;;">sim số đẹp | sodep.com.vn - </h1>
<div id="slide" class="row">
<div id="mySidenav" class="sidenav ">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  
 
  
  <div class="logo" style="position: absolute; top: 0;"><img alt="sim so dep - Tai sodep.com.vn" src="/images/logo.png" /></div>
 <?php echo $_smarty_tpl->tpl_vars['newmenu']->value;?>

  <button class="accordion">SIM VINAPHONE</button>
<div class="panel">
<ul><li><a href="sim-tu-quy/Vinaphone.html"> Sim Tứ Quý</a></li><li><a href="sim-ngu-quy/Vinaphone.html"> Sim Ngũ Quý</a></li><li><a href="sim-luc-quy/Vinaphone.html"> Sim Lục Quý</a></li><li><a href="sim-loc-phat/Vinaphone.html"> Sim Lộc Phát</a></li><li><a href="sim-than-tai/Vinaphone.html"> Sim Thần Tài</a></li><li><a href="sim-tien-don/Vinaphone.html"> Sim Tiến Đơn</a></li><li><a href="sim-tien-doi/Vinaphone.html"> Sim Tiến Đôi</a></li><li><a href="tam-hoa-don/Vinaphone.html"> Sim Tam Hoa Đơn</a></li><li><a href="tam-hoa-kep/Vinaphone.html"> Sim Tam Hoa Kép</a></li><li><a href="sim-kep/Vinaphone.html"> Sim Kép</a></li>

<li><a href="sim-lap/Vinaphone.html"> Sim Lặp</a></li><li><a href="sim-doi/Vinaphone.html"> Sim Đối</a></li><li><a href="sim-ganh/Vinaphone.html"> Sim Gánh</a></li><li><a href="sim-dao/Vinaphone.html"> Sim Đảo</a></li><li><a href="sim-dac-biet/Vinaphone.html"> Sim Đặc Biệt</a></li><li><a href="sim-ong-dia/Vinaphone.html"> Sim Ông Địa</a></li><li><a href="dau-so-co/Vinaphone.html"> Sim Đầu Số Cổ</a></li><li><a href="sim-nam-sinh/Vinaphone.html"> Sim Năm Sinh</a></li><li><a href="sim-ngay-thang-nam-sinh/Vinaphone.html"> Năm sinh dd/mm/yy</a></li><li><a href="sim-taxi-hai/Vinaphone.html"> Sim Taxi Lặp 2</a></li><li><a href="sim-taxi-ba/Vinaphone.html"> Sim Taxi Lặp 3</a></li><li><a href="sim-taxi-bon/Vinaphone.html"> Sim Taxi Lặp 4</a></li>

</ul>
</div>

<button class="accordion">SIM MOBIFONE</button>
<div class="panel">

<ul><li><a href="sim-tu-quy/Mobifone.html"> Sim Tứ Quý</a></li><li><a href="sim-ngu-quy/Mobifone.html"> Sim Ngũ Quý</a></li><li><a href="sim-luc-quy/Mobifone.html"> Sim Lục Quý</a></li><li><a href="sim-loc-phat/Mobifone.html"> Sim Lộc Phát</a></li><li><a href="sim-than-tai/Mobifone.html"> Sim Thần Tài</a></li><li><a href="sim-tien-don/Mobifone.html"> Sim Tiến Đơn</a></li><li><a href="sim-tien-doi/Mobifone.html"> Sim Tiến Đôi</a></li><li><a href="tam-hoa-don/Mobifone.html"> Sim Tam Hoa Đơn</a></li><li><a href="tam-hoa-kep/Mobifone.html"> Sim Tam Hoa Kép</a></li><li><a href="sim-kep/Mobifone.html"> Sim Kép</a></li>

<li><a href="sim-lap/Mobifone.html"> Sim Lặp</a></li><li><a href="sim-doi/Mobifone.html"> Sim Đối</a></li><li><a href="sim-ganh/Mobifone.html"> Sim Gánh</a></li><li><a href="sim-dao/Mobifone.html"> Sim Đảo</a></li><li><a href="sim-dac-biet/Mobifone.html"> Sim Đặc Biệt</a></li><li><a href="sim-ong-dia/Mobifone.html"> Sim Ông Địa</a></li><li><a href="dau-so-co/Mobifone.html"> Sim Đầu Số Cổ</a></li><li><a href="sim-nam-sinh/Mobifone.html"> Sim Năm Sinh</a></li><li><a href="sim-ngay-thang-nam-sinh/Mobifone.html"> Năm sinh dd/mm/yy</a></li><li><a href="sim-taxi-hai/Mobifone.html"> Sim Taxi Lặp 2</a></li><li><a href="sim-taxi-ba/Mobifone.html"> Sim Taxi Lặp 3</a></li><li><a href="sim-taxi-bon/Mobifone.html"> Sim Taxi Lặp 4</a></li>
</ul>

</div>

<button class="accordion">SIM VIETTEL</button>
<div class="panel">

<ul><li><a href="sim-tu-quy/Viettel.html"> Sim Tứ Quý</a></li><li><a href="sim-ngu-quy/Viettel.html"> Sim Ngũ Quý</a></li><li><a href="sim-luc-quy/Viettel.html"> Sim Lục Quý</a></li><li><a href="sim-loc-phat/Viettel.html"> Sim Lộc Phát</a></li><li><a href="sim-than-tai/Viettel.html"> Sim Thần Tài</a></li><li><a href="sim-tien-don/Viettel.html"> Sim Tiến Đơn</a></li><li><a href="sim-tien-doi/Viettel.html"> Sim Tiến Đôi</a></li><li><a href="tam-hoa-don/Viettel.html"> Sim Tam Hoa Đơn</a></li><li><a href="tam-hoa-kep/Viettel.html"> Sim Tam Hoa Kép</a></li><li><a href="sim-kep/Viettel.html"> Sim Kép</a></li>
<li><a href="sim-lap/Viettel.html"> Sim Lặp</a></li><li><a href="sim-doi/Viettel.html"> Sim Đối</a></li><li><a href="sim-ganh/Viettel.html"> Sim Gánh</a></li><li><a href="sim-dao/Viettel.html"> Sim Đảo</a></li><li><a href="sim-dac-biet/Viettel.html"> Sim Đặc Biệt</a></li><li><a href="sim-ong-dia/Viettel.html"> Sim Ông Địa</a></li><li><a href="dau-so-co/Viettel.html"> Sim Đầu Số Cổ</a></li><li><a href="sim-nam-sinh/Viettel.html"> Sim Năm Sinh</a></li><li><a href="sim-ngay-thang-nam-sinh/Viettel.html"> Năm sinh dd/mm/yy</a></li><li><a href="sim-taxi-hai/Viettel.html"> Sim Taxi Lặp 2</a></li><li><a href="sim-taxi-ba/Viettel.html"> Sim Taxi Lặp 3</a></li><li><a href="sim-taxi-bon/Viettel.html"> Sim Taxi Lặp 4</a></li>
</ul>

</div>
  
<button class="accordion">SIM VIETNAMOBILE</button>
<div class="panel">

<ul><li><a href="sim-tu-quy/Vietnamobile.html"> Sim Tứ Quý</a></li><li><a href="sim-ngu-quy/Vietnamobile.html"> Sim Ngũ Quý</a></li><li><a href="sim-luc-quy/Vietnamobile.html"> Sim Lục Quý</a></li><li><a href="sim-loc-phat/Vietnamobile.html"> Sim Lộc Phát</a></li><li><a href="sim-than-tai/Vietnamobile.html"> Sim Thần Tài</a></li><li><a href="sim-tien-don/Vietnamobile.html"> Sim Tiến Đơn</a></li><li><a href="sim-tien-doi/Vietnamobile.html"> Sim Tiến Đôi</a></li><li><a href="tam-hoa-don/Vietnamobile.html"> Sim Tam Hoa Đơn</a></li><li><a href="tam-hoa-kep/Vietnamobile.html"> Sim Tam Hoa Kép</a></li><li><a href="sim-kep/Vietnamobile.html"> Sim Kép</a></li>


<li><a href="sim-tu-quy/Vietnamobile.html"> Sim Tứ Quý</a></li><li><a href="sim-ngu-quy/Vietnamobile.html"> Sim Ngũ Quý</a></li><li><a href="sim-luc-quy/Vietnamobile.html"> Sim Lục Quý</a></li><li><a href="sim-loc-phat/Vietnamobile.html"> Sim Lộc Phát</a></li><li><a href="sim-than-tai/Vietnamobile.html"> Sim Thần Tài</a></li><li><a href="sim-tien-don/Vietnamobile.html"> Sim Tiến Đơn</a></li><li><a href="sim-tien-doi/Vietnamobile.html"> Sim Tiến Đôi</a></li><li><a href="tam-hoa-don/Vietnamobile.html"> Sim Tam Hoa Đơn</a></li><li><a href="tam-hoa-kep/Vietnamobile.html"> Sim Tam Hoa Kép</a></li><li><a href="sim-kep/Vietnamobile.html"> Sim Kép</a></li>
</ul>

</div>

<button class="accordion">SIM GMOBILE</button>
<div class="panel">
<ul><li><a href="sim-tu-quy/Gmobile.html"> Sim Tứ Quý</a></li><li><a href="sim-ngu-quy/Gmobile.html"> Sim Ngũ Quý</a></li><li><a href="sim-luc-quy/Gmobile.html"> Sim Lục Quý</a></li><li><a href="sim-loc-phat/Gmobile.html"> Sim Lộc Phát</a></li><li><a href="sim-than-tai/Gmobile.html"> Sim Thần Tài</a></li><li><a href="sim-tien-don/Gmobile.html"> Sim Tiến Đơn</a></li><li><a href="sim-tien-doi/Gmobile.html"> Sim Tiến Đôi</a></li><li><a href="tam-hoa-don/Gmobile.html"> Sim Tam Hoa Đơn</a></li><li><a href="tam-hoa-kep/Gmobile.html"> Sim Tam Hoa Kép</a></li><li><a href="sim-kep/Gmobile.html"> Sim Kép</a>
<li><a href="sim-lap/Gmobile.html"> Sim Lặp</a></li><li><a href="sim-doi/Gmobile.html"> Sim Đối</a></li><li><a href="sim-ganh/Gmobile.html"> Sim Gánh</a></li><li><a href="sim-dao/Gmobile.html"> Sim Đảo</a></li><li><a href="sim-dac-biet/Gmobile.html"> Sim Đặc Biệt</a></li><li><a href="sim-ong-dia/Gmobile.html"> Sim Ông Địa</a></li><li><a href="dau-so-co/Gmobile.html"> Sim Đầu Số Cổ</a></li><li><a href="sim-nam-sinh/Gmobile.html"> Sim Năm Sinh</a></li><li><a href="sim-ngay-thang-nam-sinh/Gmobile.html"> Năm sinh dd/mm/yy</a></li><li><a href="sim-taxi-hai/Gmobile.html"> Sim Taxi Lặp 2</a></li><li><a href="sim-taxi-ba/Gmobile.html"> Sim Taxi Lặp 3</a></li><li><a href="sim-taxi-bon/Gmobile.html"> Sim Taxi Lặp 4</a></li>

</ul>
</div>

<ul class="slidefix">  <li ><a href="sim-tu-quy.html">Sim Tứ Quý</a></li>  <li ><a href="sim-luc-quy.html">Sim Lục Quý</a></li>  <li ><a href="sim-ngu-quy.html">Sim Ngũ Quý</a></li>  <li ><a href="sim-loc-phat.html">Sim Lộc Phát</a></li>  <li ><a href="sim-than-tai.html">Sim Thần Tài</a></li>  <li ><a href="sim-ong-dia.html">Sim ông địa</a></li>  <li ><a href="sim-tien-don.html">Sim tiến đơn</a></li>  <li ><a href="sim-tien-doi.html">Sim Tiến đôi</a></li>  <li ><a href="sim-taxi-hai.html">Sim Taxi 2</a></li>  <li ><a href="sim-taxi-ba.html">Sim Taxi 3</a></li>  <li ><a href="sim-taxi-bon.html">Sim Taxi 4</a></li>  <li ><a href="sim-lap.html">Sim Lặp</a></li>  <li ><a href="sim-kep.html">Sim kép</a></li>  <li ><a href="sim-doi.html">Sim đối</a></li>  <li ><a href="sim-dao.html">Sim Đảo</a></li>  <li ><a href="sim-ganh.html">Sim gánh</a></li>  <li ><a href="sim-dac-biet.html">Sim Đặc Biệt</a></li>  <li ><a href="sim-nam-sinh.html">Sim Năm Sinh</a></li>  <li ><a href="dau-so-co.html">Sim đầu số cổ</a></li>  <li ><a href="tam-hoa-don.html">Sim tam Hoa Đơn</a></li>  <li ><a href="tam-hoa-kep.html">Sim tam Hoa Kép</a></li>  <li ><a href="sim-ngay-thang-nam-sinh.html">Năm sinh dd/mm/YY</a></li></ul>

</div>

</div>


<div id="slide1" class="row visible-xs" style="margin-bottom: 20px;">

<div class="navbar1">
  <a class="active" href="#" onclick="openNav()">&#9776;</a> 
  <a href="<?php echo $_smarty_tpl->tpl_vars['thisdomain']->value;?>
" rel="nofollow"> Trang chủ</a> 
  <a href="/p/hinh-thuc-thanh-toan"> Thanh toán</a> 
  <a href="/p/lien-he"> Liên hệ</a>
  <a href="javascript://" class="addcart text-right" rel="nofollow">
</a>
</div>

 </div>
 
 
 


<?php echo '<script'; ?>
>

var css = document.getElementById('slidecss').innerHTML;
      
head = document.head || document.getElementsByTagName('head')[0],
style = document.createElement('style');

style.type = 'text/css';
if (style.styleSheet){
  style.styleSheet.cssText = css;
} else {
  style.appendChild(document.createTextNode(css));
}

head.appendChild(style);
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */
        this.classList.toggle("active");

        /* Toggle between hiding and showing the active panel */
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
<?php echo '</script'; ?>
>
<?php }} ?>
