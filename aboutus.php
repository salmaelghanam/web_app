<!DOCTYPE html>
<html>
<head>
    <title>Our Team Section</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel ="stylesheet" type="text/css"href="stylee.css">
    <link rel="icon" type="image/x-icon" href="images\logo.jpg">
</head>
<body>
    <style>
        *{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    font-family: sans-serif;
}
body{
    background-color:#222;
}
.team-section{
    margin-top: 75px;
}
.team-title h1{
    font-size:50px ;
    color: #fff;
    text-align: center;
    position: relative;
}
.team-cards{
    width: 85%;
    display: flex;
    justify-content:space-between ;
    margin: 20px auto;
}
.team-card{
    background-color: #01dbc2;
    border-radius: 50px;
    box-shadow: 0px 2px 5px rgba(0,0,0,.2);
    margin: 0px 20px;
    padding: 20px;
    text-align: center;
    transition:transform 0.6s ease;
    width: calc(16.6667% -20px);
}
.team-card:hover{
    transform: translateY(-12px);
}
.team-image img{
    border-radius: 50%;
    height: 130px;
    width: 130px;
    object-fit: cover;
    margin-bottom:10px ;
}
.team-detail h3{
    color: #fff;
    font-size: 30px;
    margin: 15px 0px;
}
.team-detail h3{
    color: #fff;
    font-size: 30px;
    margin: 15px 0px;
}
.team-detail p{
    color:#426385 ;
    font-size:18px;
}
@media screen and (max-width: 768px) {
    .team-cards{
        display: flex;
        flex-direction: column;
    }
    .team-card{
        width:85% ;
        margin:25px auto;
    }
}
    </style>
    <section class="team-section">
        <div class="team-title">
            <h1>Our Team</h1>
        </div>
        <div class="team-cards">
            <div class="team-card">
                <div class="team-image">
                    <img src="images\youssef.jpg">
                </div>
                <div class="team-detail">
                    <h3>Yousef Nasser</h3>
                    <p>Team Leader</p>
                </div>
            </div>
            <div class="team-card">
                <div class="team-image">
                    <img src="images\amira.jpg">
                </div>
                <div class="team-detail">
                    <h3>Amira Hesham</h3>
                    <p>Team Member</p>
                </div>
            </div>
            <div class="team-card">
                <div class="team-image">
                    <img src="images\salma.jpg">
                </div>
                <div class="team-detail">
                    <h3>Salma ElGhanam</h3>
                    <p>Team Member</p>
                </div>
            </div>
            <div class="team-card">
                <div class="team-image">
                    <img src="images\rawan.jpg">
                </div>
                <div class="team-detail">
                    <h3>Rawan Abd Elgawad</h3>
                    <p>Team Member</p>
                </div>
            </div>
            <div class="team-card">
                <div class="team-image">
                    <img src="images\non.jpg">
                </div>
                <div class="team-detail">
                    <h3>Elham Hamden</h3>
                    <p>Team Member</p>
                </div>
            </div>
            <div class="team-card">
                <div class="team-image">
                    <img src="images\non.jpg">
                </div>
                <div class="team-detail">
                    <h3>Eslam Ramzy</h3>
                    <p>Team Member</p>
                </div>
            </div>
            
        </div>
    </section>
</body>
</html>