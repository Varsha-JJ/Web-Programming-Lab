<?php
include "bookconnect.php";
if(isset($_POST['submit']))
{
$no=$_POST['no'];
$title=$_POST['title'];
$author=$_POST['author'];
$edition=$_POST['edition'];
$publisher=$_POST['publisher'];
$sql = "INSERT INTO `books` ( `no`,`title`, `author`, `edition`, `publisher`)
VALUES ( '$no','$title', '$author', '$edition', '$publisher')";
$result=$conn->query($sql);
if($result==TRUE)
{
echo "new record created successfully";

}
else
{
echo "Error".$sql."<br>".$conn->error;
}
$conn->close();
}
?>
<html>
<head>
<title>newcustomer</title>
</head>

<body>
<form method="POST" action="">
<h1>Register</h1><br>
Accession no<br>
<input type="text" name="no" required><br>
<br>
Title<br>
<input type="text" name="title" required><br>
Author<br>
<input type="text" name="author" required><br>
Edition<br>
<input type="text" name="edition" required><br>
Publisher<br>
<input type="text" name="publisher" required>
<br>
<input type="submit" name="submit" value="register"><br><br><br><br><br>
</form>
</body>
</html>

Searchbook.php
<?php
require "bookconnect.php";
if(isset($_POST['sub']))
{ $bookhead=$_POST['btitle'];
$store = "SELECT * FROM `books` WHERE `title` = '$bookhead'";
$result=$conn->query($store);
if($is_query_run=mysqli_query($conn,$store))
{
while($query_execute=mysqli_fetch_assoc($is_query_run))
{ ?><table
border="1"><tr><th>sino</th><th>title</th><th>author</th><th>edition</th><th>p
ublisher</th></tr>
<tr><td><?php echo $query_execute["no"];?></td>
<td><?php echo $query_execute["title"];?></td>
<td><?php echo $query_execute["author"];?></td>
<input type="text" name="no" required><br>
<br>
Title<br>
<input type="text" name="title" required><br>
Author<br>
<input type="text" name="author" required><br>
Edition<br>
<input type="text" name="edition" required><br>
Publisher<br>
<input type="text" name="publisher" required>
<br>
<input type="submit" name="submit" value="register"><br><br><br><br><br>
</form>
</body>
</html>