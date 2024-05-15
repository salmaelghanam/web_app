window.onload = function () {
    // Retrieve the results from localStorage
    var bmiResult = localStorage.getItem("bmiResult");
    var category = "";
    if (bmiResult < 18.5) {
        category = "Underweight";
    } else if (bmiResult < 25) {
        category = "Normal weight";
    } else if (bmiResult < 30) {
        category = "Overweight";
    } else {
        category = "Obese";
    }
    var maxHeartRateResult = localStorage.getItem("maxHeartRateResult");
    var bmrResult = localStorage.getItem("bmrResult");
    var idealWeightResult = localStorage.getItem("idealWeightResult");

    // Display the results on the page
    document.getElementById("bmiResult").textContent = bmiResult + " (" + category + ")";
    document.getElementById("maxHeartRateResult").textContent = maxHeartRateResult;
    document.getElementById("bmrResult").textContent = bmrResult;
    document.getElementById("idealWeightResult").textContent = idealWeightResult;

    // Clear the localStorage
    localStorage.clear();
};