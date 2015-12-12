<?php
    include "connection.php";
    $final_text="[";
    $query="SELECT * FROM buildings WHERE buildingtype=4";

    if (!$q=$mysqli->query($query)){
      echo "<p>An error has occured. Please try later.</p>";
      exit();
    }
    if ($q->num_rows>0){
      while ($row=$q->fetch_object()){
        $naziv = $row->buildingname;
        $long = $row->buildinglongitude;
        $lat= $row->buildinglatitude;

        $final_text.="{\"name\": \"$naziv\", \"lat\": $lat, \"long\": $long},";
      }
    

      $final_te=rtrim($final_text, ",");
  
      $final_te.="]";

      echo $final_te;
  }
  
    
  