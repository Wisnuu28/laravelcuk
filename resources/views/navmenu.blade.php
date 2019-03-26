<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <style>
.navbar-brand {
  float: left;
  height: 50px;
  padding: 15px 15px;
  font-size: 18px;
  line-height: 20px;
}

.navbar-brand h1 {
	margin-top:9px;
	padding-top:5px;
	float: left;	
	font-size: 25px;	
	color:#fff;	
	text-transform:uppercase;
	font-weight:600;
}

@media (max-width: 767px) {
  .navbar-brand {
    padding: 0 0 0 15px;
  }
}

.menu {
	font-size:12px;
	float:right;
	text-transform:uppercase;
	font-weight:600;	
}

.navbar-collapse {
  padding-right: 15px;
  padding-left: 15px;
  overflow-x: visible;
  -webkit-overflow-scrolling: touch;
  border-top: 0px solid transparent;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1);
          box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1);
}
.navbar-collapse.in {
  overflow-y: auto;
}

.menu ul.nav-tabs li {
	color:#fff;	
}

.nav-tabs {
	border-bottom: 0;
}
.nav-tabs > li {
	float: left;
	margin-bottom: 0;
}

.nav-tabs > li > a {	
	border-radius:0;
	color:#fff;
	padding:30px;
}

.nav-tabs > li > a:hover {
	color:#272727;
	background:#fff;	
} 

.nav-tabs > li a.active {
	color: #555;
	cursor: default;
	background-color: #fff;
	border: 1px solid #fff;
	border-bottom-color:#fff;
}

.navbar-default {
	background-color: #65AAF0;
	border-color:#65AAF0;
}
 
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
  <header id="header">
    <nav class="navbar navbar-default navbar-static-top" role="banner">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
          <div class="navbar-brand">
            <a href="index"><h1>TES</h1></a>
          </div>
        </div>
        <div class="navbar-collapse collapse">
          <div class="menu">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation"><a href="index" class="active">Home</a></li>
              <li role="presentation"><a href="about.html">About Us</a></li>
              <li role="presentation"><a href="services.html">Services</a></li>
              <li role="presentation"><a href="contact">Contact</a></li>
              <li role="presentation"><a href="logout">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
</nav>
</header>


</body>
</html>