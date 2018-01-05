
<?php

//step1: fetch the id passed through url by either
// $_REQUEST['']or $_GET[''] and store it into respective variable
$id=$_REQUEST['cid'];

// step2:connect with db
$conn=mysqli_connect("localhost","root","","yogphppro");

//step3:pass the query string for delete to $sql variable
$sql="delete from contact where id='$id'";

//step4:execute the query with mysqli_query function
$status=mysqli_query($conn,$sql);

//Step5:If query executes successfully true is returned to $status variable

if($status==true)
{
	header("Location:signup.php"); //to redirect
}
else{
	mysqli_error();
}


?>