<?php
include "config.php";
$sql = " SELECT * FROM `login` " ;
$result = mysqli_query($con ,$sql);
$row = mysqli_fetch_array($result);

?>
<html>
<head>
<title>view page</title>
</head>
<body>
<div class="container">
<h2>VIEW</h2>
<table border="1">
<tr>
<th>id</th>
<th>User Name</th>
<th>Email</th>
<th>Password</th>
</tr>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['userName'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['password'];?></td>
</table>
</html>
