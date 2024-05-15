<!DOCTYPE html>
<html> 
    <head>
        <meta charset="UTF-8"/>
        <meta name ="viewport" content="width=device-width,initial-scale=1.0">
        <title>Responsive Contact us Page Design</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" type="text/css" href="contactus.css">
    </head>
    <body>
        <section class="contact">
            <div class="content">
                <h2>Contact Us</h2>
                <p>We are ready to receive your inquiries and suggestions ...</p>
            </div>
            <div class="container">
                <div class="contactInfo">
                    <!-- --><div class="box">
                        <div class="icon"><b></b><i class="fa-solid fa-location-dot"></i></div>
                        <div class="text">
                            <h3>Address</h3>
                            <p> Kafr El Sheikh University</p>
                        </div>
                    </div><!---->
                    <div class="box">
                        <div class="icon"><b></b><i class="fa-solid fa-phone"></i></div>
                        <div class="text">
                            <h3>Phone</h3>
                            <p>+20 101 942 5370</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><b></b><i class="fa-solid fa-envelope"></i></div>
                        <div class="text">
                            <h3>Email</h3>
                            <p>yousefnasser228@gmail.com</p>
                        </div>
                    </div>
                    <h2 class= "txt">Find Us On </h2>
                    <ul class="sci">
                        <li><a href ="#"target ="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>                        
                        <li><a href ="https://www.instagram.com/i_yousef00/"target ="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href ="#"target ="_blank"><i class="fa-brands fa-github"></i></a></li>
                        <li><a href ="#"target ="_blank"><i class="fa-brands fa-kaggle"></i></a></li>
                        <li><a href ="#"target ="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
                <div class="contactForm">
                    <form>
                        <h2>Send Message</h2>
                        <div class="inputBox">
                            <input type="text" name="name" placeholder= "Full name" >
                            <!-- <span>Full Name</span> -->
                        </div>
                        <div class="inputBox">
                            <input type="email" name="mail" placeholder = "Your e-mail">
                            <!-- <span>Email</span> -->
                        </div>
                        <div class="inputBox">
                            <textarea name= "message" placeholder= "Message"></textarea>
                            <!-- <span>Type Your Message...</span> -->
                        </div>
                        <div class="inputBox">
                            <input type="submit" value="Send">                           
                        </div>
                    </form>
                </div>
            </div>
        </section>
        
        <style type="text/css">
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');
*
{
    margin:0;
    padding:0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;
}
.contact
{
    position: relative;
    min-height: 100vh;
    padding: 50px 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background: #222;
}
.contact .content
{
    max-width: 800px;
    text-align: center;
}
.contact .content h2
{
    font-size: 3em;
    color:#fff ;
    font-weight: 500;
}
.contact .content p
{
    color:#fff;
    font-size: 1.1em;
    font: weight 300;
}
.container
{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 50px;      
    margin-top: 30px;
}
.container .contactInfo
{
width:50%;
display: flex;
flex-direction: column;
}
.container .contactInfo .box
{
    position: relative;
    padding: 20px 0;
    display: flex;
    cursor:pointer ;
}
.container .contactInfo .box .icon
{
    position: relative;
    min-width: 60px;
    height: 60px;
    background:repeating-conic-gradient(from 27.5deg,#01dbc2
    0%,#01dbc2 10% ,transparent 10% ,transparent 50% ) ;
    display: flex;
    justify-content: center;
    align-items: center;
}
.container .contactInfo .box .icon::before
{
    content:'' ;
    position: absolute;
    inset: 0;
    background:repeating-conic-gradient(from 117.5deg,#01dbc2
    0%,#01dbc2 10% ,transparent 10% ,transparent 50% ) ;
}
.container .contactInfo .box .icon::after
{
    content: '';
    position: absolute;
    inset: 2px;
    background: #222;
}
.container .contactInfo .box .icon b
{
    position: absolute;
    inset: 8px;
    background: #01dbc2;
    z-index:2 ;
}
.container .contactInfo .box .icon i
{
    position: relative;
    z-index:1000 ;
    color:#333;
    font-size: 1.25em;
}
.container .contactInfo .box .text
{
    position: relative;
    display: flex;
    flex-direction: column;
    margin-left: 20px;
    font-size: 1.1em;
    color :#fff;
    font-weight: 300;
}
.container .contactInfo .box .text h3
{
    font-weight: 500;
    color:#01dbc2;
}
.container .contactInfo .txt
{
    color:#fff;
margin-top: 50px;
font-weight: 500;
border-left: 50px solid #01dbc2;
padding-left:10px ;
line-height:1em;
}
.container .contactInfo .sci
{
    position: relative;
    display: flex;
    gap: 30px;
    margin:20px 0;
}
.container .contactInfo .sci li
{
    list-style: none;
}
.container .contactInfo .sci li a
{
    color:#fff;
    font-size: 1.5em;
    transition: 025s;
}
.container .contactInfo .sci li a:hover
{
    color: #01dbc2;
    filter:drop-shadow(0 0 5px #01dbc2);
}
.container .contactForm
{
    position: relative;
    width: 40%;
    background:repeating-conic-gradient(from var(--a),#01dbc2
    0%,#01dbc2 10% ,transparent 10% ,transparent 50% ) ;
    animation: animate 6s linear infinite;
    padding: 60px;
}
.container .contactForm::before
{
    content: '';
    position: absolute;
    inset: 0;
    background:repeating-conic-gradient(from var(--a),#01dbc2
    0%,#01dbc2 10% ,transparent 10% ,transparent 50% ) ;
    animation: animate 6s linear infinite;
    animation-delay: -1.5s;    
}
.container .contactForm::after
{
    content: '';
    position: absolute;
    inset: 2px;
    border:20px solid #222;
    background: #333;
}
@property --a
{
    syntax: '<angle>';
    inherits: false;
    initial-value: 0deg;
}
@keyframes animate
{
    0%
    {
        --a:0deg;
    }
    100%
    {
        --a:360deg;
    }
}
.container .contactForm form
{
    position: relative;
    z-index: 10;
}
.container .contactForm form h2
{
    font-size: 2em;
    color: #fff;
    font-weight: 500;
}
.container .contactForm form .inputBox
{
    position: relative;
    width: 100%;
    margin-top: 20px;
}
.container .contactForm form .inputBox input,
.container .contactForm form .inputBox textarea
{
    width: 100% !important;
    padding: 5px 0;
    font-size: 1.1em;
    margin: 10px 0;
    border: none;
    background: transparent;
    border-bottom: 2px solid #01dbc2;
    color:#fff;
    outline: none;
    resize: none;
    
}
.container .contactForm form .inputBox span
{
    position: absolute ;
    left: 0;
    pointer-events: none;
    padding :5px 0;
    margin: 10px 0;
    font-size: 1.1em;
    color: #fff;
    transition: 0.5px 0;
}
.container .contactForm form .inputBox input:focus~span,
.container .contactForm form .inputBox textarea:focus~span,

.container .contactForm form .inputBox input:valid~span,
.container .contactForm form .inputBox textarea:valid~span
{
    color:#01dbc2;
    font-size: 0.9em;
    transform:translateY(-24px) ;
}
.container .contactForm form .inputBox input[type="submit"]
{
    width: 100%;
    background: #01dbc2;
    color: #222;
    border: none;
    cursor: pointer;
    padding: 10px;
    font-size: 1.1em;
    font-weight: 500;
}
        </style>
    </body>
</html>