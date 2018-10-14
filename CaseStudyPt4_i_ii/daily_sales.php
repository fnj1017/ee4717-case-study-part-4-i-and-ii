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
height: 430px;
}
#rightcolumn {
margin-left: 155px;
height: 420px;
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
color: red;
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
	width: 400px;
	height: 200px;
	border-spacing: 2px;
	color: #43210a;
}
td {
	text-align: center;
	padding-left: 20px;
	padding-right: 20px;
}
tr {
	text-align: center;
	background-color:#D2B58B;
}
input[type=number]{
    width: 70px;
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
				<li><a href="menu.php"><</a></li>
	      <li><a href="update.html">Price Update</a></li>
	      <li><a href="report_update.php">Sales Report</a></li>
	      <li><a href="daily_sales.php">Daily Sales</a></li>
			</ul>
	  </nav>
  </div>

  <div id="rightcolumn">

		<div class="content">
			<h1>Daily Sales</h1>
  	</div>

		<table border="0" class="table">
			<tr>
				<th>
					<a>View Page</a>
				</th>
			</tr>
			<tr>
				<td>
					<form action="daily_sales_update.php" method="get">
						<label>Page No.: </label>
						<input type="number" name="page" min="1">
						<label>Date: </label>
						<input type="date" name="date">
						<button type="submit" name="submit" value="submit">Find</button>
					</form>
				</td>
			</tr>
		</table>

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
</body>
</html>
