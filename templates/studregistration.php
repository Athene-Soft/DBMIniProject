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
        <h1 class="tile-area-title">Student Registration</h1>
        <div class="tile-area-controls">
            <button class="image-button icon-right bg-transparent fg-white bg-hover-dark no-border"><span class="sub-header no-margin text-light">Sergey Pimenov</span> <span class="icon mif-user"></span></button>
            <button class="square-button bg-transparent fg-white bg-hover-dark no-border" onclick="showSearch()"><span class="mif-search"></span></button>
            <button class="square-button bg-transparent fg-white bg-hover-dark no-border" onclick="showSettings()"><span class="mif-cog"></span></button>
            <a href="../tiles.html" class="square-button bg-transparent fg-white bg-hover-dark no-border"><span class="mif-switch"></span></a>
        </div>
        <div class="grid">
            <div class="row cells12">
                <div class="cell colspan2"></div>
                    <div class="cell colspan8 ">
                    <div class="container" >    

                    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                        <fieldset>

                            <legend style="color: #FFFFFF; ">Student Registration</legend>

                            <div style="margin-top: 10px">
                                <label for="name">Name:</label>
                                <input type="text" name="name" maxlength="100" style="width:50%;" required/>

                            </div>
                            <br>
                            <div>
                                <label for="ID">ID:</label>
                                <input type="text" name="ID" required=""/>
                            </div>
                            <br>
                            <div>
                                <div class="inline">
                                    <label for="Grade" >Grade :</label>                        
                                    <select Id="grade" name="grade" style="opacity: 0.7; margin-left: 20px;width: 60px;" >
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
                                    <option value="12">13
                                  </select>
                                </div>
                                <div class="inline" style='color: #FFFFFF;'>
                                    <label for="Gender" >Gender :</label>
                                    <input type="radio" name="gender" value="female" style="display:inline-block;margin-left: 50px;" required>Female 
                                    <input type="radio" name="gender" value="male"  style="display:inline-block;margin-left: 20px;" required>Male 
                                </div>

                            </div>
                            <br>
                            <div>
                                <div class="inline" >
                                <label for="Date_of_Birth">Birth Date:</label>
                                <input type="date" name="date_of_birth" required/>
                                </div>
                                <div class="inline" >
                                <label for="Age">Age:</label>
                                <input type="number" name="age" style="width:6em;" required/>
                                </div>

                            </div>
                            <br>
                            <div>
                                <div class='inline'>
                                    <label for="Mobile">Mobile:</label>
                                    <input type="number" name="mobile" required/>
                                </div>
                                <div class='inline'>
                                    <label for="E-Mail">E-mail:</label>
                                    <input type= "email" name="email" required/>
                                </div>
                            </div>
                            <br>    
                             <div>
                                <label for="Parent-name">Gaurdian's Name:</label>
                                <input type="text" name="gaurdian" style="width:50%;" required/>

                            </div>
                            <br>
                            <div>
                                <label for="Parent-Mobile">Gaurdian's Mobile:</label>
                                <input type="number" name="gaurd-mobile" required/>
                            </div>
                            <br>
                            <div>
                                <label for="address">Address:</label>
                                <textarea name="address" required></textarea>
                            </div>
                            <br>
                            <div>
                                <label for="Date">Reg Date:</label>
                                <input type="date" name="reg-date"  value="<?php echo date("Y-m-d");?>" required/>
                            </div>
                            <br>
                            <br>
                            <div>
                                <button class="mybutton "><input type="submit" value="SUBMIT" name="submit" ></button>  

                            </div>

                        </fieldset>

                    </form>
                                 <div>
                                     <a href="studsearch.php"><button class="mybutton" onclick="">SEARCH</button></a>
                                <a href="InstructorRegistration.php"><button class="mybutton">Instructors</button></a>
                            </div>



                  </div>  
                </div>  
                <div class="cell colspan3"></div>
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
