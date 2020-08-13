
<html>
<head>
<meta charset="UTF-8">
<link rel="shortcut icon" type="image/png" href="fav/favicon.png"/>
<title>Login</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
.login{
width:360px;
margin:50px auto;
font:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
border-radius:10px;
border:2px solid #ccc;
padding:10px 40px 25px;
margin-top:70px; 
}
input[type=text], input[type=password]{
width:99%;
padding:10px;
margin-top:8px;
border:1px solid #ccc;
padding-left:5px;
font-size:16px;
font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif; 
}
input[type=submit]{
width:100%;
background-color:#009;
color:#fff;
border:2px solid #06F;
padding:10px;
font-size:20px;
cursor:pointer;
border-radius:5px;
margin-bottom:15px; 
}
</style>
</head>
<body>
<div class="login">
<h1 align="center">Login</h1>
<form action="login.php" method="post" style="text-align:center;">
<input type="text" placeholder="Username" id="user" name="user" required=""><br/><br/>
<input type="password" placeholder="Password" id="pass" name="pass" required=""><br/><br/>
<input type="submit" value="Login" name="loginsubmit">
<!-- Error Message -->

<div class="loginfail" id="loginfail" style="display: none;"><h6 style="color: red;">Login Fail</h6></div>


<script type="text/javascript">
  $(document).ready(function() {
    if (window.location.href.indexOf("fail") > -1) {
      	document.getElementById("loginfail").style.display = "block";
    }
  });
</script>

</body>
</html>