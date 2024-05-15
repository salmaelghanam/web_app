function calculate() {
  var weightElement = document.getElementById("weight");
  var heightElement = document.getElementById("height");
  var ageElement = document.getElementById("age");
  var genderElement = document.getElementById("gender");

  var weight = parseFloat(weightElement.value);
  var height = parseFloat(heightElement.value) / 100; // Convert height to meters
  var age = parseInt(ageElement.value);
  var gender = genderElement.value;

  if (isNaN(weight) || isNaN(height) || isNaN(age)) {
    alert("Please enter valid weight, height, and age.");
    return;
  }

  var bmi = weight / (height * height);
  var maxHeartRate = (gender === "male") ? 220 - age : 226 - age;
  var bmr = (gender === "male") ? 10 * weight + 6.25 * height * 100 - 5 * age + 5 : 10 * weight + 6.25 * height * 100 - 5 * age - 161;
  var idealWeight = (gender === "male") ? 22 * (height * height) : 21.5 * (height * height);

  // Store the results in localStorage
  localStorage.setItem("bmiResult", bmi.toFixed(2));
  localStorage.setItem("maxHeartRateResult", maxHeartRate);
  localStorage.setItem("bmrResult", bmr.toFixed(2));
  localStorage.setItem("idealWeightResult", idealWeight.toFixed(2));

  // Redirect to the results page
  window.location.href = "results.html";
}