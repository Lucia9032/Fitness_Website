<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="register.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"/>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Hedvig+Letters+Serif:opsz@12..24&display=swap" rel="stylesheet">
    <title>Register</title>
    <style>
      *{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}


.background{
  display: block;
  height: 120vh;
  background: url(register1.webp);
  background-size: cover;
  background-repeat: no-repeat;
  padding-bottom: 15vh; 
 }


.background h1{
  text-align: center;
  font-size: 70px;
  color: whitesmoke;
  padding: 4vw;
  font-family: 'Hedvig Letters Serif', serif; 
  padding-top: 15vh;
}

.container a{
  color: aliceblue;
  text-decoration: none;
}

.container a:hover{
  text-decoration-line: underline;
}

.form{ 
 display: flex;
 justify-content: space-evenly;
 margin: 2vw;
 font-size: 25px;
 font-family: 'Hedvig Letters Serif', serif;
} 

.login-form{
  color: whitesmoke;
  font-size: 20px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  font-family: 'Hedvig Letters Serif', serif;
} 

.block input{
  display: block;
  background-color: rgb(158, 186, 217);
  height: 25px;
  width: 40vw;
  margin: 10px;
  border-radius: 20px;
  box-shadow: 2px 8px 5px;
} 

.gender{
  margin: 10px;
}

button{
  margin-top: 20px;
  border: none;
  height: 50px;
  width: 130px;
  background-color: rgb(158, 186, 217);
  font-size: 20px;
  border-radius: 10px;
  font-family: 'Hedvig Letters Serif', serif;

}

button:hover{
  transform: scale(1.1);
}

@media (max-width:900px){
  .background{
    display: block;
    height: 100vh;
    background: url(/images/loginimg2.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    padding-bottom: 15vh; 
   }
}

@media (max-width: 800px){
  
  .background h1{
    text-align: center;
    font-size: 35px;
    color: whitesmoke;
    padding-top: 20vh;
  }

  .form{ 
    display: block;
    justify-content: space-evenly;
    text-align: center;
    margin: 1vw;
    font-size: 20px;
   } 

   .login-form{
    color: whitesmoke;
    font-size: 18px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
  } 
}

    </style>
  </head>


  <body>

  <?php include_once 'navbar.php' ?>

<header class="background">
  <h1>WELCOME</h1>

  <div class="container">
  
    <section class="login">
      <div class="form">
        <h2><a href="login.html">LOGIN</a></h2>
        <h2><a href="register.html">REGISTER</a></h2>
      </div>
    </section>
    
    <div class="form1">
      <form class="login-form" action="register.php" method="get">
  
        <div class="block">
         <section>
           <label for="email">Email:</label>
           <input type="email" name="email" id="email" required>
         </section>
       
         <section>
           <label for="name">Username:</label>
           <input type="text" name="name" id="name" required>
         </section>
         
         <section>
           <label for="pass">Password:</label>
           <input type="password" name="pass" id="pass" required>
         </section>
     
         <section>
           <label for="con-pass">Confirm password:</label>
           <input type="password" name="conpass" id="conpass" required>
         </section> 
        </div>
       
   
       <section class="gender">
         <label for="gender">Gender:</label>
   
         <label for="male">Male</label>
         <input type="radio" name="gender" id="male">
   
         <label for="female">Female</label>
         <input type="radio" name="gender" id="female">
   
       </section> 
     
       <button class="button">Sign Up</button>
     
     </form>
    </div>
    
    
    </div>
  
  </header>
  
</div>

<?php include_once 'footer.php' ?>

</body>
</html>

<?php
$servername="localhost";
$username="root";
$password="";
$database="form";

$conn=mysqli_connect($servername,$username,$password,$database)
or die("not connected successfully".mysqli_connect_error());


$email=$_GET['email'];
$name=$_GET['name'];
$pass=$_GET['pass'];
$conpass=$_GET['conpass'];

$sql=" INSERT INTO `users` (email,name,pass,conpass) VALUES ('$email','$name','$pass','$conpass')";

$result=mysqli_query($conn,$sql);

if($result){

  echo "inserted successfully";

}
else{

  echo "not inserted".mysqli_error($conn);
}

?>