<!DOCTYPE html>
<html>
<head>
  <title>FaceClone</title>

	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
	<script src="profileapp.js"></script>


  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body ng-app="fbprofile" ng-controller="profcont">

  <!-- nav -->
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.html">FaceClone</a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="home.html">Home</a></li>
        <li><a href="profile.html">Profile</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
    </div>
  </nav>
  <!-- ./nav -->

  <!-- main -->
  <main class="container">
    <div class="row">
      <div class="col-md-3">
        <!-- edit profile -->
        <div class="panel panel-default">
          <div class="panel-body">
            <h4>Edit profile</h4>
            <form method="post">
              <div class="form-group">
                <input ng-model="stats" class="form-control" type="text" name="status" placeholder="Status" value="">
              </div>

              <div class="form-group">
                <input ng-model="loc" class="form-control" type="text" name="location" placeholder="Location" value="">
              </div>

              <div class="form-group">
                <input ng-click="upd(stats)" class="btn btn-primary" type="submit" name="update_profile" value="Save">
              </div>
            </form>
          </div>
        </div>
        <!-- ./edit profile -->
      </div>
      <div class="col-md-6">
        <!-- user profile -->
        <div class="media">
          <div class="media-left">
            <img src="img/my_avatar.png" class="media-object" style="width: 128px; height: 128px;">
          </div>
          <div class="media-body">
            <h2 class="media-heading">NIWIN P 18IT056</h2>
            <p>Status: {{ statsres	 }}</p>
          </div>
        </div>
        <!-- user profile -->

        <hr>

        <!-- timeline -->
        <div>
          <!-- post -->
          <div class="panel panel-default">
            <div class="panel-body">
              <p>Hello people! This is my first FaceClone post. Hurray!!!</p>
            </div>
            <div class="panel-footer">
              <span>posted on Time</span> 
              <span class="pull-right"><a class="text-danger" href="#">[delete]</a></span>
            </div>
          </div>
          <!-- ./post -->
        </div>
        <!-- ./timeline -->
      </div>
      <div class="col-md-3">
        <!-- friends -->
        <div class="panel panel-default">
          <div class="panel-body">
            <h4>Friends</h4>
            <ul>
              
                <?php

// Read JSON file
$json = file_get_contents('profile.json');

//Decode JSON
$json_data = json_decode($json,true);

//Print data
/* print_r($json_data); */

foreach ($json_data as $key1 => $value1) {
	
	print_r("<li><a>".$json_data[$key1]["name"]."</a><br> ");
	print_r(" Active : ".$json_data[$key1]["active"]."</li>");
	//print_r("Relationship Status : ".$json_data[$key1]["status"]."<br> ");
	//print_r("Active :              ".$json_data[$key1]["active"]."<br>");
	//print_r("Joined FB on :        ".$json_data[$key1]["joined_fb"]."<br><br><br>");
	
}

?>

                
             
            </ul>
          </div>
        </div>
        <!-- ./friends -->
      </div>
    </div>
	
  </main>
  <!-- ./main -->


  <!-- footer -->
  <footer class="container text-center">
    <ul class="nav nav-pills pull-right">
      <niwin-test-directive></niwin-test-directive>
    </ul>
	
	
	
	
	
	
	
  </footer>
  <!-- ./footer -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</body>
</html>