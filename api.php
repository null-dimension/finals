<?php
    require_once('DB.php');
    if(isset($_GET['bids'])){
        $stmt = $conn->query("SELECT * FROM scoreboard"); 
        //$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
    }

    if(isset($_GET['add_bid'])){
        echo $_GET['add_bid'];
    }
?>