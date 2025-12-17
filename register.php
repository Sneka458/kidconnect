<?php
$registered=0;
$userexsists=0;
  if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'server.php';
    $username=$_POST['username'];
    $email=$_POST['email'];
    $age =$_POST['age'];
    $contact=$_POST['contact'];
    $status=$_POST['status'];
    $cpassword= $_POST['cpassword'];
    $rpassword= $_POST['rpassword'];
    $sql="SELECT * FROM register WHERE username='$username' AND email='$email'";
    $result=mysqli_query($conn,$sql);
      if($result){
        $num=mysqli_num_rows($result);
          if($num>0){
            $userexsists=1;
          }
          else{
            $sql="INSERT INTO register (username,email,age,contact,status,cpassword,rpassword) VALUES ('$username','$email','$age','$contact','$status','$cpassword','$rpassword')";
            $result=mysqli_query($conn,$sql);
              if($result){
                $registered=1;
              }
              else{
                  die(mysqli_error($conn));
               }
           }
       }
 }
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <style>
    body {
      background-image: url("pic23.jpg");
      font-family: Arial,sans-serif;
      display: flex;
      justify-content: center;
      background-size: cover;
      align-items: center;
      height: 90vh;
      background-color: #f0f0f0;
      margin: 50px;
     
    }
    .container {
      background-color: rgba(255, 255, 255, 0.74);
      padding: 30px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.2) ;
      width: 350px;
     
      margin-top: 50px;
    }
    .container h2 {
      text-align: center;
      margin-bottom: 20px;
      margin-top: 20px;
      color: #333333;
    }
    label {
      font-weight: bold;
      display: block;
      margin-top: 9px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="tel"],
    select {
      width: 100%;
      padding: 10px;
      margin-top: 6px;
      border: 1px solid #333333;
      border-radius: 6px;
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
    margin-top: 20px;
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
    let u =document.forms["form2"]["username"].value;
    let v =document.forms["form2"]["email"].value;
    let w =document.forms["form2"]["cpassword"].value;
    let x =document.forms["form2"]["contact"].value;
    if(u=="" ||v==""|| w=="" || x=="" ){
      alert("Fill the necessary details...");
      return false;}
    }
  </script>
</head>
<body>
  <?php if ($userexsists): ?>
    <div style="position: fixed; top: 0; left: 0; width: 100%; background-color: #ffeeba; color: #856404; padding: 10px; text-align: center;">
        User already exists!
    </div>
<?php elseif ($registered): ?>
    <div style="position: fixed; top: 0; left: 0; width: 100%; background-color: #ffeeba; color: #856404; padding: 10px; text-align: center;">
        Registered Successfull!
    </div>
<?php endif; ?>
  <div class="container">
    <h2>Register</h2>
    <form action="register.php" method="post" id="form2" name="form2" onsubmit=" return formValidation()">
      <label>UserName</label>
      <input type="text"  name="username" >
      <label>Email id</label>
      <input type="email" name="email">
      <label >Age</label>
      <input type="text" name="age">
      <label>Contact Number</label>
      <input type="text" name ="contact">
      <label >Marrial Status</label>
      <select id="status" name="status">
         <option value="">--select--</option>
        <option value="married">Married</option>
        <option value="unmarried">Unmarried</option>
      </select>
      <label >Create Password</label>
      <input type="password"  name="cpassword">
      <label >Repeat Password</label>
      <input type="password"  name="rpassword">
      <button type="submit">Submit</button>
      
      <a href="index.php" class="link">← Back to Home</a>
    </form>
  </div>
  
</body>
</html>