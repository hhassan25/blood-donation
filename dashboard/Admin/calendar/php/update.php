<?php

//update.php

$connect =mysqli_connect('localhost','root','root','senior');


    $id=$_REQUEST['id'];
    $title  = $_REQUEST['title'];
    $start_event = $_REQUEST['start'];
    $end_event = $_REQUEST['end'];
    
 $query = " UPDATE events  SET title='$title', start='$start_event', end='$end_event' WHERE id='$id'";
 $result = mysqli_query($connect, $query);
    if($result != null){
        //Complete
        echo "200";
    }else{
        echo "500";
    }


?>