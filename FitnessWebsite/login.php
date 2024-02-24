<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="login.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hedvig+Letters+Serif:opsz@12..24&display=swap" rel="stylesheet">
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
  font-size: 25px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  font-family: 'Hedvig Letters Serif', serif;
}

input{
  display: block;
  background-color: rgb(158, 186, 217);
  box-shadow: 2px 8px 5px;
  height: 25px;
  width: 40vw;
  margin: 25px;
  border-radius: 20px;
} 

button{
  margin-top: 1vw;
  border: none;
  height: 2.6vw;
  width: 6.7vw;
  background-color: rgb(158, 186, 217);
  font-size: 1vw;
  border-radius: 1vw;
  font-family: 'Hedvig Letters Serif', serif;
}

button:hover{
  transform: scale(1.1);
}

.forgot{
 margin-top: 1.5vw;
}

.message{
  margin: 1.5vw;
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

@media (max-width: 700px){
  
  .background h1{
    text-align: center;
    font-size: 40px;
    color: whitesmoke;
    padding-top: 20vw;
    padding-top: 200px;
  }
  
  .form{
   display: block;
   justify-content: space-between;
   text-align: center;
   margin: 2vw;
   font-size: 20px;
  }
  
  .login-form{
    color: whitesmoke;
    font-size: 18px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  
  input{
    display: block;
    background-color: rgb(158, 186, 217);
    margin: 20px;
  }
    
} 

</style>
    <title>Login</title>
  </head>

  <body>

<?php include_once 'navbar.php' ?>

 <header class="background">
  <h1>WELCOME</h1>

  <main class="container">
  
    <section class="login">
      <div class="form">
        <h2><a href="login.html">LOGIN</a></h2>
        <h2><a href="register.html">REGISTER</a></h2>
      </div>
    </section>
    
     <form class="login-form" action="index.php" method="post">
    
       <section>
         <label for="name">Username:</label>
         <input type="text" name="name" id="name">
       </section>
      
       <section>
         <label for="pass">Password:</label>
         <input type="password" name="pass" id="pass">
       </section>
    
         <button>Sign In</button>
  
       <p class="forgot"> Forgot your <a href="#">username</a> or <a href="#">password</a>?</p>
    
       <p class="message">Not registered yet? <a href="register.html">Create an account</a></p>
      
     </form>
    
    </main>
  
  </header>
<!-- </div> -->

<?php include 'footer.php' ?>
  
</body>

</html>
