<?php @session_start();?>
<?php
  
    //if(!isset($_SESSION['use']))   
    //{
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
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
  



  </style>
</head>
<body>
    <div class="container">
        
<?php include ("menu.php"); ?>
        <!--wall -->
          <div class="">
          <div class="wall">
              <br>
              <br>
              <br>
              <br>              
              <div class="col-md-3">
              <header id="tasks-search">
                  
                  
                  <span>Search</span>
                  
                  
                </header>
                    <form class="form-horizontal">
                      <label for="job-type">Job type</label>
                        <select class="form-control" id="job-type">
                          <option>Volunteering</option>
                          <option>Practice</option>
                          <option>Workshop</option>
                          <option>Learning</option>
                          <option>Physical work</option>
                        </select>
                      <label for="peer-type">Peer type</label>
                        <select class="form-control" id="peer-type">
                          <option>S2S</option>
                          <option>C2S</option>
                          <option>O2S</option>
                          <option>All</option>
                          
                        </select>

                    </form>
              </div>
              <div class="col-md-6">
                <header>
                  <span class='first'></span>
                  <span>Add task</span>
                  <span>&#9998;</span>
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
                  <img alt='kanye' src='http://f.cl.ly/items/1m050C1L382z1c1a1S2E/322005-kanye-west.png'>
                  <div class='t'>
                    <span class='name'>Kanye West</span>
                    <span class='forward'>&#10150;</span>
                  </div>
                  <div class='b'>Duis aute irure dolor in velit esse cillum dolore voneu fugiat nulla.</div>
                </div>
              </div>
              <div class="col-md-3">
            
                
              </div>
            

           </div>

        </div>
        
        
        
</body>