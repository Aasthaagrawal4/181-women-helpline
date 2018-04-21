



<!DOCTYPE html>
<html lang="en">
<head>
  <title>adminlogin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
body {font-family: Arial, Helvetica, sans-serif;}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color:aquamarine;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

.modal {
    display: none; 
    position: fixed; 
    z-index: 1; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto; 
    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.4); 
    padding-top: 60px;
}

.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; 
    border: 1px solid #888;
    width: 50%; 
}

.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
.footer {
 position: relative;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #b4b4b4;
   color: white;
   text-align: center;
   }

 a {
    color: #000000;
}

</style>
</head>
<body>
<a href="front.html"><img src="helpline.jpg" style="width:210px;height:100px;"></a>
<img src="my gov logo.png" style="width:300px;height:100px;">
<a href="http://www.swachhbharaturban.in/sbm/home/#/SBM" target="_blank"><img src="swatch.jpg" align="right" style="width:250px;height:100px;" ></a>
<img src="satyamev.jpg"width="80"height="100" align="right">
<nav class="navbar navbar-inverse"> 
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
	  
        <li class="active"><a href="front.html">HOME</a></li>
        <li><a href="complain.html">COMPLAINT FORM</a></li>
        <li><a href="status.html">COMPLAINT STATUS</a></li>
		     <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">LEGAL RIGHTS<span class="caret"></span></a>
			  <ul class="dropdown-menu">
           <li><a href="women welfare.html">WOMEN WELFARE ACTS</a></li>
          <li><a href="women related.html">WOMEN-RELATED LEGISLATIONS</a></li>
         
        </ul>
      </li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="adminlogin.php"><span class="glyphicon glyphicon-log-in"></span>ADMIN LOGIN</a></li>
      </ul>
    </div>
  </div>
</nav>


  
  <form class="modal-content animate" action="login.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('submit').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="userid"><b>USERID</b></label>
      <input type="text" placeholder="Enter adminid" name="userid" required>

      <label for="password"><b>PASSWORD</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit">LOGIN</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('submit').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
<div class="footer">
<div class="container clearfix">
<ul class="footer-menu">

<p><a = href="file:///C:/xampp/htdocs/women/About%20us.html">About Us</a></p>
<p><a href="file:///C:/xampp/htdocs/women/Feedback.html">Feedback</a></p>
<p><a href="file:///C:/xampp/htdocs/women/FAQ's.html">FAQ</a></p>
<p><a href="file:///C:/xampp/htdocs/women/Terms%20and%20Conditions.html">Terms and Conditions</a></p>


</ul>
</div>
<div class="footer-main">

      <p><font color="#000000">© Content owned, updated and maintained by the MyGov Cell. MyGov platform is designed, developed and hosted by National Informatics Centre, Ministry of Electronics & Information Technology, Government of India.</font></p>

</div></div>




</body>
</html>



