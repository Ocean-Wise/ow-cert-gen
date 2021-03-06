<html>
	
<head>
<title>Ocean Wise Training Certificate</title>
<STYLE>

.result {
	position:absolute;
	left:0px;
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
	

	
	<?php
// this starts the session
session_start();

// little script to pull the current date/time; can also be done via JavaScript or 100 other ways
include($_SERVER['DOCUMENT_ROOT']."now.fn");


// this pulls input variables from the session form 
$_SESSION['fullname']		= $_POST['fullname'];
$_SESSION['date'] 			= $_POST['date'];
$_SESSION['company'] 		= $_POST['company'];
$_SESSION['time'] 			= $_POST['time'];

?>
<div class='bgimage'><img src='images/certificateBG3.gif'/></div>

<div class='result'>
<center>
<table border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td align="center">
		<img src="images/spacer.gif" width="800" height="3"><br>
		
		<h2 STYLE="font: 14pt verdana;">The Ocean Wise seafood program hereby certifies that</h2>
		
		<h2 STYLE="font: 14pt verdana; font-weight:bold;">
			<?php echo  $_SESSION['fullname']; ?><br>
		</h2>
		<h2 STYLE="font: 14pt verdana;">
		has successfully completed Ocean Wise seafood training on
		</h2>
		<h2 STYLE="font: 14pt verdana; font-weight:bold;">				
		<?php echo  $_SESSION['date']; ?><br><br>
		</h2>
		<br><br>
		<br><br>
		<br><br>
		<br><br>
		<br><br>
		<img src="images/spacer.gif" width="415" height="20">
		</td>
	</tr>
</table>
</center>
</div>

</body>

</html>