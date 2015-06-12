<?php include("includes/header.php");  ?>
    

    <div class="charm right-side padding20 bg-blue" id="charmSettings">
        <button class="square-button bg-transparent fg-white no-border place-right small-button" onclick="showSettings()"><span class="mif-cross"></span></button>
        <h1 class="text-light">Settings</h1>
        <hr class="thin"/>
        <br />
        <div class="schemeButtons">
            <div class="button square-button tile-area-scheme-dark" data-scheme="dark"></div>
            <div class="button square-button tile-area-scheme-darkBrown" data-scheme="darkBrown"></div>
            <div class="button square-button tile-area-scheme-darkCrimson" data-scheme="darkCrimson"></div>
            <div class="button square-button tile-area-scheme-darkViolet" data-scheme="darkViolet"></div>
            <div class="button square-button tile-area-scheme-darkMagenta" data-scheme="darkMagenta"></div>
            <div class="button square-button tile-area-scheme-darkCyan" data-scheme="darkCyan"></div>
            <div class="button square-button tile-area-scheme-darkCobalt" data-scheme="darkCobalt"></div>
            <div class="button square-button tile-area-scheme-darkTeal" data-scheme="darkTeal"></div>
            <div class="button square-button tile-area-scheme-darkEmerald" data-scheme="darkEmerald"></div>
            <div class="button square-button tile-area-scheme-darkGreen" data-scheme="darkGreen"></div>
            <div class="button square-button tile-area-scheme-darkOrange" data-scheme="darkOrange"></div>
            <div class="button square-button tile-area-scheme-darkRed" data-scheme="darkRed"></div>
            <div class="button square-button tile-area-scheme-darkPink" data-scheme="darkPink"></div>
            <div class="button square-button tile-area-scheme-darkIndigo" data-scheme="darkIndigo"></div>
            <div class="button square-button tile-area-scheme-darkBlue" data-scheme="darkBlue"></div>
            <div class="button square-button tile-area-scheme-lightBlue" data-scheme="lightBlue"></div>
            <div class="button square-button tile-area-scheme-lightTeal" data-scheme="lightTeal"></div>
            <div class="button square-button tile-area-scheme-lightOlive" data-scheme="lightOlive"></div>
            <div class="button square-button tile-area-scheme-lightOrange" data-scheme="lightOrange"></div>
            <div class="button square-button tile-area-scheme-lightPink" data-scheme="lightPink"></div>
            <div class="button square-button tile-area-scheme-grayed" data-scheme="grayed"></div>
        </div>
    </div>
    
    <?php
            function  validateFields($ID){
                
            }
         
         ?>
         <?php
            if(isset($_POST['submit'])){
              $name = $_POST["name"];
              $ID = $_POST["ID"];
              $gender = $_POST["gender"];
              $grade = $_POST["grade"];
              $date_of_birth = $_POST["date_of_birth"];
              $age = $_POST["age"];
              $mobile = $_POST["mobile"];
              $email = $_POST["email"];
              $gaurdian = $_POST["gaurdian"];
              $gaurd_moblie = $_POST["gaurd-mobile"];
              $address = $_POST["address"];
              $reg_date = $_POST["reg-date"];

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
                $userpassword = strtolower($name);
                $accessLevel = 0;
                if  (strpos($name,'ST'))
                    $accessLevel = 4;
                else if (strpos($name,'IN'))
                    $accessLevel = 3;
                else if (strpos($name,'SM'))
                    $accessLevel = 2;
                else if (strpos($name,'AM'))
                    $accessLevel = 1;
               
                $sql1  = "INSERT INTO users (`id`,`username`,`hashed_password`,`accessLevel`) VALUES ('$ID','$name','$userpassword','$accessLevel')";
                $sql = "INSERT INTO student(name, id,grade,mobile,email,parent,parent_contact,dob,age,reg_date)
                VALUES ('$name','$ID','$grade','$mobile','$email','$gaurdian','$gaurd_moblie','$date_of_birth','$age','$reg_date')";

                if($conn->query($sql1) === TRUE)
                {   
                    echo  '<h3 style = "color:#FFFFFF; text-align:center; margin-bottom:-20px;"> Data sent successfully 2nd </h3>';
                    if ($conn->query($sql) === TRUE) {

                        echo  '<h3 style = "color:#FFFFFF; text-align:center; margin-bottom:-20px;"> Data sent successfully 2nd </h3>';

                    } else {

                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                }else{
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }

                $conn->close();
            }


        ?>  

    <div class="tile-area tile-area-scheme-lightOlive fg-white">
        <h1 class="tile-area-title">Student Search</h1>
        <div class="tile-area-controls">
            <button class="image-button icon-right bg-transparent fg-white bg-hover-dark no-border"><span class="sub-header no-margin text-light">Sergey Pimenov</span> <span class="icon mif-user"></span></button>
            <button class="square-button bg-transparent fg-white bg-hover-dark no-border" onclick="showSearch()"><span class="mif-search"></span></button>
            <button class="square-button bg-transparent fg-white bg-hover-dark no-border" onclick="showSettings()"><span class="mif-cog"></span></button>
            <a href="../tiles.html" class="square-button bg-transparent fg-white bg-hover-dark no-border"><span class="mif-switch"></span></a>
        </div>
        <div class="grid">
            
             
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" class="inline">
                <fieldset class="inline">
                <div class="row cells12">   
                    <legend style="color: #FFFFFF;">Search Students</legend>
                
                    <div class="cell colspan2">
                        <label for="name">Name:</label>
                        <input type="text" name="name" maxlength="100" />

                    </div>
                    <div class="cell colspan2">
                        <label for="ID">ID:</label>
                        <input type="text" name="ID" />
                    </div>
                    
                    <div class="cell colspan2">
                        <label for="Grade">Grade:</label>                        
                        <select Id="grade" name="grade" style="opacity: 0.7; display:inline-block;margin-left: 10px;width: 60px;" required="insert grade">
                        <option value="1">1
                        <option value="2">2
                        <option value="3">3
                        <option value="4">4
                        <option value="5">5
                        <option value="6">6
                        <option value="7">7
                        <option value="8">8
                        <option value="9">9
                        <option value="10">10
                        <option value="11">11
                        <option value="12">12
                        <option value="13">13
                      </select>
                    </div>
                    
                    <div class="cell" style="margin-left:20px;margin-right: 20px;"></div>
                    
                    <div class="inline" style="padding-top: 10px">
                        
                         <input type="submit" value="SUBMIT" name="submit" />
                        
                    </div>
                    
                    
                    
                    
                </fieldset>
                 
            
            
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" class="inline">
                <fieldset >
                    <div  style="padding-top: 10px">
                        
                         <input type="submit" value="VIEW ALL" name="viewall" style="margin-top: 2px" />
                        
                    </div>
                    
                </fieldset>
                
            </form>
                </form>
            <div class="inline" style="padding-top: 62px">
                        <a href="StudentRegistration.php"><button class="mybutton" style="margin-bottom: -11px;margin-left: 20px">NEW ENTRY</button></a>
                    </div>
            
            <div class="container" style="alignment-adjust: central;">    

                <?php
                
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname ="student";



                if(isset($_POST['viewall'])){
                                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                         die("Connection failed: " . $conn->connect_error);
                    } 
                    $sql = "SELECT ID, Name, Grade FROM student";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                         echo '<table class="striped" style="width:35%"><tr><th>ID</th><th>Name</th><th>Grade</th><th></th><th></th></tr>';
                         // output data of each row
                         while($row = $result->fetch_assoc()) {
                             echo "<tr><td>" . $row["ID"]. "</td><td>" . $row["Name"]. "</td><td>" . $row["Grade"]. "</td><td> <a href='edit.php?edit=$row[ID]'>Edit</a></td> <td><a href='View.php?edit=$row[ID]'>ViewAll</a> </td></tr> ";
                         }
                         echo "</table>";
                    } else {
                         echo "0 results";
                    }

                    $conn->close();    
                }
                elseif(isset($_POST['submit'])){
                    
                                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                         die("Connection failed: " . $conn->connect_error);
                    } 
                    
                    $id = $_POST['ID'];
                    $name = $_POST['name'];
                    $grade = $_POST['grade'];

                    if(isset($id)||isset($name)||isset($grade)){

                        $sql = "SELECT ID, Name, Grade FROM student WHERE ID= '$id' OR name = '$name' OR grade = '$grade'";
                        $result = $conn->query($sql);

                    if(!$result){
                        echo'<h3>No results found!</h3>';
                    }else
                    if ($result->num_rows > 0) {
                         echo '<table class="striped" style="width:35%"><tr><th>ID</th><th>Name</th><th>Grade</th><th></th><th></th></tr>';
                         // output data of each row
                         while($row = $result->fetch_assoc()) {
                             echo "<tr><td>" . $row["ID"]. "</td><td>" . $row["Name"]. "</td><td>" . $row["Grade"]. "</td><td> <a href='edit.php?edit=$row[ID]'>Edit</a></td> <td><a href='View.php?edit=$row[ID]'>ViewAll</a> </td></tr> ";
                         }
                         echo "</table>";
                    }
                    else {echo'<h3>No results found!</h3>';}
                    $conn->close();    
                    }
                }
                ?> 
            
                </div>
            </div>
        </div>
    

        
    <!-- hit.ua -->
    <a href='http://hit.ua/?x=136046' target='_blank'>
        <script language="javascript" type="text/javascript"><!--
        Cd=document;Cr="&"+Math.random();Cp="&s=1";
        Cd.cookie="b=b";if(Cd.cookie)Cp+="&c=1";
        Cp+="&t="+(new Date()).getTimezoneOffset();
        if(self!=top)Cp+="&f=1";
        //--></script>
        <script language="javascript1.1" type="text/javascript"><!--
        if(navigator.javaEnabled())Cp+="&j=1";
        //--></script>
        <script language="javascript1.2" type="text/javascript"><!--
        if(typeof(screen)!='undefined')Cp+="&w="+screen.width+"&h="+
        screen.height+"&d="+(screen.colorDepth?screen.colorDepth:screen.pixelDepth);
        //--></script>
        <script language="javascript" type="text/javascript"><!--
        Cd.write("<img src='http://c.hit.ua/hit?i=136046&g=0&x=2"+Cp+Cr+
        "&r="+escape(Cd.referrer)+"&u="+escape(window.location.href)+
        "' border='0' wi"+"dth='1' he"+"ight='1'/>");
        //--></script></a>
    <!-- / hit.ua -->


</body>
</html>
