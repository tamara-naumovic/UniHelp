<ul>
<?php
if(isset($_GET['name'])){
  include "connection.php";

  $query1="SELECT * FROM users WHERE fax='".$_GET['name']."'";

  if (!$q1=$mysqli->query($query1)){
                    echo "<p>There was an error. Please try again later</p>";
                    exit();
                  }
                  if ($q1->num_rows==0){
                    echo "There are no students in the datebase";
                  } else {
                    while ($row1=$q1->fetch_object()){
                      ?>
                      <li><?php echo $row1->name; ?></li><hr><br>
                      <?php }
                    }
                    $mysqli->close();
                    ?>
                    
</ul>
}