<?php

/**
 * @author stv.vn
 * @copyright 2014
 */
class home extends Smarty
{

    /** view **/
   
    function index()
    {
        $this->setTemplateDir(TEMPLATE);

        $this->lc();
        global $db, $loai, $config;
        $this->assign($config);


        $sethome = new sethome();
        $where="WHERE simdl=3";
        if(isset($_SESSION['simtype']))$where.=$_SESSION['simtype'];





        if(isset($_SESSION['toggleprice']))$orderby="ORDER BY giaban ".$_SESSION['toggleprice'];
        else
        $orderby="order by giaban desc";




            $page = explode('?page=',$_SERVER["REQUEST_URI"]);
            
            $page = isset($page[1]) ? $page[1] : 1;
            
           


            $limit = 100; //per page

            if ($page >= 8)
                $offset1 = $limit * $page;
            else
                $offset1 = 0;
                
                 if($page > 30) $offset1=30000;






            $sql = "select sim1, sim2, giaban, mang, tong from sim {$where} {$orderby} limit $offset1, 800";


     
            $keysql = md5(preg_replace('/limit ([0-9]*)\, 800/','',$sql));
            
         
            
            if(isset($_SESSION['items'][$keysql]))
            {
                $items=$_SESSION['items'][$keysql];
                
               
                
                
                if($page >= 8)
                {
                    $tmpitems = $db->fetch_all_array($sql);
                    
                    foreach($tmpitems AS $row)
                    {
                        
                        if(!in_array($row,$items))
                        {
                         
                          array_push($items,$row);
                        }
                    }
                
                    $_SESSION['items'][$keysql]=$items;
                }
                
            }
            else
            {
                  $items = $db->fetch_all_array($sql);
                  $_SESSION['items'][$keysql]=$items;
            }

          

            
        

            $offset = ($page - 1) * $limit;
            if ($offset < 0)
                $offset = 0;

            $data2 = array_slice($items, $offset, $limit);


            $i = $offset = 0 ? 0 : $offset;
            foreach ($data2 as $r) {
                $i++;

                $r['stt'] = $i;
                $r['loai'] = checkloaisim($r['sim2']);

                $r['loailink'] = strtolower(str_replace(' ', '-', xoadau($r['loai']))) . ".html";
                $data[] = $r;
            }

            $total = count($items); //total items in array
            $totalPages = ceil($total / $limit);

            $paging = ' <ul class="pagination">';

            $purl = "" . preg_replace('/\?page=([0-9]*)/', '', $_SERVER["REQUEST_URI"]);
            if ($page > 1) {
                $paging .= " <li class=\"previous\"><a href=\"{$purl}&page=" . ($page - 1) . "\">Trang trước</a></li>";
            }
            for ($i = 1; $i <= $totalPages; $i++) {


                if ($i == $page) {
                    $paging .= ' <li class="active"><a href="#">' . $i . '</a></li>';
                } else {
                    $paging .= "<li><a href=\"{$purl}?page={$i}\">{$i}</a></li>";
                }


            }

            if ($page < $totalPages) {
                $paging .= "  <li class=\"next\"><a href=\"{$purl}&page=" . ($page + 1) . "\">Trang tiếp</a></li>";
            }
            $paging .= '</ul>';


            $this->assign("data", $data);


            $this->assign("paging", $paging);







        $this->assign("nav",navmenu());
       // $this->assign("menuloai",create_loai($loai['s'],$sloai));
        $this->assign("thisdomain", thisdomain);
        $this->registerFilter("output", "minify_html");
        
        $print_url="index.php?ajax=home&page=".$pages->current_page."&print=true";
        $this->assign("print_url",$print_url);
        
             $this->assign('seo',getpagebylink());
        if(isset($_GET['print']))
        {
        $this->assign("header",getPage('print_header'));
        
      
        $this->assign("footer",getPage('print_footer'));
        $this->display("print.htm");
        
        }
        else
        $this->display(temp_file);
    }

}
