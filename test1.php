<? 



$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comments = $_POST['comments'];
$to = "dlech1825@yahoo.com";
$subject = "Please contact me with more info";
$message = 'Someone has filled out the contact form on your website' . "\n\n";


$message .= 'Name: ' . $name . "\n";
$message .= 'Email: ' . $email . "\n";
$message .= 'Phone: ' . $phone . "\n";
$message .= 'Comments: ' . $comments . "\n";


mail($to,$subject,$message,"From: info@wpwash.com"); 






?> 


<html>
  <head>
    <title>Wayne Power Washing</title>
        <style type="text/css">
        <!--
      BODY {font-family:"Arial"; font-size:14;margin:0px;padding:0px;text-align:center;min-width:760px;}
      P {font-family:"Arial"; font-size:14;}
      FORM {margin:0;padding:0;}
      #centerwrapper {text-align:left;width:760px;margin-left:auto;margin-right:auto;}
body,td,th {
	font-size: 14px;
}
a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #000000;
}
a:hover {
	text-decoration: none;
	color: #FF0000;
}
a:active {
	text-decoration: none;
}
.style1 {
	font-size: 18px;
	font-weight: bold;
	color: #000066;
}
.style4 {color: #000066; font-weight: bold; }
.style5 {font-size: 12px; font-weight: bold; color: #000066; }
.style6 {font-size: 12px
}
    -->
        </style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
  <body bgcolor="#C8E6BB" text="#000000" topmargin="0" leftmargin="0">


<div id="centerwrapper">
      <div id="root" style="position:absolute;width:760px;height:820px;">

        <div id="e0" style="position:absolute;left:0;top:0;width:760;height:800;"><img src="images/background2.jpg" width="760" height="800" alt=""></div>

        <div class="style6" id="e1" style="position:absolute; left:80; top:250; width:625; height:32;"><a href="index.html" target="_self"><strong>Home</strong></a> | <strong><a href="housewashing.html" target="_self">House Washing </a></strong><a href="concretecleaning.html" target="_self"><strong>| </strong></a><strong><a href="roofcleaning.html" target="_self">Roof Cleaning</a> <a href="roofcleaning.html" target="_self">|</a></strong> <strong><a href="deckrestoration.html" target="_self">Deck Restoration</a></strong><a href="concretecleaning.html" target="_self"><strong> | </strong></a><strong><a href="concretecleaning.html" target="_self">Concrete Cleaning</a></strong> | <a href="gallery.html" target="_self"><strong>Photo Gallery</strong></a> | <a href="contactus.html" target="_self"><strong>Contact Us</strong></a> </div>
        <div id="e6" style="position:absolute;left:70px;top:279px;width:625;height:413;">
          <div align="center"> 
            <p class="style1"><br><br><br>Thank You for your interest in Wayne Power Washing.<br><br>Someone will be in contact with you shortly.</p>
          </div>
        </div>
        
      </div>
    </div>
  </body>
</html>
