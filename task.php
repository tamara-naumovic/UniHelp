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
             
              </div>
              <!-- kraj leve strane-->
              <!--pocetak taska opisa -->
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
                <div class="panel panel-warning" id="task-wrap" > 
                    
                    <div class=panel-body> 
                      <div class='body'>
                        <img alt='kanye' src='http://f.cl.ly/items/1m050C1L382z1c1a1S2E/322005-kanye-west.png'>
                        <div class='t'>
                          <span class='name' id="task-org-name"><a href="#">Kanye West</a></span>
                          
                        </div>
                        <div class='b' id="task-description">Duis aute irure dolor in velit esse cillum dolore voneu fugiat nulla.</div>
                      </div>
                    </div> 
                  </div>
                
              </div>
              <!-- kraj task opisa-->

              <!-- pocetak desne strane-->
              <div class="col-md-3">
              
              </div>
              <!-- kraj desne strane-->
            

           </div>

        </div>
        
        
        
</body>