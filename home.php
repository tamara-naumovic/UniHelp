<?php @session_start();?>
<?php
  
    //if(!isset($_SESSION['use']))   
   // {
   //  header("Location:index.php"); 
   // }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootswatch: Flatly</title>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" type="text/css" href="bootstrap/dist/css/feed.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,100' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/dist/js/bootstrap.min.js"></script>



  </style>
</head>
<body>
    <div class="container">
        
<?php include ("menu.php"); ?>
        <!--wall -->
          <div class="wrap-wall">
          <div class="wall">
              <br>
              <br>
              <br>
              <br>        
              <!-- leva strana-->      
              <div class="col-md-3">
              <header class="tasks-search">

                  <span>Search</span>
                 
                </header>
                <br>
                    <form action="home.php" method="post" class="form-horizontal" id="search-forma">
                      <label  for="job-type">Job type</label>
                        <select name="job_type" class="form-control" id="job-type">
                          <option>Volunteering</option>
                          <option>Practice</option>
                          <option>Workshop</option>
                          <option>Learning</option>
                          <option>Physical work</option>
                        </select>
                        <br>
                      <label  for="peer-type">Location near by</label>
                        <select name="location" class="form-control" id="peer-type">
                          <option>4. April</option>
                          <option>C2S</option>
                          <option>O2S</option>
                          <option>All</option>
                          
                        </select>
                        <br>

                        <button name="choose" type="submit" class="btn btn-default">Submit</button>


                    </form>
              </div>
              <!-- kraj leve strane-->
              <!--pocetak wall-a -->
              <div class="col-md-6">
                <header>
                  <span class='first'></span>
                  <span>Add task</span>
                  <span><button type="button" class="btn btn-info btn-lg btn-warning" data-toggle="modal" data-target="#myModal" id="myBtn">&#9998;</button>
                     <!-- Modal -->
                      <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header" id="add-task-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title" >Add task</h4>
                            </div>
                            <div class="modal-body">
                              <textarea id="add-task-description" >Add description</textarea>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                     <!-- kraj modala--> 
                    
                  </span>
                </header>
                <main>
                  <input checked='' id='s2s' name='m' type='radio'>
                  <label for='s2s'>S2S</label>
                  <input  id='c2s' name='m' type='radio'>
                  <label for='c2s'>C2S</label>
                  <input id='o2s' name='m' type='radio'>
                  <label for='o2s'>O2S</label>
                  <input id='all' name='m' type='radio'>
                  <label for='all'>All</label>
                </main>
                
                <div class='body'>
                  <?php
                      include "connection.php";

                      $query="SELECT * FROM tasks ";

                      if(isset($_POST['choose'])){
                        $query.="WHERE (job_type='".$_POST['job_type']."' AND location='".$_POST['location']."')";
                      }

                      if (!$q=$mysqli->query($query)){
                        echo "<p>There was an error. Please try again later</p>";
                        exit();
                      }
                      if ($q->num_rows==0){
                        echo "There are no consoles in the store";
                      } else {
                        while ($row=$q->fetch_object()){
                          ?>
                  <img alt='kanye' src='http://f.cl.ly/items/1m050C1L382z1c1a1S2E/322005-kanye-west.png'>
                  <div class='t'>
                    <span class='name'><a href="task.php?id=<?php echo $row->task_id; ?>"><?php echo $row->org_name; ?></a></span>
                    <span class='forward'>&#10150;</span>
                  </div>
                  <div class='b'><?php echo $row->description; ?></div>
                  <hr>
                <?php }
              } 
                $mysqli->close();
              ?>
                </div>
              </div>
              
              <!-- kraj wall-a-->

              <!-- pocetak desne strane-->
              <div class="col-md-3">
              <div class="best-raneked-student">
                   <header class="tasks-search">

                    <span>Best ranked student</span>
                  </header>
                  <div class="panel panel-warning"> 
                    
                    <div class=panel-body> 
                    Name<br>
                    Faculty<br>
                    Rank<br>
                    </div> 
                  </div>
              </div>
                 
                <div class="best-raneked-faculty">
                   <header class="tasks-search">

                    <span>Best ranked faculty</span>
                  </header>
                  <div class="panel panel-warning"> 
                    
                    <div class=panel-body> 
                    Name<br>
                    Location<br>
                    Rank<br>
                     </div> 
                  </div>
              </div>
              </div>
              <!-- kraj desne strane-->
            

           </div>

        </div>
        
        
        
</body>