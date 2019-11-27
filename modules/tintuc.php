<?php
/**
 * @author stv.vn
 * @copyright 2014
 */

class tintuc extends Smarty
{


	function index()
	{
	$db =new db;
	$this->setTemplateDir(TEMPLATE);



    
    


	$where="WHERE page_group = (select id from pagegroup WHERE groupcode='tintuc')";
    
    
    $num_rows=$db->getOne("select COUNT(*) AS num_rows FROM page $where");
       
           $num_rows=$num_rows['num_rows'];
       
    $pages = new Paginator($num_rows,9,array(25,50,100,250,'All'));
       
       
	$data2=$db->getAll("SELECT * FROM page $where LIMIT $pages->limit_start,$pages->limit_end");
    
    
    foreach($data2 AS $row)
    {     preg_match_all( '@src="([^"]+)"@' , $row['page_detail'], $match );
        
         $row['img']= isset($match[1][0]) ? $match[1][0] : '';
        $data[]= $row;
    }
       
    $this->assign("data",$data);
        
    $this->assign("paging",$pages->display_pages());
	

    $this->registerFilter("output", "minify_html");
	$this->display(temp_file);
	}
	

}