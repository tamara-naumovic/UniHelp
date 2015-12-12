<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>UniHelp</title>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css" media="screen">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,100' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
	<link rel="shortcut icon" type="image/png" href="../favicon.png"/>
    <style>
        .logo{height: 30px; padding-top: 0px}
        #head-text{color: white}
      </style>
      <script type="text/javascript">
    var password = document.getElementById("password")
    , confirm_password = document.getElementById("confirm_password");

    function validatePassword(){
      if(password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Passwords Don't Match");
      } else {
        confirm_password.setCustomValidity('');
      }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
    </script>
</head>
<body background="bootstrap/dist/img/bg.png">
    <div class="container">
        
<!-- pocetak menija -->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
            
          <a href="#" class="navbar-brand" ><img class="logo" src="bootstrap/dist/img/logo.png"/></a>
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

          <ul class="nav navbar-nav navbar-right" >
              <form class="navbar-form navbar-right" >
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email">
                          <input type="text" class="form-control" placeholder="Password">
                      </div>
              <button type="submit" class="btn btn-default">Log in</button>
        </form>
          </ul>

        </div>
      </div>
    </div>
        <!-- kraj menija menija -->
        
        <!-- pocetak content leva strana -->
        <div class="row">
<div class="col-lg-6">
            <div class="bs-component">
                <br><br><br><br><br><br>
              <h1 id="head-text">Get things done with <strong>UniHelp</strong>, the ultimate tool for connecting students, companies and organizations.</h1>
              
            </div>

          </div>
            <!-- kraj content leva strana -->
            
            <!-- pocetak content desna strana -->
                              <br><br><br><br><br><br>
          <div class="col-lg-6">
            <div class="well bs-component">
              <form class="form-horizontal" id="enableForm" method="post" action="">

                <fieldset>
                  <h2>Sign up</h2>
                    <br>
                    <div class="form-group">
                    <label for="inputName" class="col-lg-2 control-label">Name</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputName" placeholder="Name" required autofocus>
                    </div>
                  </div>
                    
                    <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10">
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email" required autofocus>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                      <input name="password" type="password" data-minlength="6" id="password" class="form-control" placeholder="Password"  required>
                    </div>
                  </div>
                    <div class="form-group">
                    <label for="inputPassword" class="col-lg-2 control-label">Repeat Password</label>
                    <div class="col-lg-10">
                      <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Password" required autofocus>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="select" class="col-lg-2 control-label">Faculty</label>
                    <div class="col-lg-10">
                      <select class="form-control" id="select">
                        <option>Faculty of Agriculture</option>
                        <option>Faculty of Architecture</option>
                        <option>Faculty of Biology</option>
                        <option>Faculty of Chemistry</option>
                        <option>Faculty of Civil Engineering</option>
                        <option>Faculty of Economics</option>
                        <option>Faculty of Electrical Enigineering</option>
                        <option>Faculty of Forestry</option>
                        <option>Faculty of Geography</option>
                        <option>Faculty of Law</option>
                        <option>Faculty of Mathematics</option>
                        <option>Faculty of Mechanical Enigneering</option>
                        <option>Faculty of Medcine</option>
                        <option>Faculty of Mining and Geology</option>
                        <option>Faculty of Organizational Sciences</option>
                        <option>Faculty of Eastern Orthodox Theology</option>
                        <option>Faculty of Pharmacy</option>
                        <option>Faculty of Philology</option>
                        <option>Faculty of Philosophy</option>
                        <option>Faculty of Physical Chemistry</option>
                        <option>Faculty of Physics</option>
                        <option>Faculty of Political Sciences</option>
                        <option>Faculty of Security Studies</option>
                        <option>Faculty of Special Education and Rehabilitation</option>
                        <option>Faculty of Sport and Physical Education</option>
                        <option>Faculty of Stomatology</option>
                        <option>Faculty of Teacher Training</option>
                        <option>Faculty of Technical Sciences</option>
                        <option>Faculty of Technology and Metallurgy</option>
                        <option>Faculty of Transport Engineering</option>
                        <option>Faculty of Veterinary Medicine</option>
                          </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
        <!-- kraj content desna strana -->
</body>