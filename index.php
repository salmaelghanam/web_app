<?php
session_start();

include("connection.php");
include("functions.php");


$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fit you</title>
    <link rel="icon" type="image/x-icon" href="images\logo.jpg">
    <style type = "text/css">
body {
  background-color: #222; 
}
#index {
    background-image: url("images\\Fitness_First_Small_Group_Training-1800x580.jpg_1715723529202.jpg"); /* Replace 'your-image-url.jpg' with the URL of your image */
    background-size: cover;
    background-position: center;
    height: 500px; /* Adjust the height as needed */
    color: white; /* Text color */
    /* text-align: center; */
    padding: 20px; /* Add padding to ensure text is not too close to the edge */
    color: black;
  }

.logo {
    width: 100px;
    /* Adjust the width of the logo */
    height: auto;
    /* Maintain aspect ratio */
    display: inline-block;
    /* Ensure logo and heading are on the same line */
    
    /* Add some space between the logo and heading */
    border-radius: 50%;
}
#c{
  color:white;
  margin-left: 300px;
  
}
#HH {
  color:white;
  margin: 0;
  padding: 0;
  position: absolute;
  top: 30%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 60px;
  font-weight: bold;
  padding-top: 200px;
  padding-bottom: 0px;
}
.center {
            text-align: center;
            margin-top: 25px;
            
          }
        
        .big {
            font-size: 24px;
            font-weight: bold;
           color: white;
            font-size: 40px;
            text-shadow: 2px 2px 4px #01dbc2;
            font-family: serif;
        }
#navindex {
    position:relative;
    top: 0;
    left: 0;
    width: 90%;
    padding: 18px 220px;
    padding-right: 10px;
    display: flex;
    justify-content: space-between;
    z-index: 99;
    display: inline-block;
    font-size: 18px;
}

.container0 {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;
}

#navindex ul {
    list-style-type: none;
    padding: 0;
}

#navindex ul li {
    display: inline;
    margin-right: 20px;
}

#navindex ul li a {
    color: #fff;
    text-decoration: none;
}

#navindex ul li a:hover {
    text-decoration: underline;
}
#navindex2 ul li a{
  color:#f5f5f5
}
#name {
    color: #f0e7e7;
    font-weight: bold;
    font-size: xx-large;
}

.label1 {
    text-align: center;
    margin-top: 50px;
}

button {
    padding: 10px 20px;
    background-color: #ee5011;
    color: white;
    cursor: pointer;
    border-radius: 5px;
}

#nameInput {
    width: 400px;
    height: 30px;
}

#imgs{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    display: flex;
}

.containerr
{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: center;
    gap: 100px 50px;
    padding: 40px 20px;
}
.containerr .card    
{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    width: 350px;
    height: 300px;
    background: #fff;
    border-radius: 20px;
    box-shadow: 0 35px 80px rgba(0,0,0,0.15);
    transition: 0.5s;
}
.containerr .card:hover
{
   height: 400px;
}
.containerr .card .imgbx
{
    position: absolute;
    top: 20px;
    width: 300px;
    height: 220px;
    background: #333;
    border-radius: 12px;
    overflow: hidden;
    transition: 0.5s;
}

.containerr .card:hover .imgbx
{
    top: -100px;
    scale: 0.75;
    box-shadow: 0 15px 45px rgba(0,0,0,0.2);
    
}
.containerr .card .imgbx img 
{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.containerr .card .contentt
{
    position: absolute;
    top: 252px;
    width: 100%;
    padding:0 30px;
    height: 30px;
    overflow: hidden;
    text-align: center;
    transition: 0.5s;
}
.containerr .card:hover .contentt{
    top: 130px;
    height: 250px;
}
.containerr .card .contentt h2
{
    font-size: 1.5em;
    font-weight: 700;
    color: var(--clr);
}
.containerr .card .contentt p
{
    color: #333;
    font-size: 1.05em;
}
/* Footer Styles */
footer {
    background-color: #f9f9f9;
    padding: 40px 0;
    color:white;
  }
  
  .containerrr {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
  }
  
  .row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }
  
  .col-md-6,
  .col-md-3 {
    margin-bottom: 30px;
  }
  
  h4 {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 15px;
    color:white;
  }
  
  p {
    margin-bottom: 15px;
    line-height: 1.5;
  }
  
  ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  
  li {
    margin-bottom: 10px;
  }
  
  a {
    color:white;
    text-decoration: none;
    transition: color 0.3s;
  }
  
  a:hover {
    color: #333;
  }
  
  /* Responsive Styles */
  @media (max-width: 767px) {
    .col-md-6,
    .col-md-3 {
      flex-basis: 100%;
    }
  }
  #iframe-footer {
    background-color:#222;
    padding:0px ;
    color:white;
    
  }
  
  #main-footer {
    background-color:#222;
    padding: 40px 0;
    color:white;
  }
  
 
    </style>
</head>
<body>
    <div class="bg-image"></div>
    <header id="index">
        <div class="container0">
            <img src="images\logo.jpg" alt="Logo" class="logo">
        <h1 id="HH">Fit You</h1>
        <nav id="navindex">
            <ul id="c" style="color:black;">
                <li><a href="index.php">Home</a></li>
                <li><a href="calc.php">calculate</a></li>
                <li><a href="aboutus.php">About Us </a></li>
                <li><a href="Contact.php">Contact Us</a></li>
                <li><a href="login.php">Logout</a></li>
                
                
            </ul>
        </nav>
        </div>
        
    </header>
    <div class="center">
      <span class="big">hello,<?php echo $user_data['user_name']; ?></span>
    </div>
    <section class="BGimg">
        <div id="imgs">  
         
            <div class="containerr">
                <div class="card" style="--clr:#009688">
                    <div class="imgbx">
                        <img src="images/360_F_326932160_C2FhYsvUg0vxGJjiMKpTn7JWepR1BpED.jpg">
                    </div>
                    <div class="contentt">
                        <h2>BMI</h2>
                        <p>BMI is an approximate measure of your total body fat. <br>
                            Your waist circumference is a better predictor of health risk than your BMI. <br>
                            Being underweight or overweight can cause health problems, especially if you are also inactive.</p>
                            
                    </div>
                </div>
            </div>
            <div class="containerr">
                <div class="card" style="--clr:#ff3e7f">
                    <div class="imgbx">
                        <img src="images/images (1).jpg">
                    </div>
                    <div class="contentt">
                        <h2>IBW</h2>
                        <p>The IBW model is utilized but not limited 
                            to creating enteral and parenteral feeding 
                            plans, avoiding malnutrition, aiding weight
                             management, identifying transplant eligibility, and determining inclusion or exclusion
                              from research studies. </p>
                            
                    </div>
                </div>
            </div>
            <div class="containerr">
                <div class="card" style="--clr:#03a9f4">
                    <div class="imgbx">
                        <img src="images/bmr.jpg" >
                    </div>
                    <div class="contentt">
                         <h2>BMR</h2>
                        <p>Your Basal Metabolic Rate (BMR) is the
                            number of calories you burn as your body performs basic (basal) life-sustaining function. <br>
                             Commonly also termed as Resting Metabolic Rate (RMR), which is the calories 
                           burned if you stayed in bed all day.</p>
                            
                    </div>
                </div>
            </div>
        </div>
        <div class="containerr">
                <div class="card" style="--clr:#009688">
                    <div class="imgbx">
                        <img src="images\mhr.jpg">
                    </div>
                    <div class="contentt">
                        <h2>MHR</h2>
                        <p>Maximum heart rate is the highest number of beats your heat can pump per minute 
                          when it's under high stress (physical or otherwise). <br>
                           You can estimate your maximum heart rate using your age and a simple equation.<br>
                           You simply subtract your age from 220 </p>
                    </div>
                </div>
            </div>
        <footer id="iframe-footer">
            <div class="containerrr">
              <div class="row">
                <div class="col-md-12">
                  <h4>Some videos to understand more</h4>
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/UowWA-8TiyI?si=d3B9U9l1U91N81um"
                     title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/0on5LV3k26o?si=kpndXkoCft2kJWzx" 
                      title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                      referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/2r_473DgCjI?si=uEjL0y7GlasWjDGX" 
                        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                         referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                         <iframe width="560" height="315" src="https://www.youtube.com/embed/I2vczOw3e30?si=QgdWyx6u_sPZOq5C"
                           title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                          referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </footer>
          
          <footer id="main-footer">
            <div class="containerrr">
              <div class="row">
                <div class="col-md-6">
                <h4><a href="aboutus.php">About Us </a></h4>
                  <p></p>
                </div>
                <div class="col-md-3">
                  <h4>Quick Links</h4>
                  <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="Contact.php">Contact Us</a></li>
                  </ul>
                </div>
                <div class="col-md-3">
                  <h4><a href="Contact.php">Contact Us </a></h4>
                </div>
              </div>
            </div>
          </footer>
         </section>

</body>
</html>












