<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>UniHelp</title>
       <link rel="stylesheet" href="bootstrap/dist/css/style.css" media="screen">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css" media="screen">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,100' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
	<link rel="shortcut icon" type="image/png" href="../favicon.png"/>
           

     
      
</head>

<body>
    <div class="container">
        
<!-- pocetak menija -->
<<<<<<< HEAD
   <?php include ("menu.php"); ?>
=======
    <?php include ("menu.php"); ?>
>>>>>>> origin/master
        <!-- kraj menija menija -->
        
        <!-- pocetak content leva strana -->
        <br><br><br><br>
        <div class="row">
<div class="col-lg-6">
            <div class="card-wrapper" id="cardWrap">

      <div class="profile-card">
        
        <div class="p-user-avtaar">
          <img src="" alt="Abhi" class="p-avtaar-image">
        </div>
        
        <div class="p-user-details">
          <h1 class="p-user-name">Pera Peric</h1>
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
           
            <div class="comments">
		<div class="comment-wrap">
				<div class="photo">
						<div class="avatar" style="background-image: url('https://s3.amazonaws.com/uifaces/faces/twitter/dancounsell/128.jpg')"></div>
				</div>
				<div class="comment-block">
						<form action="">
								<textarea name="" id="" cols="30" rows="3" placeholder="Add comment..."></textarea>
						</form>
				</div>
		</div>

		<div class="comment-wrap">
				<div class="photo">
						<div class="avatar" style="background-image: url('https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg')"></div>
				</div>
				<div class="comment-block">
						<p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto temporibus iste nostrum dolorem natus recusandae incidunt voluptatum. Eligendi voluptatum ducimus architecto tempore, quaerat explicabo veniam fuga corporis totam reprehenderit quasi
								sapiente modi tempora at perspiciatis mollitia, dolores voluptate. Cumque, corrupti?</p>
						<div class="bottom-comment">
								<div class="comment-date">Aug 24, 2014 @ 2:35 PM</div>
								<ul class="comment-actions">
										<li class="complain">Complain</li>
										<li class="reply">Reply</li>
								</ul>
						</div>
				</div>
		</div>

		<div class="comment-wrap">
				<div class="photo">
						<div class="avatar" style="background-image: url('https://s3.amazonaws.com/uifaces/faces/twitter/felipenogs/128.jpg')"></div>
				</div>
				<div class="comment-block">
						<p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto temporibus iste nostrum dolorem natus recusandae incidunt voluptatum. Eligendi voluptatum ducimus architecto tempore, quaerat explicabo veniam fuga corporis totam.</p>
						<div class="bottom-comment">
								<div class="comment-date">Aug 23, 2014 @ 10:32 AM</div>
								<ul class="comment-actions">
										<li class="complain">Complain</li>
										<li class="reply">Reply</li>
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
	avtaar.src = data[0].image;
	
	tweets.innerHTML = data[0].tweets;
	followers.innerHTML = data[0].followers;
	following.innerHTML = data[0].following;
	

	loadingEffect();

});

    </script>
            
            
            
</body>