<?php 
    $host = "localhost";
    $username = "root";
    $pass = "";
    $dbname='portfolio';
    
    try{
        $dbcon = new PDO('mysql:localhost=$host;dbname='.$dbname,$username,$pass);

        $dbcon->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        if($dbcon){

            echo "connection success";
            
        }

    }catch(PDOException $e){
        echo $e->getMessage();
    }
?>