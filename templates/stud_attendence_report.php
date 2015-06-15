<?php include("includes/header.php");  ?>
    

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
    
    <script>
        function showInfo(str)
        {
        var xmlhttp;    
        if (str=="")
          {
          document.getElementById("txtHint").innerHTML="Please Enter ID No.";
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
        xmlhttp.onreadystatechange=function()
          {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
            }
          }
        xmlhttp.open("GET","getstudinfo.php?q="+str,true);
        xmlhttp.send();
        }
    </script>
    <script>
        function showMore(str)
        {
        var xmlhttp;    
        if (str=="")
          {
          document.getElementById("txtHint").innerHTML="Please Enter ID No.";
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
        xmlhttp.onreadystatechange=function()
          {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
            }
          }
        xmlhttp.open("GET","getstudinfo.php?q="+str,true);
        xmlhttp.send();
        }
    </script>

    <div class="tile-area tile-area-scheme-dark fg-white">
        <h1 class="tile-area-title">Attendence Report</h1>
        <div class="tile-area-controls">
            <button class="image-button icon-right bg-transparent fg-white bg-hover-dark no-border"><span class="sub-header no-margin text-light">Sergey Pimenov</span> <span class="icon mif-user"></span></button>
            <button class="square-button bg-transparent fg-white bg-hover-dark no-border" onclick="showSearch()"><span class="mif-search"></span></button>
            <button class="square-button bg-transparent fg-white bg-hover-dark no-border" onclick="showSettings()"><span class="mif-cog"></span></button>
            <a href="../tiles.html" class="square-button bg-transparent fg-white bg-hover-dark no-border"><span class="mif-switch"></span></a>
        </div>
        <div class="margin40" style="margin-left: 10% ">
            <div>
                <div >
                    <label style="float: left">Student ID: &nbsp</label>
                    <input style="float: left;margin-right: 2%;margin-left: 2%" type="text" id="ID" >
                    <label style="float: left">Student Name: &nbsp</label>
                    <input style="float: left;margin-right: 2%;margin-left: 2%" type="text" id="name" >
                    <button style="float: left;margin-right: 2%;margin-left: 2%" onclick="">Search</button>
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="grid">
                <div class="row cells12">
                    <div class="cell colspan4">
                        <table class="table bordered">
                            <label>BIOLOGY</label>
                            <th>Day</th><th>Date</th><th>Presence</th>
                            <tr><td>Day1</td><td>2015/6/2</td><td>Present</td></tr>
                            <tr><td>Day2</td><td>2015/6/2</td><td>Present</td></tr>
                            <tr><td>Day3</td><td>2015/6/2</td><td>Present</td></tr>
                            <tr><td>Day4</td><td>2015/6/2</td><td>Present</td></tr>
                        </table>
                    </div>
                    <div class="cell colspan4">
                        <div style="margin-top: 20%;margin-left: 10%">
                            <label>Total Missed Classes:&nbsp</label><label>VALUE</label>
                            <br>
                            <br>
                            <label>Repeatedly Missed:&nbsp</label><label>VALUE</label>
                        </div>
                    </div>
                    <div class="cell colspan4" >
                        <div style="margin-left: -35%;margin-top: 20%;">
                            <button style="padding: 5px">Alert Parent<br></button>
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