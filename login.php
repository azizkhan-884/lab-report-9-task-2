
<?php
$server  = 'localhost';
$username = 'root';
$password = '';
$database = 'login_db';
 
$conn = mysqli_connect($server,$username,$password,$database);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loginForm</title>
</head>
<body>
<form action="#" method = "POST">
<label for="username">username:</label>
<input type="text" name="username">
<label for="password">password:</label>
<input type="password" name="password">
<button>Login</button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
   
    $name = $_POST["username"];
    $psd = $_POST["password"];

 
   $fetch = "SELECT * from `login`";
   $retrival = mysqli_query($conn,$fetch);
   $row = mysqli_fetch_Assoc($retrival);
   if($row["username"] == "$name" && $row["password"] == "$psd")
   {
    echo "login successful";
   }
   else {
    echo "invalid username or password";
   }
}
?>  v 
</body>
</html>
