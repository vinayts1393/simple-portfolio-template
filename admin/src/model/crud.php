<?php 
     include("config.php");    
     
     //var_dump($dbcon);
    
     class Crud
    {       

        function test(){
            var_dump($dbcon);
        }

        function authenticate($tbl_name, $user , $pass){
            $crypt_pass=array();
            array_push($crypt_pass , crypt($pass,'$5$$'));

            $sql="SELECT * FROM `{tbl_name}` WHERE username=".$user;
            
            $stmt=$dbcon->execute($sql);
            $result=$stmt->setFetchMode(PDO::FETCH_ASSOC);

            array_push($crypt_pass,$result['password']);

            if($crypt_pass[0] == $crypt_pass[1]){
                return true;
            }


                           
        }

        function insert($tbl_name , $fields , $values){
            $field = implode(",",$fields);
            $value = implode(",",$values);

            $sql= "INSERT into `{$tbl_name}` `({$field})` VALUES `({$value})`";

            $dbcon->exec($sql);

            //$dbcon=null;
        }
        

        function delete($tbl_name , $id){
            $sql = "Delete FROM `{$tbl_name}` WHERE id = ?";
            $exe = $dbcon->prepare($sql);
            $exe->exec(array($id));

            //$dbcon=null;
        }


    }



?>