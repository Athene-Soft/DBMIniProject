<?php include("includes/header.php");  ?>

 <script>
        function getStudentInfo(str){
            if (str==""){
            document.getElementById("_margin20").innerHTML="";
            return;
            }
            if (window.XMLHttpRequest)
            {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
            }
            else
            {// code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function(){
                if (xmlhttp.readyState==4 && xmlhttp.status==200){
                document.getElementById("myForm").innerHTML="";
                document.getElementById("_margin20").innerHTML=xmlhttp.responseText;
                }
            }
        xmlhttp.open("GET","getstudattend.php?q="+str,true);
        xmlhttp.send();
        }
</script>

    <div class="charm right-side padding20 bg-grayDark" id="charmSettings">
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

    <div class="tile-area tile-area-scheme-dark fg-white">
        <h1 class="tile-area-title">Student Attendance</h1>
        <div class="tile-area-controls">
            <button class="image-button icon-right bg-transparent fg-white bg-hover-dark no-border"><span class="sub-header no-margin text-light">Sergey Pimenov</span> <span class="icon mif-user"></span></button>
            <button class="square-button bg-transparent fg-white bg-hover-dark no-border" onclick="showSearch()"><span class="mif-search"></span></button>
            <button class="square-button bg-transparent fg-white bg-hover-dark no-border" onclick="showSettings()"><span class="mif-cog"></span></button>
            <a href="../tiles.html" class="square-button bg-transparent fg-white bg-hover-dark no-border"><span class="mif-switch"></span></a>
        </div>
        <div class="margin40">
            <div class="grid" style="margin-left:50px">
                <div class="row cells12">
                    <div class="cell colspan4 " >
                        
                                
                                <div class="input-control text" data-role="input">
                                <label>Date</label>
                                <input type="date">
                                </div>
                                <br>
                                <br>
                                <div class="place-left">
                                    <div class="input-control text" data-role="input">
                                    <label>ID No.</label>
                                    <input type="text" id="student_id">
                                    </div>
                                </div>
                                <div class="place-right" >
                                    <!-- <input type="submit" value="OK" name="submit"> -->
                                    <input type="button" value="OK" onclick="getStudentInfo(student_id.value)">
                                </div>
                                <br>
                                <div id = "myForm" class="place-left"> There is No such a student </div>
                        <br>    
                        <br>
                        <br>
                        
                        <div class="margin20" id="_margin20">
                            
                            <div><label>Name:</label><label style="margin-left:10px"> </label></div> 
                            <br>
                            <div><label>Grade:</label><label style="margin-left:10px"> </label></div> 
                             
                        </div>
                        <div style="margin-top: 15%">
                            <div>
                                <button class="place-right">More Info</button>
                            </div>

                            <div>
                                <button class="place-left">Student's Attendance</button>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="cell colspan1" style="float: left">
                        <div style="height:400px;width:0;border:0;border-left:3px;border-style:double;border-color:#FFFFFF ;padding-left: 5px;padding-right: 5px"></div>
                    </div>
                    
                    <div class="cell colspan4">
                        
                                <div>
                                    <div class="inline" style="float: left;margin-right:10px">
                                        <select name="grade" onchange="showCustomer(this.value)">
                                        <option value="">Select Subject:</option>
                                        <option value="10">GRADE 10</option>
                                        <option value="11 ">GRADE 11</option>
                                        <option value="12">GRADE 12</option>
                                        </select>

                                    </div>
                                    <div class="inline" style="float: left;margin-right:10px">
                                        <select name="grade" onchange="showCustomer(this.value)">
                                        <option value="">Select The Instructor:</option>
                                        <option value="10">GRADE 10</option>
                                        <option value="11 ">GRADE 11</option>
                                        <option value="12">GRADE 12</option>
                                        </select>
                                    </div>    
                                </div>
                                <br>
                                <br>
                                
                                <label>Sub. ID:</label><label style="margin-left: 10px"></label><label>VALUE</label>
                                <br>
                                <br>
                                <label>Hall No:</label><label style="margin-left: 10px"></label><label>VALUE</label>
                                <br>
                                <br>
                                <br>
                                <br>
                                <div>
                                <button id="markpresent" onclick="">Mark <br>Present</button>                                
                                </div>
                                <br>
                                <br>
                                <br>
                                
                                <div class="place-left" style="margin-top:20px;">
                                    <div class="inline" style="float: left;margin-right:10px">
                                        <button id="" onclick="">Current Attendance</button>
                                    </div>
                                    <div class="inline" style="float: left;margin-right:10px">                               
                                        <button id="" onclick="">END</button>
                                    </div>
                                    <div class="inline" style="float: left;margin-right:10px">
                                        <button id="" onclick="">Menu</button>
                                    </div>    
                                </div>
                        </div>
                    </div>
                </div>
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