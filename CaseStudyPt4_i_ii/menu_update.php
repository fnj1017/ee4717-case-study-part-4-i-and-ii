<?php

  @ $db = mysqli_connect("localhost", "root", "", "java-jam-coffee");

  if (mysqli_connect_errno()) {
    echo "<br>Failed to connect to MySQL: " . mysqli_connect_error();
    exit;
  }

  $query = 'SELECT * FROM `products`';
  $result = mysqli_query($db,$query);

  $num_results = $result->num_rows;

      for ($i=0; $i <$num_results; $i++) {
         $row = $result->fetch_assoc();

         echo '<tr class="form">';

           echo '<td class="a" style="text-align:center;" name="item['.$i.'][name]">';
            echo htmlspecialchars(stripslashes($row['name']));
            echo '<input type="hidden" class="item_id" name="item['.$i.'][item_id]" value="'.stripslashes($row['item_id']).'">';
           echo '</td>';

           echo '<td name="item['.$i.'][description]">';
            echo htmlspecialchars(stripslashes($row['description']));
           echo '</td>';

           echo '<td>';
            echo '<input type="checkbox" class="checkbox" name="item['.$i.'][checkbox]" value="yes">';
             echo '&nbsp';
            echo '<input type="text" readonly class="size" name="item['.$i.'][size]" value="'.stripslashes($row['size']).'">';
           echo '</td>';

           echo '<td style="text-align:center;">';
            echo '<input type="number" readonly class="price" name="item['.$i.'][price]" value="'.stripslashes($row['price']).'">';
           echo '</td>';

           echo '<td style="text-align:center;">';
            echo '<input type="number" class="quantity" min="1" name="item['.$i.'][quantity]">';
           echo '</td>';

           echo '<td style="text-align:center;">';
            echo '$ <input type="number" readonly class="subtotal" name="item['.$i.'][subtotal]">';
           echo '</td>';

         echo '</tr>';

      }

  $result->free();
  $db->close();

?>
