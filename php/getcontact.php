<?php
$connection= new mysqli("localhost","root","","donation");


if($connection->connect_error){
    die("Connection Failed!".$connection->connect_error);

}
//$result= array('error'=>false);
//$action='';

/*if(isset($_GET['action'])){

    $action= $_GET['action'];
}*/

$sql= $connection->query("Select * from types");
$users=array();
while($row=$sql->fetch_assoc()){
        $users[] = $row;
}
//$result['users']=$users;

echo json_encode($users);

?>