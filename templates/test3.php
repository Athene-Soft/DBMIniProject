<?php

                $servername = "localhost";
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

                    $conn->close();    
                
               