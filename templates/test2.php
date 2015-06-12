<!DOCTYPE html>
<html>
<head>
<script>
function showCustomer(str)
{
var xmlhttp;    
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="blahh";
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
xmlhttp.open("GET","getuser.php?q="+str,true);
xmlhttp.send();
}
</script>
</head>
<body>

<form action=""> 
<select name="grade" onchange="showCustomer(this.value)">
<option value="">Select a grade:</option>
<option value="10">GRADE 10</option>
<option value="11 ">GRADE 11</option>
<option value="12">GRADE 12</option>
</select>
</form>
<br>
<div id="txtHint">student info will be listed here...</div>

</body>
</html>
