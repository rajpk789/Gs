
<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="form1";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $User_name = $_POST['User_name'];
    $First_name = $_POST['First_name'];
	 $Last_name = $_POST['Last_name'];
	 $Email = $_POST['Email'];
	 $Mo_number = $_POST['Mobile'];
	 $Text = $_POST['Text'];
	 $Password = $_POST['Password'];

	 $sql_query = "INSERT INTO database1 (User_name,First_name,Last_name,Email,Mobile,Text,Password)
	 VALUES ('$User_name','$First_name','$Last_name','$Email','$Mo_number','$Text','$Password')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>

