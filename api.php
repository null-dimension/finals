<?php
    require_once('DB.php');

    if(isset($_GET['bids'])){
        $stmt = $conn->query("SELECT * FROM bids"); 
        //$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        
        $response = "[";
        foreach($result as $i=>$r){
            if($i!=0)
                $response .= ",{";
            else
                $response .= "{";
            $response .= '"team":' . '"' . $r['team'] . '",';
            $response .= '"points":' . '"' . $r['points'] . '"';
            $response .= "}";
        }
        $response .= "]";
        echo $response;
    }


    
?>