<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>UniHelp - User profile</title>
       <link rel="stylesheet" href="bootstrap/dist/css/style.css" media="screen">
       <link rel="stylesheet" href="bootstrap/dist/css/font-awesome.css" media="screen">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css" media="screen">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,100' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
	<link rel="shortcut icon" type="image/png" href="../favicon.png"/>
    <link rel="icon" href="bootstrap/dist/img/favicon.png">        
 <style>
  .logo{height: 55px; padding-top: 0px}
  #head-text{color: white}
  </style>
     
      
</head>

<body>
    <div class="container">
        
<!-- pocetak menija -->

   <?php include ("menu.php"); ?>
    <?php include ("menu.php"); ?>
        <!-- kraj menija menija -->
        
        <!-- pocetak content leva strana -->
        <br><br><br><br>
        <div class="row">
<div class="col-lg-4">
            <div class="card-wrapper" id="cardWrap">

      <div class="profile-card">
        
        <div class="p-user-avtaar">
          <img src="" alt="Abhi" class="p-avtaar-image">
        </div>
        
        <div class="p-user-details">
          <h1 class="p-user-name">Jelena Ivkovic</h1>
          <p class="p-user-position">Type: Student</p>
            <p class="p-user-position">Faculty of Organizational Sciences</p>
        </div>

        <ul class="p-user-stats">
          <li class="p-stats-item">
            <div class="cell-wrap">
              <span class="p-stats-count" id="tweets-count">00</span>
              <span class="p-stats-label">Rank</span>
            </div>
          </li>

          <li class="p-stats-item in-middle">
            <div class="cell-wrap">
              <span class="p-stats-count" id="followers-count">00</span>
              <span class="p-stats-label">Tasks participated</span>
            </div>
          </li>

          <li class="p-stats-item">
            <div class="cell-wrap">
              <span class="p-stats-count" id="following-count">00</span>
              <span class="p-stats-label">Tasks organized</span>
            </div>
          </li>

        </ul>

        
      </div>

      

    </div>

          </div>
            <!-- kraj content leva strana -->
            <!-- progres bar-->
            <div class="col-lg-6" style="margin: 5% auto 5%;">
       <h5 style="margin-left:20px;">Social</h5>
        <div class="progress">

  <div class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 20%; background-color:#FF9900;">
    <span class="sr-only">40% Complete (success)</span>
  </div>
</div>
<h5 style="margin-left:20px;">Career</h5>
        <div class="progress">

  <div class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 75%; background-color:#1975FF;">
    <span class="sr-only">40% Complete (success)</span>
  </div>
</div>
<h5 style="margin-left:20px;">Professional</h5>
        <div class="progress">

  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
    <span class="sr-only">40% Complete (success)</span>
  </div>
</div>

  </div>


           <!-- komentari -->
            <div class="comments col-lg-6" style="margin-top:-2%;">
<h3>Reviews:</h3>
		<div class="comment-wrap" style="margin-top:0px;">
				<div class="photo">
						<div class="avatar"><img src="bootstrap/dist/img/komazec.jpg" style="border-radius:50%; height:60px; padding-right:5px; "></div>
				</div>
				<div class="comment-block">
				<h4 style="font-weight:600; margin:4px 10px 0px; ">Stefan Komazec</h4>
						<p class="comment-text" style="margin:2px 10px 0px;">Super saradnja, lepa slika, pozzz</p>
						<div class="bottom-comment">
								<div class="comment-date" style="margin:2px 10px 0px;">Aug 24, 2014 @ 2:35 PM</div>
								<ul class="comment-actions" style="color:#0F7FC6;margin-right:10px;">
										<i class="fa fa-thumbs-up" style="color:#0F7FC6; " ></i>Thumbs up!

									
								</ul>
						</div>
				</div>
		</div>
		<div class="comment-wrap" style="margin-top:0px;">
				<div class="photo">
						<div class="avatar"><img src="bootstrap/dist/img/todorovic.jpg" style="border-radius:50%; height:60px; padding-right:5px; "></div>
				</div>
				<div class="comment-block">
				<h4 style="font-weight:600; margin:4px 10px 0px; ">Ivan Todorovic</h4>
						<p class="comment-text" style="margin:2px 10px 0px;">Bilo mi je zadovoljstvo pomoći lepoj koleginici ;)</p>
						<div class="bottom-comment">
								<div class="comment-date" style="margin:2px 10px 0px;">Aug 24, 2014 @ 2:35 PM</div>
								<ul class="comment-actions" style="color:#0F7FC6;margin-right:10px;">
										<i class="fa fa-thumbs-up" style="color:#0F7FC6; " ></i>Thumbs up!

									
								</ul>
						</div>
				</div>
		</div>
</div>

</div>

            
            
            <script type="text/javascript">
    'use strict';

function fetchJSONFile(path, callback){
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function(){
		if(xhr.readyState === 4){
			if(xhr.status === 200){
				var data = JSON.parse(xhr.responseText);
				if(callback){
					callback(data);
				}
			}
		}
	};

	xhr.open('GET', path);
	xhr.send();
};


//Declared variables to insert data into html elements
var avtaar = document.getElementsByClassName('p-avtaar-image')[0];
var username = document.getElementsByClassName('p-user-name')[0];
var position = document.getElementsByClassName('p-user-position')[0];
var tweets = document.getElementById('tweets-count');
var followers = document.getElementById('followers-count');
var following = document.getElementById('following-count');
var followBtnText = document.getElementById('f-btn-name');


function loadingEffect() {
	
	//loading effect
	var currentClass = document.getElementById('cardWrap');
	var newClass = currentClass.className.concat(' visible');
	currentClass.className = newClass;
}


fetchJSONFile('https://api.myjson.com/bins/2mgr2', function(data){
	
	//inserting data into html
	avtaar.src = "img/profil.jpg";
	
	tweets.innerHTML = data[0].tweets;
	followers.innerHTML = data[0].followers;
	following.innerHTML = data[0].following;
	

	loadingEffect();

});

    </script>
            
            
            
</body>