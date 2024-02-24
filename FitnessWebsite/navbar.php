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
      <style>
        *{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

#logo{
  font-family: "Libre Baskerville", serif;
  font-size: 25px;
  height: 80px;
  margin-top: 20px;
}

.button {
  height: 100%;
}

.navbar{
  width: 100%;
  background-color: rgb(111, 151, 189);
  display: flex;
  align-items: center;
  flex-direction: row;
  justify-content: space-between;
  height: 10vh;
  position: relative;
  font-family: 'Montserrat', sans-serif;
  position: fixed;
}

.navbar-menu{
  width: 100%;
  display: flex;
  list-style: none;
  flex-direction: row;
  align-items: center;
  justify-content: center;
}

.navbar-menu li a{
  padding: 10px;
  text-decoration: none;
  color: black;
  transition: all;
  transition-duration: 1s;
  font-size: 15px;
  position: relative;
  display: inline-block;
}

.navbar-menu li a::after{
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  width: 0;
  height: 1px;
}

.navbar-menu li a:hover:after{
  width: 100%;
}

.open-menu, .close-menu{
  position: absolute;
  color: rgb(1, 1, 1);
  cursor: pointer;
  display: none;
}

.open-menu{
  top: 30%;
  right: 20px;
  transform: translateY(50%);
}

.close-menu{
  top: 20px;
  right: 20px;
}

#check{
  display: none;
}

@media (max-width: 610px){
  .navbar-menu {
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 80%;
    height: 100vh;
    position: fixed;
    top: 0;
    right: -100%;
    z-index: 100;
    background-color: rgb(160, 187, 218);
    transition: all 0.2s ease-in-out;
  }

  .navbar-menu li {
    margin-top: 40px;
  }

  .navbar-menu li a {
    padding: 10px;
  }

  .open-menu, .close-menu {
    display: block;
  }

  #check:checked ~ .navbar-menu {
    right: 0;
  }

  
}

.menu-item:hover{
  transform: scale(1.1);
}

.navbar-menu li a:hover{
  background-color: #9ebad9;
  transform: scale(1);
}
      </style>
    <title>Register</title>
  </head>

  <body>

    <nav class="navbar">
      <section id="logo">
        <svg width="200" height="300">
          <rect
            x="5"
            y="3"
            width="170"
            height="140"
            style="fill: rgb(184, 214, 241)"
            stroke="black"
            stroke-width="3"
            ;fill-opacity="0.1"
          />
          <line
            class="left-plate1"
            x1="50"
            y1="40"
            x2="50"
            y2="90"
            stroke="black"
            stroke-linecap="round"
            stroke-width="5mm"
          ></line>
          <line
            class="handle"
            x1="115"
            y1="66"
            x2="60"
            y2="66"
            stroke="black"
            stroke-linecap="round"
            stroke-width="5mm"
          ></line>
          <line
            class="right-plate1"
            x1="125"
            y1="40"
            x2="125"
            y2="90"
            stroke="black"
            stroke-linecap="round"
            stroke-width="5mm"
          ></line>
          <line
            class="right-plate2"
            x1="140"
            y1="54"
            x2="140"
            y2="80"
            stroke="black"
            stroke-linecap="round"
            stroke-width="5mm"
          ></line>
          <line
            class="left-plate2"
            x1="36"
            y1="55"
            x2="36"
            y2="80"
            stroke="black"
            stroke-linecap="round"
            stroke-width="5mm"
          ></line>
          <text class="logo" x="90" y="130" fill="black" text-anchor="middle">
            JOE SMITH
          </text>
        </svg>
      </section> 

      <section>
        <input type="checkbox" id="check" />
        <ul class="navbar-menu">
          <li class="menu-item"><a href="index.html">HOME</a></li>
          <li class="menu-item"><a href="services.html">SERVICES</a></li>
          <li class="menu-item"><a href="about.html">ABOUT</a></li>
          <li class="menu-item"><a href="contact.html">CONTACT</a></li>
          <li class="menu-item"><a href="login.html">LOGIN</a></li>
          <label for="check" class="close-menu"
            ><i class="fas fa-times"></i
          ></label>
        </ul>
        <label for="check" class="open-menu"><i class="fas fa-bars"></i></label>
      </section>
    </nav>

  
</body>
</html>