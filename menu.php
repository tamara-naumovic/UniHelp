<!-- pocetak menija -->
<?php @session_start(); ?>
    <div class="navbar navbar-default navbar-fixed-top" >
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
          <ul class="nav navbar-nav" style="padding:1.5% 2% 0 0;">
            <li >
              <a  href="home.php" id="home">Home</a>
            </li>
            <li>
              <a href="user<?php  echo $_SESSION['id']; ?>.php">Profile</a>

            </li>
            <li>
              <a href="rank.php">Rank list</a>
            </li>
            
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAABN0lEQVRIS7WWYVHDQBBGXxUACqAKAAUggSqgDgAFgIKCAxyAhNZBcQAKAAUwL3P3g51Qmtx2ZzKX/Mj3ct/u7WYC7APHwDvwRnJMgHUBVGmfP4FlWX0eDRfwDbwC18AJcFRW7/fChoSdDtlkBdwDdz0vCvM6D+vWjP8AUch8ad/WMRQQhV8Ar6e/iK0AhS+BB+CmD9IKUNPc3Zaqm0ULMwBCLopNH4AQq62LLIBalrX5sLS1q8tLJkA9q0zIWc1LBJgs20ZreG6MZR/ArbaGOzBWu7DouZz8R9tPJsCdK35Q+lpqkufAAvgqJZtaphbGlX4X8V+9qtWi2io6v3fRKtKbXXq7dtgchoEzHXJIag7Muh7WyVWnWNRytA46iAIc7vXkKahIHPr+bYz64xCgr37VaJFNlv0A119hmK89wiQAAAAASUVORK5CYII="/>
                </a></li>
            <style type="text/css">
                                    div.image {
                                    max-width:            24px;
                                    max-height:           24px;
                                    background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAABN0lEQVRIS7WWYVHDQBBGXxUACqAKAAUggSqgDgAFgIKCAxyAhNZBcQAKAAUwL3P3g51Qmtx2ZzKX/Mj3ct/u7WYC7APHwDvwRnJMgHUBVGmfP4FlWX0eDRfwDbwC18AJcFRW7/fChoSdDtlkBdwDdz0vCvM6D+vWjP8AUch8ad/WMRQQhV8Ar6e/iK0AhS+BB+CmD9IKUNPc3Zaqm0ULMwBCLopNH4AQq62LLIBalrX5sLS1q8tLJkA9q0zIWc1LBJgs20ZreG6MZR/ArbaGOzBWu7DouZz8R9tPJsCdK35Q+lpqkufAAvgqJZtaphbGlX4X8V+9qtWi2io6v3fRKtKbXXq7dtgchoEzHXJIag7Muh7WyVWnWNRytA46iAIc7vXkKahIHPr+bYz64xCgr37VaJFNlv0A119hmK89wiQAAAAASUVORK5CYII=');
                                    }
                                    </style>
          </ul>
          <!--nesto-->
        </div>
      </div>
    </div>
        <!-- kraj menija menija -->