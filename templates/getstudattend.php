<?php
//include 'connection.php';
 $q = $_GET['q'];
 //$q = "ST102132";
 //echo $q;
 $conn = new mysqli("localhost","root","admin","tcms");
 
//if (!$conn)
//  {
//  die('Could not connect: ' . $conn->error($conn));
//  }

$query= "SELECT `name`, `grade` FROM `student` WHERE `id` ='".$q."'";

$result = $conn->query($query);
if($result == FALSE){
   // echo 'ammo'; //query submit error message
}

$rs = $result->fetch_array(MYSQLI_ASSOC);
//echo "Name:".$rs['name']."<br>Grade:".$rs['grade'];

//echo "<table border='1'>
//<tr>
//<th>Name</th>
//<th>Grade</th>
//</tr>";
//
//while($rs = $result->fetch_array(MYSQLI_ASSOC))
//  {
//  echo "<tr>";
//  echo "<td>" . $rs['name'] . "</td>";
//  echo "<td>" . $rs['grade'] . "</td>";
//  echo "</tr>";
//  }
//echo "</table>";

    echo "<div>
           <label>Name:</label><label style=\"margin-left:10px\">{$rs['name']}</label>
          </div> 
          <br>
          <div>
            <label>Grade:</label><label style=\"margin-left:10px\">{$rs['grade']}</label>
          </div>"; 

$conn->close();
//?> 

