<?php
include('config.php');
//$bol = False;
$sql="SHOW COLUMNS FROM tble_admin";

$result=$dbcon->prepare($sql);
$result->execute();

$fields = $result->fetchAll(PDO::FETCH_COLUMN);

var_dump(implode(",",$fields));




//$crud=new Crud();

//$crud->test();

/*class X {

    public static $insta=12;
    function foo() {
        echo 'X::foo()';
        echo self::$insta;
    }

    function bar() {
        self::foo();
    }
}

class Y extends X {
    function foo() {
        echo 'Y::foo()';
    }
}

$x = new Y();
$x->bar();
echo X::$insta;



$a="hello";
$b="world";
$array=array();

array_push($array,$a,$b);

var_dump($array);

echo implode(",",$array);

$pass="forgot";
$pass2="forgot";
echo "<br>";

$hash =crypt($pass,'$5$$');
echo "hashed pass :".$hash;

$decript = crypt($pass2,'$5$$');
echo "hashed pass :".$decript;


if($hash == $decript){
    echo "passwords match";
}
else{
    echo "passwords dont match";
}*/
?>