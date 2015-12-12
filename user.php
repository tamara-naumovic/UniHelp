<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>UniHelp</title>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css" media="screen">
      <link rel="stylesheet" href="bootstrap/dist/css/style.css" media="screen">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,100' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
	<link rel="shortcut icon" type="image/png" href="../favicon.png"/>
</head>

<body>
    <div class="container">
        
<!-- pocetak menija -->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="../" class="navbar-brand">UniHelp</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            
            <li class="dropdown">
              
              <ul class="dropdown-menu" aria-labelledby="download">
                <li><a href="http://jsfiddle.net/bootswatch/jmg3gykg/">Open Sandbox</a></li>
                <li class="divider"></li>
                <li><a href="./bootstrap.min.css">bootstrap.min.css</a></li>
                <li><a href="./bootstrap.css">bootstrap.css</a></li>
                <li class="divider"></li>
                <li><a href="./variables.less">variables.less</a></li>
                <li><a href="./bootswatch.less">bootswatch.less</a></li>
                <li class="divider"></li>
                <li><a href="./_variables.scss">_variables.scss</a></li>
                <li><a href="./_bootswatch.scss">_bootswatch.scss</a></li>
              </ul>
            </li>
          </ul>

          <form class="navbar-form navbar-right" >
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email">
                          <input type="text" class="form-control" placeholder="Password">
                      </div>
              <button type="submit" class="btn btn-default">Posalji</button>
                      
                    </form>

        </div>
      </div>
    </div>
        <!-- kraj menija menija -->
        
        <!-- pocetak content leva strana -->
        <div class="row">
<div class="col-lg-6">
            <div class="card-wrapper" id="cardWrap">

      <div class="profile-card">
        
        <div class="p-user-avtaar">
          <img src="" alt="Abhi" class="p-avtaar-image">
        </div>
        
        <div class="p-user-details">
          <h1 class="p-user-name">%data%</h1>
          <p class="p-user-position">%data%</p>
        </div>

        <ul class="p-user-stats">
          <li class="p-stats-item">
            <div class="cell-wrap">
              <span class="p-stats-count" id="tweets-count">00</span>
              <span class="p-stats-label">tweets</span>
            </div>
          </li>

          <li class="p-stats-item in-middle">
            <div class="cell-wrap">
              <span class="p-stats-count" id="followers-count">00</span>
              <span class="p-stats-label">followers</span>
            </div>
          </li>

          <li class="p-stats-item">
            <div class="cell-wrap">
              <span class="p-stats-count" id="following-count">00</span>
              <span class="p-stats-label">following</span>
            </div>
          </li>

        </ul>

        <a href="#" class="p-follow-btn">
          <div class="f-btn-text">
            follow <span id="f-btn-name">%data%</span>
          </div>
        </a>

      </div>

      <div class="creds">
        <span>Inspired By</span>
        <a href="http://www.sketchappsources.com/free-source/1218-profile-card-sketch-freebie-resource.html">Profile Card by Maurivan Luiz</a>
      </div>

    </div>

          </div>
            <!-- kraj content leva strana -->
            
            
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
	username.innerHTML = data[0].firstName + " " + data[0].lastName;
	position.innerHTML = data[0].position;
	tweets.innerHTML = data[0].tweets;
	followers.innerHTML = data[0].followers;
	following.innerHTML = data[0].following;
	followBtnText.innerHTML = data[0].firstName;

	loadingEffect();

});

    </script>
</body>