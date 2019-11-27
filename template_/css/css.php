<?php 
session_start();
header('Content-type: text/css');
ob_start("compress");

    function compress( $minify ) 
    {
	/* remove comments */
    	$minify = preg_replace( '!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $minify );

        /* remove tabs, spaces, newlines, etc. */
    	$minify = str_replace( array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $minify );
    		
        return $minify;
    }
    if(isset($_SESSION['style']))
     include('style/'.$_SESSION['style'].'/bootstrap.css');
    else
    include('bootstrap.css');
    
    

include('mega-menu.css');

include "menu.min.css";
include('animate.css');

if(isset($_GET['styleid']) OR $_SESSION['styleid'])
{
    if(isset($_GET['styleid']))
    $_SESSION['styleid']=$_GET['styleid'];
    $style=trim($_SESSION['styleid']).".css";
       include($style);
}
else
{
     include('style.css');  
}
 

//    include('min.css');
       
      

ob_end_flush();