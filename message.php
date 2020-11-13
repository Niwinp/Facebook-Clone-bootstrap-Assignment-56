<!DOCTYPE html>
<html>
<head>
  <title>FaceClone</title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	<script src="homeapp.js"></script>
  
</head>
<body ng-app = "homeapp" ng-controller="homecontrol">
  <!-- nav -->
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.html">FaceClone</a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="home.html">Home</a></li>
        <li><a href="profile.html">Profile</a></li>
		<li><a href="message.html">Messaging</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
    </div>
  </nav>
  <!-- ./nav -->
<?php

// Read JSON file
$json = file_get_contents('message.json');

//Decode JSON
$json_data = json_decode($json,true);

//Print data
/* print_r($json_data); */
print_r("<h3> Messaging DETAILS : </h3> ");
foreach ($json_data as $key1 => $value1) {
	
	
	print_r("FROM : ".$json_data[$key1]["from"]." ");
	print_r("TO   :              ".$json_data[$key1]["to"]."<br>");
	
	
}

?>
  
  </footer>
  <!-- ./footer -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</body>
</html>