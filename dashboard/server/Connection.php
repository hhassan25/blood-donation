<?php
header("Access-Control-Allow-Origin: *" );
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');

$serverName ="localhost:3308"; //serverName\instanceName
//$serverName ="localhost";
// Since UID and PWD are not specified in the $connectionInfo array,
// The connection will be attempted using Windows Authentication.
$password = "";
//$password = "P@ssw0rd";
$connectionInfo = array( "Database"=>"donation", "UID"=>"root", "PWD"=>$password  ,   "CharacterSet" => "UTF-8");
//$connectionInfo = array( "Database"=>"RealEstate", "UID"=>"mcx", "PWD"=>$password  ,   "CharacterSet" => "UTF-8");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
$connection= new mysqli("localhost:3308","root","","donation");
if( ! $conn ) {
     die( print_r( sqlsrv_errors(), true));
}

?> 
