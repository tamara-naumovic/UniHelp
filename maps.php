<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>UniHelp - Ranks</title>
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
<div class="menu"><?php include ("menu.php"); ?></div>
    <div class="wrap-maps">
      <br>
      <br>
      <br>
      <br>
      <div class="col-md-1" style="padding-top:2%;"></div>
      <div class="col-md-1" style="padding-top:2%;"></div>
      <!--pocetak wall-a --> 
      <div class="col-md-8" style="padding-top:2%;">
         <script src="http://maps.google.com/maps/api/js?sensor=false" 
          type="text/javascript"></script>
           <header class="tasks-search">
            <span>Find your faculty</span>
          </header>
          <div id="map" style="width: 100%; height: 400px;"></div>
          <script type="text/javascript">
              var locations = [];
               

               var xhttp=new XMLHttpRequest();

                xhttp.onreadystatechange = function() {
                  if (xhttp.readyState == 4 && xhttp.status == 200) {
                  locations=JSON.parse(xhttp.responseText);
                  proceed();
                  }
                };
                  xhttp.open("GET", "maps_upit.php", true);
                  xhttp.send();

               function proceed() {
                 
                 var map = new google.maps.Map(document.getElementById('map'), {
                  zoom: 7,
                  center: new google.maps.LatLng(44.768222, 20.438518),
                  mapTypeId: google.maps.MapTypeId.ROADMAP
                });

                var infowindow = new google.maps.InfoWindow();

                var marker, i;

                for (i = 0; i < locations.length; i++) {  
                  marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i].long, locations[i].lat),
                    map: map
                  });

                  google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                      infowindow.setContent("<button type='button' class='btn btn-info btn-lg btn-warning' data-toggle='modal' data-target='#myModal' id='myBtn'>"+locations[i].name+"</button>");
                      infowindow.open(map, marker);
                    }
                  })(marker, i));
                }
                }

          </script>
      </div>
      <!-- kraj wall-a-->
      <!-- Modal -->
                      <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header" id="add-task-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title" >Faculty info</h4>
                            </div>
                            <div class="modal-body">
                              <form id="add-task-form" method="post" action="home.php">
                                <textarea name="description" id="add-task-form-description" required>Description</textarea>

                                <div class="form-group">
                                  <label for="add-task-form-num-parc">Number of participants</label>
                                  <input name="parc_number" type="number" class="form-control" placeholder="Set number of participants" id="add-task-form-num-parc" required>
                                </div>

                                <div class="form-group">
                                  <label for="add-task-form-reward">Reward</label>
                                  <input name="reward" type="text" class="form-control" placeholder="Enter reward" id="add-task-form-reward">
                                </div>

                                 <table class="table">
                                      <thead>
                                        <tr>
                                          <th><label for="add-task-form-exps">Socail</label></th>
                                          <th><label for="add-task-form-expc">Carrer</label></th>
                                          <th><label for="add-task-form-exp0">Collaboration</label></th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td><input name="parc_number" type="number" class="form-control" placeholder="Socail XP gained" id="add-task-form-exps" required></td>
                                          <td> <input name="parc_number" type="number" class="form-control" placeholder="Carrer XP gained" id="add-task-form-expc" required></td>
                                          <td><input name="parc_number" type="number" class="form-control" placeholder="Collaboration XP gained" id="add-task-form-expo" required></td>
                                        </tr>
                                                                 
                                      </tbody>
                                    </table>
                                <div class="form-group">
                                  <label name="location" for="add-task-form-location">Location</label>
                                  <br>
                                   <select class="selectpicker" id="add-task-form-location">
                                          <optgroup label="Faculty" >
                                            <option>Ovde fakulteti</option>
                                            
                                          </optgroup>
                                          <optgroup label="Dorm">
                                            <option>Ovde domovi</option>
                                            
                                          </optgroup>
                                           <optgroup label="Library" >
                                            <option>Ovde biblioteke</option>
                                            
                                          </optgroup>
                                           <optgroup label="Restaurants" >
                                            <option>Ovde menze</option>
                                            
                                          </optgroup>
                                    </select>
                                   

                                </div>
                                <div class="modal-footer" id="add-task-form-confirm">
                                  <button name="add_task" type="submit" class="btn btn-default" data-submit="modal">Add</button>
                                </div>
                              </form>
                              <?php
                              if(isset($_POST['add_task'])){
                                  include "task.class.php";
                                  include "user.class.php";
                                  $task=new Task();
                                  $user=new User();

                                  $task->create($_POST, $user->findUser($_SESSION['id']));
                                  echo $task->writeToDb();
                              }
                              ?>
                            </div>
                            
                          </div>
                          
                        </div>
                      </div>
                     <!-- kraj modala--> 
      <!-- pocetak desne strane-->
      <div class="col-md-1" style="padding-top:2%;"></div>
      <div class="col-md-1" style="padding-top:2%;"></div>
      <!-- kraj desne strane-->
      
    </div>
  
  </body>
</html>


