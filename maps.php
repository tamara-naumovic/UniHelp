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
                          <div class="modal-content" >
                            <div class="modal-header" id="add-task-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title" >Faculty info</h4>
                            </div>
                            <div class="modal-body" style="height:500px;">
                            <!--gornja strana modala-->
                              <div id="top-side" style="height:30%">
                                <div id="top-side-left" style="width:50%; float:left;">
                                  <label id="rank-faculty-name">Faculty of organizational science</label><br>
                                  <label id="rank-faculty-loaction">Jove Ilica 154</label><br>
                                  <label id="rank-faculty-sumxp">#faculty-sumxp</label><br>
                                </div>
                                <div id="top-side-right" style="width:50%; float:left;">
                                  <div class="panel panel-warning">

                                      <div class="panel-body">
                                          <p id="rank-faculty-description">
                                          <?php 
                                            include "faculties.class.php";
                                            $f= new Faculties();
                                            echo $f->returnB("Faculty of Organizational Sciences");

                                          ?>
                                          </p>
                                      </div>
                                  </div>

                                </div>
                              </div>
                              <!-- kraj gornje strane modala-->
                              <!--donja strana modala-->
                              <div id="bottom-side">
                                <label id="rank-faculty-label-student-list" for="rank-faculty-student-list">Student list</label>


                                <ul class="list-group" id="rank-faculty-student-list">
                                  <li class="list-group-item">Emile Eric</li>
                                  <li class="list-group-item">Tamara Naumovic</li>
                                  <li class="list-group-item">Mila Marjanovic</li>
                                  <li class="list-group-item">Ana Licina</li>
                                </ul>
                              </div>
                              <!-- kraj donje strane modala-->
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


