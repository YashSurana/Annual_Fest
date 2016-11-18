<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'melange_2016';
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die('Error connecting to mysql');

$id=$_REQUEST['EmpId'];
$sql="select Emp_Team from Employee_Data where Emp_Id='" . $id . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["Emp_Id"]. " - Name: " . $row["Emp_Name"]. " P_Name:" . $row["Project_Name"]. " E_Band" . $row["Emp_Band"] ."E_Email " . $row["Emp_Email"]. "E_Team " . $row["Emp_Team"] ."<br>";
	echo "You are in Team   :    " . $row["Emp_Team"] ;
    }
} else {
   // echo "0 results";
}
$conn->close();
?>