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
$q = ($_GET['q']);

$servername = "localhost";
$username = "root";
$password = "";
$dbname ="tcms";

//echo $q;
                // Create connection
$con = mysqli_connect($servername, $username, $password,$dbname);
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
    echo 'error!!!';
}

//mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM student WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);


while($row = mysqli_fetch_array($result)) {
    
        echo '<br><br><label>Name  :</label><label style = "margin-left:10px" ></label><label>'.$row['name']. '</label></div> 
                                <br>
                                <br>
                                <div><label>Grade  :</label><label style = "margin-left:10px" ></label><label>'.$row['grade'].'</label></div>';
        
        echo '</div>
                            <button class="place-right" style="margin-right: 30%" id="moreinfo" onclick="showMore(ID.value)">More Info</button>
                        </div>';
}

mysqli_close($con);

?>

</body>
</html>