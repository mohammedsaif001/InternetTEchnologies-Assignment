<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERTION</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center><h1>DISPLAYING INSERTED RECORDS 20181CSE0433</h1></center>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employeedetails_assignment";

$empId = $_POST["empId"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$dob = $_POST["dob"];
$place = $_POST["place"];
$mail = $_POST["mail"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$qualification = $_POST["qualification"];
$deptName = $_POST["deptName"];
$deptId = $_POST["deptId"];
$salary = $_POST["salary"];
$doj = $_POST["doj"];

//Creating Connection
$connection = mysqli_connect($servername,$username,$password,$dbname);

//Checking Connection
if(!$connection){
    die("Connection Failed: ".mysqli_connect_error());
}


//Executing Query
$sql = "INSERT INTO EMPLOYEE VALUES (
    '$empId',
    '$fname',
    '$lname',
    '$dob',
    '$place',
    '$mail',
    $phone,
    '$address',
    '$qualification',
    '$deptName',
    '$deptId',
    $salary,
    '$doj'
    )";

if(mysqli_query($connection,$sql)){
    echo "New Record Created Successfully ";
}
else{
    echo "<p style='border: 3.5px dashed #16a085; color:red; padding:20px; font-size: 1.2em;font-weight:bold;'>Error: ".$sql."<br>".mysqli_error($connection)."</p>";
}

//Displaying Data
$sql = "SELECT * FROM employee";
$result = mysqli_query($connection,$sql);

if(mysqli_num_rows($result)>0){
    print "<br><br> <table border = 2 style='font-size:0.9em;'>
    <tr>
    <th>EMP_ID</th>
    <th>FIRST_NAME</th>
    <th>LAST_NAME</th>
    <th>DATE_OF_BIRTH</th>
    <th>BIRTH_PLACE</th>
    <th>EMAIL</th>
    <th>MOBILE_NO</th>
    <th>ADDRESS</th>
    <th>QUALIFICATION</th>
    <th>DEPT_NAME</th>
    <th>DEPT_ID</th>
    <th>SALARY</th>
    <th>DATE_OF_JOINING</th>
    </tr>
    ";
    while($row = mysqli_fetch_array($result)){
        print "<tr>";
        print "<td>".$row["EMP_ID"]."</td>";
        print "<td>". $row["FIRST_NAME"]."</td>";
        print "<td>". $row["LAST_NAME"]."</td>";
        print "<td>". $row["DATE_OF_BIRTH"]."</td>";
        print "<td>". $row["BIRTH_PLACE"]."</td>";
        print "<td>". $row["EMAIL"]."</td>";
        print "<td>". $row["MOBILE_NO"]."</td>";
        print "<td>". $row["ADDRESS"]."</td>";
        print "<td>". $row["QUALIFICATION"]."</td>";
        print "<td>". $row["DEPT_NAME"]."</td>";
        print "<td>". $row["DEPT_ID"]."</td>";
        print "<td>". $row["SALARY"]."</td>";
        print "<td>". $row["DATE_OF_JOINING"]."</td>";
        print "</tr>";
        
    }
    print "</table>";
}
else{
    echo "0 results";
}


//Closing Connection
mysqli_close($connection);


?>

<a href="form.html" ><button>GOTO MAIN PAGE</button></a>
</body>
</html>

