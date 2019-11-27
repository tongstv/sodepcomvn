<?php
class json
{
    function index()
    {
        header('Content-type: application/json');
        $db=new db;
        
        if(isset($_GET['simdl']))
        {
                    $data=$db->getAll("SELECT sim1, gianhap FROM simso WHERE simdl=".(int) $_REQUEST['simdl']);
            
              echo json_encode($data);
              exit();
        }
        
        $data=$db->getAll("SELECT id AS xid, fullname, email, last_update, mobile FROM daily");
    
    
        foreach($data AS $row)
        {
            $email=strtolower(trim($row['email']));
            
            $d[$row['email']]=$row;
        }
        echo json_encode($d);
        
    }
    
    
}