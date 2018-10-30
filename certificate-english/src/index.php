<html>
	
<head>
<title>Ocean Wise Seafood Training Certificate</title>

<STYLE>

.result {
	position:absolute;
	left:110px;
	top:200px;
	width:560px;
	font-family:Arial, Helvetica, sans-serif;
	font-size:16pt;
	color:#000000;
	z-index:2;
}

.bgimage{
	position:relative;
	z-index:1;
}



</STYLE>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-305660-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body>

<p>
  <?php
// this starts the session
session_start();

// little script to pull the current date/time; can also be done via JavaScript or 100 other ways
include($_SERVER['DOCUMENT_ROOT']."/support/gabe/simple-php-form/includes/now.fn");

// this sets variables in the session
$_SESSION['time']=$now;
?>

</p>
<center>
<table width="720" border="0" cellspacing="0" cellpadding="0" style="border: 1px solid black;">
  <tr>
    <td><img src="images/header.png" width="720" height="63" alt="Header"></td>
  </tr>
  <tr>
    <td>
    
    <p>&nbsp;</p>
    <table width="700" border="0" cellspacing="0" cellpadding="20">
      <tr>
        <td><p STYLE="font: 12pt verdana;"><strong>Congratulations, you have completed the Ocean Wise seafood online training.</strong></p>
          <p STYLE="font: 10pt verdana;">You are now a trained Ocean Wise seafood ambassador.</p>
          <p STYLE="font: 10pt verdana;">Please fill out the  form below to generate your certificate.</p>
          <p STYLE="font: 10pt verdana;">From the next page you can print your certificate by pressing CTRL+P on your keyboard. </p></td>
      </tr>
    </table>
    <p STYLE="font: 10pt verdana;">
    <form action="certificate.php" name="firstSubmit" method="POST">


<table border="0" cellspacing="20">
	
	<tr>
		<td><p STYLE="font: 10pt verdana;">Full Name:</p> </td>
		<td><input name="fullname" id="name" type="text" size="20" maxlength="80"></td>
	</tr>
	<tr>
		<td><p STYLE="font: 10pt verdana;">Date:</p></td>
		<td><input name="date" id="date" type="text" size="20" maxlength="80"></td>
	</tr>
	
	
	<tr>
		<td>&nbsp;</td>
		<td colspan="2"><input type="Submit" name="submit" value="Generate Certificate"></td>
	</tr>
</table>

</form>
<br><br>
    
    </td>
  </tr>
  <tr>
    <td><img src="images/footer.png" width="720" height="63"></td>
  </tr>
</table>

</center>

	

</body>
</html>