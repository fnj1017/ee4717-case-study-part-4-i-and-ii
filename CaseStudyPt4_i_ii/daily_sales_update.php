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
width: 600px;
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
a.curPage {
  font-weight: bold;
}
div.pages {
  margin: 0 auto;
  width: 200px;
  padding: 20px;
}
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

  <?php

        function console_log($data){
          echo '<script>';
          echo 'console.log('. json_encode($data) .')';
          echo '</script>';
        }

        @ $db = mysqli_connect("localhost", "root", "", "java-jam-coffee");

        if (mysqli_connect_errno()) {
          echo "<br>Failed to connect to MySQL: " . mysqli_connect_error();
          exit;
        }

        $results_per_page = 10; // number of results per page

        if (isset($_GET["date"])) {
          $page  = $_GET["page"];
          $date = $_GET['date'];
          console_log($date);
        } else {
          $page=1;
        };

        $start_from = ($page-1) * $results_per_page;
        $query = "SELECT * FROM `orders` WHERE `timestamp` BETWEEN '".$date." 00:00:00' AND '".$date." 23:59:59' ORDER BY order_id ASC LIMIT $start_from, ".$results_per_page;

        $result = mysqli_query($db,$query);
        $num_results = $result->num_rows;

        echo '<table border="0" class="table">';
          echo '<tr>';
            echo '<th>';
              echo 'Timestamp';
            echo '</th>';
            echo '<th>';
              echo 'Order Id';
            echo '</th>';
            echo '<th>';
              echo 'Item Id';
            echo '</th>';
            echo '<th>';
              echo 'Quantity';
            echo '</th>';
            echo '<th>';
              echo 'Subtotal ($)';
            echo '</th>';
          echo '</tr>';

            for ($i=0; $i <$num_results; $i++) {
               $row = $result->fetch_assoc();

               echo '<tr class="form">';

                 echo '<td name="item['.$i.'][timestamp]">';
                  echo htmlspecialchars(stripslashes($row['timestamp']));
                 echo '</td>';
                 echo '<td name="item['.$i.'][order_id]">';
                  echo htmlspecialchars(stripslashes($row['order_id']));
                 echo '</td>';
                 echo '<td name="item['.$i.'][item_id]">';
                  echo htmlspecialchars(stripslashes($row['item_id']));
                 echo '</td>';
                 echo '<td name="item['.$i.'][qty]">';
                  echo htmlspecialchars(stripslashes($row['qty']));
                 echo '</td>';
                 echo '<td name="item['.$i.'][amount]">';
                  echo htmlspecialchars(stripslashes($row['amount']));
                 echo '</td>';

               echo '</tr>';

            }

        echo '</table>';

        $sql = "SELECT COUNT(`timestamp`) AS total FROM `orders` WHERE `timestamp` BETWEEN '".$date." 00:00:00' AND '".$date." 23:59:59'";
        $result = $db->query($sql);
        $row = $result->fetch_assoc();
        $total_pages = ceil($row["total"]/$results_per_page); // calculate total pages with database

        echo "<div class='pages'>"; // print links for all pages
        for ($i=1; $i<=$total_pages; $i++) {
                    echo "<a href='daily_sales_update.php?page=".$i."&date=".$date."'";
                    if ($i==$page) {
                      echo " class='curPage'";
                    }
                      echo ">".$i."</a> ";
        };
        echo "</div>";

        $result->free();
        $db->close();

      ?>
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
