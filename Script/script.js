document.addEventListener("DOMContentLoaded", function() {
    console.log("Welcome to Global Environmental Awareness!");
    
    // Example: Fetching real-time data (e.g., environmental statistics)
    // Use an API to fetch real-time data (weather, CO2 levels, etc.) and display it dynamically.

    fetch("https://api.co2levels.com/latest")
        .then(response => response.json())
        .then(data => {
            console.log("Current CO2 Levels:", data.co2_level);
            document.getElementById("co2-level").innerHTML = data.co2_level;
        })
        .catch(error => {
            console.error("Error fetching data:", error);
        });
});
