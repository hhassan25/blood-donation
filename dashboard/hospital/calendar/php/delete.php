<?php

//delete.php

if(isset($_POST["id"]))
{
    $id = $_POST["id"];
    $connect =mysqli_connect('localhost','root','root','attendance');
    $query = "DELETE FROM events WHERE id=$id";
    $result = mysqli_query($connect, $query);
    if($result != null){
        //Complete
        echo "200";
    }else{
        echo "500";
    }
}

?>

