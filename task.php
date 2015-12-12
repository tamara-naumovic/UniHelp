<?php @session_start();?>
<?php
  
    if(!isset($_SESSION['use']))   
    {
    header("Location:index.php"); 
    }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>UniHelp - Task</title>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" type="text/css" href="bootstrap/dist/css/feed.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,100' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/dist/js/bootstrap.min.js"></script>
  <style>
  .logo{height: 55px; padding-top: 0px}
  #head-text{color: white}
  </style>
</head>
<body>
    
        
<?php include ("menu.php"); ?>
<div class="container">
        <!--wall -->
          <div class="wrap-wall">
          <div class="wall">
              <br>
              <br>
              <br>
              <br>        
              <!-- leva strana-->      
              <div class="col-md-3">
             
              </div>
              <!-- kraj leve strane-->
              <!--pocetak taska opisa -->
              <div class="col-md-6">
                <header id="task-page" style="span:last-child:hover {
  background-color: #f3a41e;">
                  <span class='first'></span>
                  <span>Task info</span>
                  <span >
                  </span>
                </header>
                <div class="panel panel-warning" id="task-wrap" > 
                    <?php
                    if(isset($_GET['id'])){
                        include "connection.php";

                        $query="SELECT * FROM tasks WHERE task_id='".$_GET['id']."'";

                        if (!$q=$mysqli->query($query)){
                          echo "<p>There was an error. Please try again later</p>";
                          exit();
                        }
                        if ($q->num_rows==1){
                          $row=$q->fetch_object();
                      ?>
                    <div class=panel-body> 
                      <div class='body'>
                        <img alt='kanye' src='http://f.cl.ly/items/1m050C1L382z1c1a1S2E/322005-kanye-west.png'>
                        <div class='t'>
                          <span class='name' id="task-org-name"><a href="#"><?php echo $row->org_name; ?></a></span>
                          
                        </div>
                        <div class='b' id="task-description" style="font-size:100%"><?php echo $row->description; ?></div>
                      </div>
                      <br>
                      <div class='b' id="parc-number" style="font-size:100%">Number of participants needed <?php echo $row->parc_number; ?> </div>
                      <br>
                      <div class='b' id="task-location" style="font-size:100%">Location<br> <?php echo $row->location; ?> </div>
                      <br>
                      <div class='b' id="task-reward" style="font-size:100%">Reward<br> <?php echo $row->reward; ?> </div>
                      <br>
                      <div class='b' id="exps" style="font-size:100%">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Social</th>
                            <th>Career</th>
                            <th>Collaboration</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>+<?php echo $row->exps; ?></td>
                            <td>+<?php echo $row->expc; ?></td>
                            <td>+<?php echo $row->expo; ?></td>
                          </tr>
                                                   
                        </tbody>
                      </table>

                      </div>
                      <form action="task.php?id=<?php echo $row->task_id; ?>" method="post">
                         <?php }
                         //$participants=[];
                        // $br=0;
                         //if($br==$row->parc_number) {
                          ?>
                          <!-- <button type="button" class="btn btn-default" style="margin-left:70%;">Enroll</button> -->

                        <?php
                       // echo "Task full!"; }
                         if(!isset($_SESSION['enroll'.$row->task_id])){
                         if(!isset($_POST['enroll'.$row->task_id])) { 
                          
                        ?>                 
                      <button name="enroll<?php echo $row->task_id; ?>" type="submit" class="btn btn-success" style="margin-left:70%;">Enroll</button>
                      </form>
                      <?php }  else{
                        ?>
                        
                      <button type="button" class="btn btn-default" style="margin-left:70%;">Enroll</button>
                        <br><?php
                        echo "Enrolled successfully!";
                        $_SESSION['enroll'.$row->task_id]=$_POST['enroll'.$row->task_id];
                        while($br<=$row->parc_number){
                          array_push($participants, $_SESSION['id']);
                          $br++;
                        }

                         } 
                       }else {?>
                        <button type="button" class="btn btn-default" style="margin-left:70%;">Enroll</button>
                        <br>
                        <?php 
                        echo "Already enrolled!";
                      }
                        
                        ?>
                    </div> 
                  </div>
                  <?php
                }
              
              $mysqli->close();
                  ?>
                
              </div>
              <!-- kraj task opisa-->

              <!-- pocetak desne strane-->
              <div class="col-md-3">
              
              </div>
              <!-- kraj desne strane-->
            

           </div>

        </div>
        </div>
        
        
        
</body>