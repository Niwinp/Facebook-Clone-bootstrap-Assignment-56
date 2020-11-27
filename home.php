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
        <li><a href="home.php">Home</a></li>
        <li><a href="profile.html">Profile</a></li>
		<li><a href="message.html">Messaging</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
    </div>
  </nav>
  <!-- ./nav -->

  <!-- main -->
  <main class="container">
    <div class="row">
      <div class="col-md-3">
        <!-- profile brief -->
        <div class="panel panel-default">
          <div class="panel-body">
            <h4>Niwin</h4>
            <p>I love to code!</p>
          </div>
        </div>
        <!-- ./profile brief -->

        <!-- friend requests -->
        <div class="panel panel-default">
          <div class="panel-body">
            <h4>friend requests</h4>
            <ul>
              <li>
                <a href="#">Surya Starr</a> 
                <a class="text-success" href="#">[accept]</a> 
                <a class="text-danger" href="#">[decline]</a>
              </li>
            </ul>
          </div>
        </div>
        <!-- ./friend requests -->
      </div>
      <div class="col-md-6">
        <!-- post form -->
        <form method="post" action="insert.php">
          <div class="input-group">
            <input class="form-control" type="text" name="postname"  placeholder="Make a post...">
            <span class="input-group-btn">
              <button  class="btn btn-success" type="submit" name="save">Post</button>
            </span>
          </div>
        </form><hr>
        <!-- ./post form -->

        <!-- feed -->
        <div>
          <!-- post -->
          <div class="panel panel-default">
            <div class="panel-body">
              
			   

			   <table> 
			

            
            <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "facebook56";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM fbposts";
$result = $conn->query($sql);
$i =0;
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $i = $i + 1;
    echo "<tr>".$i." " . $row["fbpost"]."</tr><br>" ;
  }
} else {
  echo "0 results";
}
$conn->close();
?>
                
            
			
        </table>
			  
			  
			  
			<!--   <ul>
            <li>Movie Name</li>
            <li><input type="text" ng-model="name" /></li>
        </ul>
        <ul>
            <li>Name of Director</li>
            <li><input type="text" ng-model="director" /></li>
        </ul>
        <ul>
            <li> </li><li><button ng-click="addRow()"> Add Row </button></li>
        </ul> -->

        <!--CREATE A TABLE-->
       <!--  <table> 
            <tr>
                <th>Code</th>
                    <th>Movie Name</th>
                        <th>Director</th>
            </tr>

            <tr ng-repeat="movies in movieArray">
                <td><label>{{$index + 1}}</label></td>
                <td><label>{{movies.post}}</label></td>
              
                <td><input type="checkbox" ng-model="movies.Remove"/></td>
            </tr>
        </table> -->
<!-- 
        <div>
            <button ng-click="submit()">Submit Data</button>   
                <button ng-click="removeRow()">Remove Row</button>
        </div> --> 
			  
			  
			  
			  
			  
			  
            </div>
			

            <!-- <div class="panel-footer">
              <span>posted 2017-5-27 20:45:01 by nicholaskajoh</span> 
              <span class="pull-right"><a class="text-danger" href="#">[delete]</a></span>
            </div> -->
          </div>
		  
			  
          <!-- ./post -->
        </div>
        <!-- ./feed -->
      </div>
      <div class="col-md-3">
      <!-- add friend -->
        <div class="panel panel-default">
          <div class="panel-body">
            <h4>add friend</h4>
            <ul>
              <li>
                <a href="#">Reegun</a> 
                <a href="#">[add]</a>
              </li>
            </ul>
          </div>
        </div>
        <!-- ./add friend -->

        <!-- friends -->
        <div class="panel panel-default">
          <div class="panel-body">
            <h4>friends</h4>
            <ul>
              <li>
                <a href="#">Viswa</a> 
                <a class="text-danger" href="#">[unfriend]</a>
              </li>
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
      <li id="logo"></li>
	  <script>
var text, parser, xmlDoc;

text = "<FB><home>" +
"<title>FaceClone - Made by Niwin..</title>"+
"</home></FB>";

parser = new DOMParser();
xmlDoc = parser.parseFromString(text,"text/xml");

document.getElementById("logo").innerHTML =
xmlDoc.getElementsByTagName("title")[0].childNodes[0].nodeValue;
</script>
    </ul>
  </footer>
  <!-- ./footer -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</body>
</html>