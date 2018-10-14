<!doctype html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<title>JavaJam Coffee House</title>
<meta charset=“utf-8”>
<style>
body {
background-color: #ffffcc;
font-family: Verdana, sans-serif
}
#wrapper {
background-image: url(src/content-image-background.JPG);
width: 80%;
margin: auto;
min-width: 1100px;
margin-top: 30px;
box-shadow: 5px 5px 10px #666666;;
}
#leftcolumn {
background-image: url(src/right-column.JPG);
float: left;
width: 155px;
height: 650px;
}
#rightcolumn {
margin-left: 155px;
height: 640px;
}
#bottomcolumn {
margin-bottom: 10px;
margin-top: 10px;
background-color: #D2B58B;
}
#floatright {
float: right;
padding-right: 180px;
}
#floatleft {
float: left;
padding-left: 30px;
}
header{
background-color: #D2B58B;
color: #00005D;
font-size: 150%;
padding: 20px 10px 10px 155px;
font-weight: bold;
}
h1 {
font-weight: bold;
padding-bottom: 10px;
padding-left: 26px;
}
nav a {
text-decoration: none;
color: #97672E;
}
nav ul {
list-style-type: none;
}
nav li {
padding: 2px 9px;
font-family: arial, sans-serif;
font-weight: bold;
font-size: 20px;
}
nav li a:hover {
color: chocolate;
}
.content {
padding-left: 20px;
padding-top: 10px;
color: #43210a;
}
footer {
font-size: 90%;
padding-top: 15px;
padding-bottom: 15px;
text-align: center;
}
table {
	margin-top: 10px;
	margin-left: 100px;
	width: 800px;
	height: 400px;
	border-spacing: 2px;
	color: #43210a;
}
th {
	padding-top: 10px;
	padding-bottom: 10px;
 	text-align: center;
}
td, tr {
	padding-left: 10px;
	padding-right: 10px;
	padding-top: 5px;
	padding-bottom: 5px;
	background-color:#D2B58B;
}
input[type=text]{
    width: 100px;
		background-color: lightgray;
		border-color: lightgray;
}
input[type=number].price{
    width: 60px;
		background-color: lightgray;
		border-color: lightgray;
}
input[type=number].subtotal{
    width: 60px;
		background-color: lightgray;
		border-color: lightgray;
}
input[type=number].total{
    width: 60px;
		background-color: lightgray;
		border-color: lightgray;
}
input[type=number]{
    width: 60px;
}
</style>
</head>
<body>
<div id="wrapper">

	  <header>
	    <img src="src/title.JPG">
	  </header>

  <div id="leftcolumn">
	  <nav>
		  <ul>
	      <li><a href="index.html">Home</a></li>
	      <li><a href="menu.php">Menu</a></li>
	      <li><a href="music.html">Music</a></li>
	      <li><a href="jobs.html">Jobs</a></li>
			</ul>
	  </nav>
  </div>

  <div id="rightcolumn">

  	<div class="content">
			<h1><a href="update.html">Coffee at JavaJam</a></h1>
  	</div>

	<form action="menu_order.php" method="post">

		<table border="0" class="table">

			<col width="100">
			<col width="200">
			<col width="150">
			<col width="50">
			<col width="50">
			<col width="100">

			<tr>
				<th>
					Name
				</th>
				<th>
					Description
				</th>
				<th>
					Size
				</th>
				<th>
					Price
				</th>
				<th>
					Quantity
				</th>
				<th>
					Subtotal
				</th>
			</tr>

			<?php
				require 'menu_update.php';
			?>

			<tr>
				<th colspan="6" align="right">
						<a> Total Price: $ </a><input type="number" readonly class="total" name="total">&nbsp
						<input class="submitButton" type="submit" value="Order Now">&nbsp
						<input class="clearButton" type="button" value="Clear">
				</th>
			</tr>

		</table><br>
	</form>
</div>

 <footer id="bottomcolumn">
		<small>
			<i>
			Copyright &copy 2018 JavaJam Coffee House<br>
			<a href="mailto:chyeegin@hotmail.com">ChyeeGin@Phua.com</a>
			</i>
		</small>
	</footer>

</div>
<script src="menu.js"></script>
</body>
</html>
