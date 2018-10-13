<?php

  // var_dump_pre($_POST['item']);
  // var_dump_pre($_POST['total']);
  // function var_dump_pre($mixed = null) {
  //   echo '<pre>';
  //   var_dump($mixed);
  //   echo '</pre>';
  //   return null;
  // }

  $item = $_POST['item'];
  $total = $_POST['total'];

  @ $db = mysqli_connect("localhost", "root", "", "java-jam-coffee");

  if (mysqli_connect_errno()) {
    echo "<br>Failed to connect to MySQL: " . mysqli_connect_error();
    exit;
  } else {
    echo "<br>Connected";
  }

  $N = count($item);
  echo "<br>Total length is $N.";

  for($i=0; $i < $N; $i++) {
    if(empty($item[$i]['checkbox']))
    {
      echo "<br>You didn't select checkbox $i";
    }
    else
    {
      echo "<br>You have selected checkbox $i: ".$item[$i]['checkbox'];

      $query = "INSERT INTO `orders`(`item_id`, `qty`, `amount`) VALUES ('".$item[$i]['item_id']."','".$item[$i]['quantity']."','".$item[$i]['subtotal']."')";

      $result = mysqli_query($db,$query);

      if ($result) {
          echo "<br>Update Completed." ;
      } else {
      	  echo "<br>An error has occurred.";
      }
    }
  }

  $db->close();
  echo '<br>Disconnected';
  
?>
