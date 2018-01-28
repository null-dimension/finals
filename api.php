<?php
    require_once('DB.php');
    if(isset($_GET['bids'])){
        $stmt = $conn->query("SELECT * FROM bids"); 
        //$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
    }

    if ($_SERVER['REQUEST_METHOD'] == "POST") {


        if (isset($_GET['add_bid'])){

                $body = file_get_contents("php://input");

                $body = json_decode($body);
                print_r($body);
                print_r($body[0]);
                $stmt = $conn->prepare("INSERT INTO bids VALUES (DEFAULT, :team, :points)");
                $stmt->bindParam(':team', $body->team);
                $stmt->bindParam(':points', $body->points);

                $stmt->execute();
        }
    }
    
?>