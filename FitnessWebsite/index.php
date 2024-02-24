<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

#logo{
  font-family: "Libre Baskerville", serif;
  font-size: 25px;
  height: 80px;
  margin-top: 20px;
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
  z-index: 1;
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
  right:  20px;
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

a{
  color: black;
  text-decoration: none;
}

.hero{
  display: flex;
  justify-content: center;
  align-items: center;
  color: aliceblue;
  font-size: 30px;
  margin-bottom: 100px;
  position: relative;
  overflow: hidden;
  min-height: 70vh;
  background: rgb(0,0,0,0.15);
  font-family: 'Hedvig Letters Serif', serif;
}

.video-bg{
  position: absolute;
  z-index: -1;
  top: 0;
  left: 0;
  min-width: 100%;
  min-width: 100%;
}


.title{
  padding: 1vw;
  margin: 30px;
  display: flex;
  justify-content: space-between;
  font-size: 30px;
  text-align: justify;
  font-family: 'Hedvig Letters Serif', serif;
}

.quote img{
 height: 400px;
 width: 450px;
 display: flex;

}

.quote{
    padding: 2vw;
    margin: 2vw; 
    display: flex;
    justify-content: space-evenly;
    font-size: 25px;
    font-family: 'Hedvig Letters Serif', serif;
}


.title2{
  display: flex;
  justify-content: center;
  font-size: 30px;
  font-family: 'Hedvig Letters Serif', serif;
}

.box{
  display: flex;
  justify-content: center;
  margin: 50px;
}

.content{ 
  border-radius: 30px;
  height: 350px;
  width: 400px;
  align-content: center;
  border: 2px solid black;
  background-color: rgb(207, 224, 239);
  font-size: 18px;
  margin-bottom: 20px;
  text-align: center;
  line-height: 35px;
  font-family: 'Hedvig Letters Serif', serif;
}

    </style>
  <title>Document</title>
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
        <li class="menu-item"><a href="#">HOME</a></li>
        <li class="menu-item"><a href="#">YOUR PLAN</a></li>
        <li class="menu-item"><a href="#">BLOG</a></li>
        <li class="menu-item"><a href="#">CONTACT</a></li>
        <li class="menu-item"><a href="#">LOG OUT</a></li>
        <label for="check" class="close-menu"
          ><i class="fas fa-times"></i
        ></label>
      </ul>
      <label for="check" class="open-menu"><i class="fas fa-bars"></i></label>
    </section>
  </nav>

<header class="background">
  <div class="hero">
    <h1>Welcome back, Lucia</h1>
    <video class="video-bg" autoplay muted loop src="pexels-polina-kovaleva-5645055 (1080p).mp4" type="video/mp4"></video>
  </div>
  
  <div class="title">
    <h3>Quote of the day:</h3>
  </div>

  <div class="quote"> 
    <h1>"It's never too late or never too early to work towards being the healthiest you" .- Anonymous</h1>
    <img src="nutrition_chart_101.jpg" alt="">
  </div>


  <div class="title2">
    <h2>Current Plan</h2>
  </div>


  <div class="box">
    <div class="content">
      <h1>Nutrition Coaching</h1>
      <h2>£55.99 /month</h2>
      <p>A nutrition plan tailored to your body. <br>
         Body composition analysis. <br>
         A programme that is scientifically backed, not fad diets. <br>
         A diet plan that fits your lifestyle, not crazy diets that NEVER work. <br>
         Mixed, pescatarian, vegetarian and vegan meals. 
      </p>
    </div>
  </div>
  

</header>

<?php include 'footer.php' ?>

</body>

</html>