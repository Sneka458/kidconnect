<?php
$login=0;
$invalid=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
include 'server.php';
$username=$_POST['username'];
$rpassword= $_POST['rpassword'];
$sql="SELECT * FROM register WHERE username='$username' AND rpassword='$rpassword'";
$result=mysqli_query($conn,$sql);
if($result){
$num=mysqli_num_rows($result);
    if($num>0){
        $login=1;
        session_start();
        $_SESSION['username']=[$username];
        $_SESSION['rpassword']=[$rpassword];
        header('location:index.php');
        }
    else{
    $invalid=1;
    $message = "Invalid Username or Password !";
    echo "<script>alert('$message');</script>";
    }
}
if ($login) {
        $message = "Loggedin successfully !";
        echo "<script>alert('$message');</script>";
    } else {
        die(mysqli_error($conn));
    }
}
?>
<!DOCTYPE html>
<head>
    <title>Login</title>
    <style>
     body {
    margin: 0;
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    background-image: url("");
    background-position: right bottom;
    align-items: center;
    height: 100vh;
}
.form-container {
    background-color: rgba(255, 253, 253, 0.48);
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    width: 300px;
}

h2 {
    
    text-align: center;
    color: #333333;
}
label {
    display: block;
    margin-top: 20px;
    margin-bottom: 5px;
}
input {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
}
button {
    width: 100%;
    padding: 10px;
    background-color: #333333;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}
button:hover {
    background-color: rgb(72, 94, 94);
}
.link {
    display: block;
    text-align: center;
    margin-top: 15px;
    color: #333333;
    text-decoration: none;
}
</style>
      <script>
  function formValidation(){
    let x =document.forms["form2"]["username"].value;
    if(x==""){
      alert("name must be filled out");
      return false;}
    }

  </script>
</head>
<body>
    <img src ="lbg2.jpg">
    <div class="form-container">
        <h2>Login</h2>
        <form action="login.php" method="post" id="form2" name="form2" onsubmit="return formValidation()">
            <label for="username">Username</label>
            <input type="text" id="username" name="username">

            <label for="password">Password</label>
            <input type="password" id="rpassword" name="rpassword">

            <button type="submit">Login</button>
        </form>
        <a href="register.php" class="link">Don't have an account? Sign up</a>
        <a href="index.php" class="link">← Back to Home</a>
    </div>
</body>
</html>
