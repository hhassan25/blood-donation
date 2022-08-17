<?php
    // Set sessions
    if(!isset($_SESSION)) {
        session_start();
    }
    if (!isset($_SESSION['loggedin']) || ($_SESSION['role'] !== 'admin' && $_SESSION['role'] !== 'employee')) {
      header('Location: ../Login/index.php');
  die();
}
$connect = mysqli_connect("localhost", "root", "", "donation");

$result = mysqli_query($connect,"SELECT * FROM files");
?>

<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Delete employee data</title>
</head>
<body>
<table>
	<tr>
	</td>
	<td>Name</td>
	<td>Image</td>
	<td>Action</td>
	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	
	
	<td><?php echo $row["text"]; ?></td>
 <td>  
  <a href="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" download> <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'"  height="50%" width="30%" class="img-thumnail" />  
   </td>
 </a>

 <td><a href="delete-process.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
</body>
</html>