document.addEventListener("DOMContentLoaded", function () {
  const weddingDate = new Date("2024-03-15T15:00:00"); // Date and time of the wedding

  function updateCountdown() {
    let now = new Date();
    let difference = weddingDate - now;

    if (difference < 0) {
      // Hide countdown and display a message
      document.getElementById("countdown").style.display = "none";
      document.getElementById("time-up").style.display = "block";
      return;
    }

    let days = Math.floor(difference / (1000 * 60 * 60 * 24));
    let hours = Math.floor(
      (difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
    );
    let minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
    let seconds = Math.floor((difference % (1000 * 60)) / 1000);

    document.getElementById("days").textContent = days;
    document.getElementById("hours").textContent = hours;
    document.getElementById("minutes").textContent = minutes;
    document.getElementById("seconds").textContent = seconds;
  }

  setInterval(updateCountdown, 1000); // Update countdown every second
});
