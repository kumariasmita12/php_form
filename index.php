<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
.error {color: yellow;}
	
</style>
</head>
<body   style="background-color:MediumSeaGreen;">
<?php
$usernameErr = $pasErr ="";
$username = $password="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $usernameErr = "Name is required";
  } 
  else {
    $username = ($_POST["username"]);
  }
  
  if (empty($_POST["password"])) {
    $pasErr = "password is required";
  } 
  else {
    $password = ($_POST["password"]);
  }
}
?> 
<div class="container text-center">
<span class="col-md-4"></span><span class="col-md-4">
<h1>login page</h1>
<p><span class="error">* required field</span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<p>User Name: <input type="text" name="username">
  <span class="error"><br>* <?php echo $usernameErr;?></span>
<br>
<br>  <p>Password:<input type="password" name="password" >
  <span class="error"><br>* <?php echo $pasErr;?></span>
 
<br>
<br>
  <input type="submit"  value="Submit">
  </div>
</form>

<?php
if(($username!="")&&($password!=""))
echo "<p>".$username."</p>";
echo $password; 
?></span>
</div>
</body>
</html>