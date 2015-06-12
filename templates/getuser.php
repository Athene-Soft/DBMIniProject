<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$servername = "localhost";
$username = "root";
$password = "";
$dbname ="tcms";

echo $q;
                // Create connection
$con = mysqli_connect($servername, $username, $password,$dbname);
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
    echo 'error!!!';
}

//mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM student WHERE grade = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Grade</th>
<th>mail</th>
<th>mobile</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['parent'] . "</td>";
    echo "<td>" . $row['grade'] . "</td>";
    echo "<td>" . $row['age'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['mobile'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);

              /*  $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname ="tcms";

                // Create connection
                $conn = mysqli_connect($servername, $username, $password,$dbname);

                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                } 
               
                $sql = "SELECT * FROM student";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                         echo '<table class="striped" style="width:35%"><tr><th>ID</th><th>Name</th><th>Grade</th><th></th><th></th></tr>';
                         // output data of each row
                         while($row = $result->fetch_assoc()) {
                             echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["grade"]. "</td><td> <a href='edit.php?edit=$row[id]'>Edit</a></td> <td><a href='View.php?edit=$row[id]'>ViewAll</a> </td></tr> ";
                         }
                         echo "</table>";
                    } else {
                         echo "0 results";
                    }

                    $conn->close();    */
?>

</body>
</html>