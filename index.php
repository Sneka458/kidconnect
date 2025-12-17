
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>index</title>
    <style>
    /* body{
        background-image: url("pic.jpg");
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
    } */
     .deg{
        border: solid;
        size: 2px;
     }
     .head {
        display: flex;
        
        padding: 20px 30px;
        justify-content: space-between;
      
     }
     .bg{
        float: right;
        width: 50%;
        border-radius: 8px;
        margin-top: -70px;
        margin-right: -20px;
      }
    .bg1{
        float: left;
        margin-right: 100px;
        max-width: 90%;
        height:300px;
        border-radius: 4px;
        
    }
    .side-text h2 {
        margin: 0px;
        color: rgb(6, 0, 0);
        margin-top: 20px;
        font-size: 30px;
        font-family:arial;
    }
    .side-text h5{
        
        color: black;
        margin: 0px 0 0;
        font-size: 18px;
        border-bottom: solid;
        border-color: #000000;
    }
   
    .para{
       
        font-size: 15px;
        font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

       
        margin: 180px 130px;
    }
    .signup{
        background-color: #333333;
        color: white;
        padding: 15px 32px;
        text-decoration: none;
        display: inline-block;
        border-radius: 8px;
        font-size: 16px;
        margin: 15px 2px;
        cursor: pointer;
    }
    .body h2{
        text-align: center;
    }
    .body pre{
         font-size: 15px;
          font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
          margin: 100px 100px;
        }

.nav-links ul li{
  list-style: none;
  display: inline-block;
  margin-right: 30px;
  margin-top: 20px;
}
 .nav-links{
    border-bottom: solid;
 }
.nav-links ul li a {
  text-decoration:none;
  color: black;
  font-size: 18px;
  font-weight: bold;
   font-family:Arial, Helvetica, sans-serif;
}
.nav-links ul li::after{
    content: '';
    width:0%;
    height:2px;
    background: black;
    display:block;
    margin:auto;
    transition:0.5s;            
}
.nav-links ul li:hover::after {
  width:100%;
}
.footer {
  background: #242324;
  color: #ffffff;
  padding: 10px 0;
  font-family: Arial, sans-serif;
  margin-left: -8px;
  margin-right: -8px;
}

.footer-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  gap: 30px;
}

.footer-section {
  flex: 1 1 250px;
  padding: 5px;
}

.footer-section h2 {
  font-size: 24px;
  color: rgba(245, 231, 231, 0.85);;
}

.footer-section h2 span {
  color: rgb(255, 255, 255);
}

.footer-section h3 {
  margin-bottom: 10px;
  font-weight: bold;
}

.footer-section ul {
  list-style: none;
  padding: 0;
  display: flex;
  gap: 2px;
}

.footer-section ul li {
  position: relative;
  padding: 0 10px;
}

.footer-section ul li a {
  color: #fff;
  text-decoration: none;

}


.footer-section ul li + li ::before{
  content: "|";
  position: absolute;
  left: 0;
  color: #fff;

}
.footer-section i{
  margin-right: 8px;
}
.footer-section p a{
  color: #fff;
}


.social-icons a {
  display: inline-block;
  color: #fff;
  margin-right: 10px;
  font-size: 18px;
  transition: color 0.3s;
}

.social-icons a:hover {
  color: #000000;
}

@media (max-width: 768px) {
  .footer-container {
    flex-direction: column;
    align-items: center;
  }
}

    </style>
</head>
<body>
    

    <div class="head"> 
    <div class="side-text">
      <h2>kidconnect</h2>
      <h5>ADOPTIONS</h5>
   </div>
    
    <div class="nav-links">
                <ul> 
                    <li><a href="index.php">Home</a></li>
                    <li><a href="eligibility.php">Eligibility </a></li>
                    <li><a href="about.php">About</a></li>  
                    <li><a href="login.php">Login</a></li>
                </ul>
               </div>
     </div>
    
   
    <pre class="para"><img src="bg.jpg" class="bg"> Adoption is a compassionate and life-changing process in which an
              individual or couple legally takes on the responsibility
of raising a child who is not biologically their own.It is not only a legal act but
         also an emotional commitment that requires love, patience, and 
                              understanding from all involved.
                                               <a href="register.php" class="signup">register</a></pre>
    <div class="body">
    <h2>HOW IT WORKS</h2>
    <pre><img src="bg2.jpg" class="bg1">
Adoption a child through KidConnect is a thoughtful and structured journey 
designed to support you at every step. It begins when you create an account and share
information about yourself and your family.Once registered, you'll go through a home 
study and background screening process to ensure a safe and loving environment for the
child.After approval, our team will help match you with a child whose needs align with
your strengths and lifestyle.The legal phase follows, where all necessary documents are
processed, and court approvals are obtained to finalize the adoption. Even after placement,
we provide continued support, resources, and guidance to help you and your new family
thrive together.
                                                <a href="eligibility.php" class="signup">know more</a>
    </pre>
  
    </div>
    <footer class="footer">
  <div class="footer-container">
    <div class="footer-section">
      <h2>&nbsp;&nbsp;Kidconnect<span>Adoptions</span></h2>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="eligibility.php">Eligibility</a></li>
        <li><a href="register.php">Register</a></li>
      </ul>
      <p>&copy; 2025 KidConnect. All rights reserved</p>
    </div>

    <div class="footer-section">
      <p><i class="fas fa-map-marker-alt"></i>Kongu Engineering College, Perundurai</p>
      <p><i class="fas fa-phone"></i>+91 0123456789</p>
      <p><i class="fas fa-envelope"></i><a href="mailto:xyz@gmail.com">xyz.24cse@kongu.edu</a></p>
    </div>

    <div class="footer-section">
      <h3>About kidconnect</h3>
      <p>
        "KidConnect is dedicated to uniting loving families with children in need. We believe every child deserves a safe, supportive, and joyful home."
      </p>
      <div class="social-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
        <a href="#"><i class="fab fa-github"></i></a>
      </div>
    </div>
  </div>
</footer>

   
    

    
</body>
</html>
index.php
Displaying index.php.