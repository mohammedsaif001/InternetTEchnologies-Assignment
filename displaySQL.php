<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISPLAY</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="displaySQL">
    <div>
        <center><h1>EMPLOYEE TABLE DETAILS 20181CSE0433</h1></center>
        <table border="2px">
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

            <!-- Including PHP FILE FOR INSERTION OF DATA -->

            <?php
            $severname = "localhost";
            $username = "root";
            $password = "";
            $dbname = "employeedetails_assignment";

            // Connection
            $connection = mysqli_connect($severname,$username,$password,$dbname);

            // SQL QUERY

            $sql = "SELECT * FROM EMPLOYEE";
            $result = mysqli_query($connection,$sql);

            //ADDING IN ROWS
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){
                    print "<tr>";
                    print "<th>".$row["EMP_ID"]."</th>";
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
            


            // Termination

            mysqli_close($connection);
            ?>


        </table>
    </div>
    <a href="form.html" ><button >GOTO MAIN PAGE</button></a>
</body>
</html>