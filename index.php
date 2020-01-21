<!doctype html>
<html>
<head>
  <title>Home</title>
  <link rel="icon" type="image/jpg" href="images/icon.jpg">

<title>SoftwareGalaxy</title>
<style>
	#a{color:#2ba1af; font-size:65px;}
	#b{color:#c3c3c3; font-size:20px;}
</style>
<link href="css/menu.css" rel="stylesheet" type="text/css">
<link href="css/slide.css" rel="stylesheet" type="text/css">

</head>

<body background="images/bged.jpg">

	
<center>
<h1 id="a">Software Galaxy</h1>
<h4 id="b">Download Free Your Desired App</h4><br>
</center>


  <div class="content">
   

<div class="topnav">
  <a class="active" href="index.html">Home</a>
  <a href="os.html">Operating Systems</a>  
    <a href="multimedia.html">Multimedia</a>
      <a href="avs.html">Anti-virus</a>
       <a href="development.html">Development Tools</a>
       <a href="android.html">Android</a>
       <a href="contact.html">Contact Us</a>
        
  <input type="text" placeholder="Search.." name="search">
      <input type="submit" value="Search">
</div>
<hr>
<div class="container">


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 8</div>
  <img src="slideimg\sl1.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 8</div>
  <img src="slideimg\sl2.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 8</div>
  <img src="slideimg\sl3.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 8</div>
  <img src="slideimg\sl4.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 8</div>
  <img src="slideimg\sl5.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">6/ 8</div>
  <img src="slideimg\sl6.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">7 / 8</div>
  <img src="slideimg\sl7.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">8 / 8</div>
  <img src="slideimg\sl8.jpg" style="width:100%">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span> 
</div>
</div>


<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); 
}
</script>

<table bgcolor="white">
    <hr><tr>
      <td width="30%">
      <center><a href="office.html"><img src="images/office.jpg" width="250" height="200" border="1"></a></center><br></td>
      <td width="70%"><h3><a href="office.html">Office 365</a></h3>
        <p>Office 365 Pro Plus is just like any other Office version and it contains all the basic features that you will find in other Office versions. It is not a web based version and works locally on your computer. It means you don’t need to be connected to the internet for using its features. Though it has many similarities to the other Office versions but still their are differences like Office 365 Pro Plus need to renew license every month and if you will not renew its license it will go into the reduced functionality mode in which you can open and view your old files with less features. Office 2013 Professional Plus is another great alternative.</p><hr></td>
    </tr>

    <tr>
      <td>
        <center><a href="vlc.html"><img src="images/vlc.jpg" width="250" height="200" border="1"></a></center><br></td>
      <td><h3><a href="vlc.html">VLC Media Player</a></h3>
        <p>VLC Media Player 3.0.0 is a powerful, reliable and customizable media player which will allow you to enjoy all the media formats as well as your favorite radio stations. Media files are present in a wide range of file formats and all these formats are not supported by all the media players. Among all of the media players available in the market VLC Media Player 3.0.0  is one of them. You can also download Media Player Classic.VLC Media Player 3.0.0 has got simple and clean looks with no glistening buttons and elements for enhancing the interface. But you can customize the layout of the media player from the Options menu. <p><hr></td>
    </tr>

    <tr>
      <td>
      <center><a href="kaspersky.html"><img src="images/kaspersky.jpg" width="250" height="200" border="1"></a></center><br></td>
      <td><h3><a href="kaspersky.html">Kaspersky</a></h3>
        <p>Kaspersky Internet Security 2019 is a very handy application which can be used for protecting your PC from malware, viruses and rootkits etc. This impressive security application delivers premium protection to the computers against Trojans, viruses, worms, backdoors and various other kinds of web-based threats. You can also download Kaspersky Internet Security 2020.Kaspersky Internet Security 2019 has got a quick and simple installation process and this application sets up all the components and it does not provide the users the possibility of excluding any of them. It has got a very user friendly interface which is very easy to navigate where all the primary modules can be accessed easily from the main menu through large buttons.</p><hr></td>
    </tr>

    </table>

 
</div>


</body>
</html>
