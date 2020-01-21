<!doctype html>
<html>
<head>

<title>Contact</title>
<style>
  #a{color:#2ba1af; font-size:65px;}
  #b{color:#c3c3c3; font-size:20px;}
</style>
<link href="css/menu.css" rel="stylesheet" type="text/css">
<script>
	function a()
	 {
		var x=document.getElementById("name").value;
		if(x=="")
			{alert("You Must Enter Name");}

		var x=document.getElementById("email").value;
		if(x=="")
			{alert("You Must Enter Email");}

		var x=document.getElementById("feedback").value;
		if(x=="")
			{alert("You Must Enter Feedback");}
	}


</script>
</head>

<body>

<body background="images/bged.jpg">

  
<center>
<h1 id="a">Contact Us</h1>
<h4 id="b">Download Free Your Desired App</h4><br>
</center>


  <div class="content">
   

<div class="topnav">
  <a class="active" href="index.html">Home</a>
  <a href="os.html">Operating Systems</a>  
    <a href="multimedia.html">Multimedia Tools</a>
      <a href="avs.html">Anti-virus</a>
       <a href="development.html">Development Tools</a>
       <a href="android.html">Android</a>
       <a href="contact.html">Contact Us</a>
        
  <input type="text" placeholder="Search.." name="search">
      <input type="submit" value="Search">
</div>

<table bgcolor="white">
  <hr><tr>
    <td>  
          <center><h1>Contact Us</h1></center>

          <P>We welcome your feedback and suggestions. Please Send an email on below address or submit below form</P>

 <h2>swgalaxy@gmail.com</h2><br>
 <form>
  <table>
  <tr>
    <td width="1000"><center>Name</center></td>
    <td width="1000"><input type="text" size="50" id="name"><br></td>
  </tr>
   <tr>
    <td><center>E-Mail Eddress</center></td>
    <td><input type="email" size="50" id="email"></td>
  </tr>
   <tr>
    <td><center>Subject</center></td>
    <td><input type="text" size="50" name="subject"></td>
  </tr>
   <tr>
    <td><center>Feedback</center></td>
    <td><input type="text" size="50" id="feedback"></td>
  </tr>
</table><br><br><br>
<center><input type="image" src="images/submit.png" onclick="a()" width="200" height="70"></center>
 </form><br><br><br><br>

 <h2>Follow Us</h2><br><br>

 <div class="row"><center>
  <div class="column">
    <img src="images/fb.png" width="100" height="100">
  </div>
  <div class="column">
    <img src="images/insta.jpg" width="100" height="100">
  </div>
  <div class="column">
    <img src="images/tw.png" width="100" height="100">
  </div></center>
</div>
<br><br><br><br>




      


    </td>
  </tr>
  </table>
  </div>
</body>
</html>
