<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="EN" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Hello UserName</title>
<link rel = "stylesheet"
      type = "text/css"
      href = "helloUser.css" />
</head>
<body>

	<h1>Module 2: Hello User!</h1>
	<p>PHP program that receives a value from the "helloUser.html" HTML Form and illustrates the use of the GET method</p>

<?php 
$userName = filter_input(INPUT_GET, "userName");

  print "<h3>Hello there, $userName!</h3>";

?>

</body>
</html>
