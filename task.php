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
                    
                    <div class=panel-body> 
                      <div class='body'>
                        <img alt='kanye' src='http://f.cl.ly/items/1m050C1L382z1c1a1S2E/322005-kanye-west.png'>
                        <div class='t'>
                          <span class='name' id="task-org-name"><a href="#">Kanye West</a></span>
                          
                        </div>
                        <div class='b' id="task-description" style="font-size:100%">Duis aute irure dolor in velit esse cillum dolore voneu fugiat nulla.</div>
                      </div>
                      <br>
                      <div class='b' id="parc-number" style="font-size:100%">Number of participants needed #number </div>
                      <br>
                      <div class='b' id="task-location" style="font-size:100%">Location<br> #location </div>
                      <br>
                      <div class='b' id="task-reward" style="font-size:100%">Reward<br> #reward </div>
                      <br>
                      <div class='b' id="exps" style="font-size:100%">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Social</th>
                            <th>Career</th>
                            <th>Professional</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>+#exp1</td>
                            <td>+#exp2</td>
                            <td>+#exp3</td>
                          </tr>
                                                   
                        </tbody>
                      </table>

                      </div>
                      
                      <button type="button" class="btn btn-success" style="margin-left:70%;">Enroll</button>

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
        </div>
        
        
        
</body>