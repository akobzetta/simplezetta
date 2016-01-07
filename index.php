<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  .carousel-content {
  position: absolute;
  bottom: 70%;
  left: 18%;
  z-index: 20;
  color: white;
  text-shadow: 0 1px 2px rgba(0,0,0,.6);
}
  </style>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">CMS</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li> 
      <li><a href="#">Page 3</a></li> 
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#" data-toggle="modal" data-target="#register"><span class="glyphicon glyphicon-user"></span> Register</a></li>
      <li class="active"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

<div id="register" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Register</h4>
      </div>
      <div class="modal-body">
        <form class="form-inline" role="form">
		<div class="form-group">
    <label for="username">Username:</label>
    <input type="text" class="form-control" id="email">
  </div><br><br>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email">
  </div><br><br>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div><br><br>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Login</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>

  </div>
</div>


<div class="panel panel-default">
<div class="panel-body">
<button data-toggle="collapse" data-target="#whatis" type="button" class="btn btn-info">What is</button>
<br>
<div id="whatis" class="collapse">
<center>what is cms? cms is content management system!</center>
</div>
</div>
</div>
<div class="well">
<h3>Login</h3>
<hr>
<center>
<form class="form-inline" role="form">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" >
  </div><br><br>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div><br><br>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Login</button>
</form>
</center>
</div>


<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height:315px;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
	  <div class="carousel-content">
        <h3>Test 1</h3>
		Testing short story 1.... 
      </div>
	  <div class="carousel-caption">
	  Date: 6/1/2016<br>
        <button type="button" class="btn btn-info">Read more</button>
      </div>
        <img src="../index_files/lpromo_gen15_10.png" alt="Chania" width="460" height="350px">
      </div>

      <div class="item">
	  <div class="carousel-content">
        <h3>Test 2</h3>
		Testing short story 2.... 
      </div>
	  <div class="carousel-caption">
	  Date: 6/1/2016<br>
        <button type="button" class="btn btn-info">Read more</button>
      </div>
        <img src="../index_files/lpromo_gen15_83.png" alt="Chania" width="460" height="350px">
      </div>
    
      <div class="item">
	  <div class="carousel-content">
        <h3>Test 3</h3>
		Testing short story 3.... 
      </div>
	  <div class="carousel-caption">
	  Date: 6/1/2016<br>
        <button type="button" class="btn btn-info">Read more</button>
      </div>
        <img src="../index_files/lpromo_hw15_b4.png" alt="Flower" width="460" height="350px">
      </div>

      <div class="item">
	  <div class="carousel-content">
        <h3>Test 4</h3>
		Testing short story 4.... 
      </div>
	  <div class="carousel-caption">
	  Date: 6/1/2016<br>
        <button type="button" class="btn btn-info">Read more</button>
      </div>
        <img src="../index_files/lpromo_ny2016.png" alt="Flower" width="460" height="350px">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br><br>
<div class="panel panel-default">
  <div class="panel-body">&copy;Copyrights cms 2016</div>
</div>
