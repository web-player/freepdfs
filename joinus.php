<?php
//joinus.php
include "core.php";
//include "/user/core.inc.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--join us page-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Join Us</title>
<meta name="keywords" content="PDFs Books" />
<meta name="description" content="Free Pdfs to download" />
<link href="http://fonts.googleapis.com/css?family=Varela" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<?php include "header.php";?>
	</div>
	<div id="banner">
		<div class="container">
			<div class="title">
				<h2>Join Us</h2>
				<span class="byline">Please provide us with Following Details About Yourself. 
				</span>  
			</div>
		</div>
	</div>

	<div id="featured">
		<div class="container">
			<div class="title">
				<h2></h2>
				<span class="byline">
				</span> </div>
			<?php include "user/register.php";?>
		</div>
	</div>
	<div id="page" class="container">
		<div class="title">
			<h2></h2>
			<span class="byline"></span> </div>
		<p><?php  echo "Already a member login in here";?> </p>
		<ul class="actions">
			<li><a href="login" class="button">Login</a></li>
		</ul>
	</div>
</div>
<div id="copyright" class="container">
	<?php include "footer.php";?>
</div>
</body>
</html>
