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
    <title>BMI Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #222;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #B0C4DE;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
         }
        h1 {
       margin-top: 0;
       color: #222;
       font-style: italic;
       font-family: cursive;
       text-shadow: 2px 2px 4px #01dbc2; /* Add shadow */
         }

        input[type="number"], select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        .button {
  margin: 0;
  height: auto;
  background: transparent;
  padding: 0;
  border: none;
  cursor: pointer;
}

/* button styling */
.button {
  --border-right: 6px;
  --text-stroke-color: rgba(255,255,255,0.6);
  --animation-color: #01dbc2;
  --fs-size: 1.5em;
  letter-spacing: 3px;
  text-decoration: none;
  font-size: var(--fs-size);
  font-family: "Arial";
  position: relative;
  text-transform: uppercase;
  color: transparent;
  -webkit-text-stroke: 1px var(--text-stroke-color);
}
/* this is the text, when you hover on button */
.hover-text {
  position: absolute;
  box-sizing: border-box;
  content: attr(data-text);
  color: var(--animation-color);
  width: 0%;
  inset: 0;
  border-right: var(--border-right) solid var(--animation-color);
  overflow: hidden;
  transition: 0.5s;
  -webkit-text-stroke: 1px var(--animation-color);
}
/* hover */
.button:hover .hover-text {
  width: 100%;
  filter: drop-shadow(0 0 23px var(--animation-color))
}
.input {
  width: 85%;
  max-width: 100%;
  background-color: #1a1a1a;
  border: none;
  padding: 10px;
  border-radius: 10px;
  outline: none;
  color: rgb(255, 255, 255);
  margin-bottom: 10px;
}

.input:focus {
  animation: rotateShadow 2s infinite linear;
}

@keyframes rotateShadow {
  0% {
    box-shadow: -2px -2px 8px 1px #01dbc2, 2px 2px 8px 1px #01dbc2;
  }
  25% {
    box-shadow: -2px 2px 8px 1px #01dbc2, 2px -2px 8px 1px #01dbc2;
  }
  50% {
    box-shadow: 2px 2px 8px 1px #01dbc2, -2px -2px 8px 1px #01dbc2;
  }
  75% {
    box-shadow: 2px -2px 8px 1px #01dbc2, -2px 2px 8px 1px #01dbc2;
  }
  100% {
    box-shadow: -2px -2px 8px 1px #01dbc2, 2px 2px 8px 1px #01dbc2;
  }
}
select {
  display: block;
  width: 100%;
  margin-bottom: 10px;
  padding: 8px;
  color:aliceblue;
  background-color:#222;
}
.btn {
  outline: 0;
  display: inline-flex;
  align-items: center;
  justify-content: space-between;
  background: #40B3A2;
  min-width: 200px;
  border: 0;
  border-radius: 20px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, .1);
  box-sizing: border-box;
  padding: 16px 20px;
  color: #222;
  font-size: 12px;
  font-weight: 600;
  letter-spacing: 1.2px;
  text-transform: uppercase;
  overflow: hidden;
  cursor: pointer;
}

.btn:hover {
  opacity: .95;
}

.btn .animation {
  border-radius: 100%;
  animation: ripple 0.6s linear infinite;
}

@keyframes ripple {
  0% {
    box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.1), 0 0 0 20px rgba(255, 255, 255, 0.1), 0 0 0 40px rgba(255, 255, 255, 0.1), 0 0 0 60px rgba(255, 255, 255, 0.1);
  }

  100% {
    box-shadow: 0 0 0 20px rgba(255, 255, 255, 0.1), 0 0 0 40px rgba(255, 255, 255, 0.1), 0 0 0 60px rgba(255, 255, 255, 0.1), 0 0 0 80px rgba(255, 255, 255, 0);
  }
}
.result{
    color: #222;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    font-size: 17px;
    text-align:center;
    margin-bottom: 12px; /* Add margin to create space */
}

.maxHeartRate{
    color: #222;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    font-size: 17px;
    text-align:center;
    margin-bottom: 12px; /* Add margin to create space */
}

.bmr{
    color: #222;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    font-size: 17px;
    text-align:center;
    margin-bottom: 12px; /* Add margin to create space */
}

.idealWeight{
    color: #222;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    font-size: 17px;
    text-align:center;
    margin-bottom: 12px; /* Add margin to create space */
}

.underweight-info{
    color: #222;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    font-size: 17px;
    text-align:center;
}
.normalweight-info{
    color: #222;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    font-size: 17px;
    text-align:center;
}
.overweight-info{
    color: #222;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    font-size: 17px;
    text-align:center;
}
.obese-info{
     color: #222;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    font-size: 17px;
    text-align:center;
}



    </style>
</head>
<body>

<div class="container">
    <h1>BMI Calculator</h1>
 
    <div class="input-container">
        <input placeholder="Weight (kg)" class="input" id="weight" type="number" />
        <input placeholder="Height (cm)" class="input" id="height" type="number"/>
        <input placeholder="Age" class="input" id="age" type="number"/>
        
    </div>
    <select id="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>
    <button onclick="calculate ()" class="button" data-text="Awesome"="">
        <span class="actual-text">&nbsp;calculate&nbsp;</span>
   <span aria-hidden="true" class="hover-text">&nbsp;calculate&nbsp;</span>
   </button>
    <div class="result" id="result"></div>
    <div class="maxHeartRate" id="maxHeartRate"></div>
    <div class="bmr" id="bmr"></div>
    <div class="idealWeight" id="idealWeight"></div>
    <div class="underweight-info" id="underweight-info" style="display: none;">
        <p>You are underweight.</p>
        <button onclick="openUnderweightInfo()" class="btn"><i class="animation"></i>More about underweight<i class="animation"></i>
        </button>
    </div>
    <div class="normalweight-info" id="normalweight-info" style="display: none;">
        <p>Your weight is normal.</p>
        <button onclick="openNormalWeightInfo()" class="btn"><i class="animation"></i>More about normalweight<i class="animation"></i>
        </button>
        </div>
    <div class="overweight-info" id="overweight-info" style="display: none;">
        <p>You are overweight.</p>
        <button onclick="openOverweightInfo()" class="btn"><i class="animation"></i>More about overweight<i class="animation"></i>
        </button>
        </div>
    <div class="obese-info" id="obese-info" style="display: none;">
        <p>You are obese.</p>
        <button onclick="openObeseInfo()" class="btn"><i class="animation"></i>More about obese<i class="animation"></i>
        </button>
        </div>
</div>

<script>
    function calculate() {
        var age = parseInt(document.getElementById('age').value);
        var gender = document.getElementById('gender').value;
        var weight = parseFloat(document.getElementById('weight').value);
        var height = parseFloat(document.getElementById('height').value) / 100; // convert to meters
        var bmi = weight / (height * height);
        var maxHeartRate = (gender === "male") ? 220 - age : 226 - age;
        var bmr = (gender === "male") ? 10 * weight + 6.25 * height * 100 - 5 * age + 5 : 10 * weight + 6.25 * height * 100 - 5 * age - 161;
        var idealWeight = (gender === "male") ? 22 * (height * height) : 21.5 * (height * height);

        document.getElementById('result').innerHTML = 'Your BMI is: ' + bmi.toFixed(2);
        document.getElementById('maxHeartRate').innerHTML = 'Max Heart Rate: ' + maxHeartRate;
        document.getElementById('bmr').innerHTML = 'BMR: ' + bmr.toFixed(2);
        document.getElementById('idealWeight').innerHTML = 'Ideal Weight: ' + idealWeight.toFixed(2);

        document.getElementById('underweight-info').style.display = 'none';
        document.getElementById('normalweight-info').style.display = 'none';
        document.getElementById('overweight-info').style.display = 'none';
        document.getElementById('obese-info').style.display = 'none';

        if (bmi < 18.5) {
            document.getElementById('underweight-info').style.display = 'block';
        } else if (bmi >= 18.5 && bmi < 25) {
            document.getElementById('normalweight-info').style.display = 'block';
        } else if (bmi >= 25 && bmi < 30) {
            document.getElementById('overweight-info').style.display = 'block';
        } else {
            document.getElementById('obese-info').style.display = 'block';
        }
    }

    function openUnderweightInfo() {
        window.open('underweight.php', '_blank');
    }

    function openNormalWeightInfo() {
        window.open('normalweight_info.html', '_blank');
    }

    function openOverweightInfo() {
        window.open('overweight_info.html', '_blank');
    }

    function openObeseInfo() {
        window.open('obese_info.html', '_blank');
    }
</script>

</body>
</html>
