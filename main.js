var weddingDate = new Date("2024-03-15T15:00:00"); // Date and time of the wedding

function updateCountdown() {
  var now = new Date();
  var difference = weddingDate - now;

  var days = Math.floor(difference / (1000 * 60 * 60 * 24));
  var hours = Math.floor(
    (difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
  );
  var minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));

  document.getElementById("days").textContent = days;
  document.getElementById("hours").textContent = hours;
  document.getElementById("minutes").textContent = minutes;
}

setInterval(updateCountdown, 1000); // Update countdown every second
