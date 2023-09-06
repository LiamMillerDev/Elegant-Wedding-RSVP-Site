<?php
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = sanitize_input($_POST["name"]);
  $rsvp = sanitize_input($_POST["rsvp"]);
  $dietary = sanitize_input($_POST["dietary"]);
  $song_title = sanitize_input($_POST["song-title"]);
  $artist = sanitize_input($_POST["artist"]);

  if (empty($name) || !in_array($rsvp, ["yes", "no"])) {
    $message = "Please fill in the required fields.";
  } else {
    $subject = "RSVP FORM";
    $body = "Name: $name\nRSVP: $rsvp\nDietary Restrictions: $dietary\nSong Title: $song_title\nArtist: $artist";
    $headers = "From: webmaster@example.com";

    if (mail("liamjmillernz@gmail.com", $subject, $body, $headers)) {
      $message = "Thank you for your RSVP!";
    } else {
      $message = "An error occurred. Please try again.";
    }
  }
}

function sanitize_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Kain & Jamie Wedding</title>
  <link rel="stylesheet" href="styles.css" />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display:wght@400;500;700;900&display=swap" rel="stylesheet" />
</head>

<body>
  <header>
    <nav>
      <a href="#landing">K&J</a>
      <a href="#directions">DIRECTIONS</a>
      <a href="#rsvp">RSVP</a>
      <a href="#faqs">FAQS</a>
    </nav>
  </header>

  <main>
    <section id="landing">
      <article id="title-container">
        <div id="title-group">
          <h1>KAIN & JAMIE</h1>
          <h2>are getting married</h2>
        </div>
      </article>
      <p>15.03.2024</p>
    </section>

    <section id="address">
      <div class="semi-transparent-background"></div>

      <p class="address-line1">3'OCLOCK IN THE AFTERNOON</p>
      <p class="address-line2">1256 STATE HIGHWAY 16, WAIMAUKAU </p>

      <p class="address-line3">DRINKS, DINNER, AND DANCING TO FOLLOW</p>
      <a href="#rsvp" class="address-button">CLICK HERE TO RSVP</a>

    </section>

    <section id="countdown-drinks">
      <div id="countdown">
        <div class="time-container">
          <span id="days" class="time-number"></span>
          <span class="time-text">DAYS</span>
        </div>
        <div class="time-container">
          <span id="hours" class="time-number"></span>
          <span class="time-text">HOURS</span>
        </div>
        <div class="time-container">
          <span id="minutes" class="time-number"></span>
          <span class="time-text">MINUTES</span>
        </div>
      </div>
      <div id="time-up" style="display: none">
        <h2>The wedding has started!</h2>
      </div>
      <div id="drinks">
        <p class="drinks-event">BYO DRINK EVENT</p>
        <p class="drinks-supply">BUBBLES & NON ALCHOLIC DRINKS SUPPLIED</p>
      </div>
    </section>

    <section id="directions">
      <div id="directions-container">
        <div id="map">
          <!-- Google Maps Embed -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2031.177355766512!2d174.45861418916832!3d-36.75600359467634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzbCsDQ1JzIxLjYiUyAxNzTCsDI3JzM1LjEiRQ!5e1!3m2!1sen!2snz!4v1689477117568!5m2!1sen!2snz" width="100%" height="100%" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div id="directions-text">
          <section id="rsvp-info">
            <div class="info-section">
              <h2>
                <span class="rsvp-text">RSVP</span><br />
                BY 15 FEBRUARY
              </h2>
            </div>
          </section>

          <div class="info-section">
            <h2 class="right-aligned">GETTING<br />THERE</h2>
            <div class="button-wrapper">
              <img src="images/parking.png" alt="Parking Icon" class="info-icon" />
              <p>
                If you are arriving in your own vehicle, there is plenty of
                grass parking available. Someone will be there to direct you.
                Please dedicate a sober driver and take a look at the
                direction information.
              </p>
              <button class="info-button">DIRECTION INFO</button>
            </div>
          </div>
          <div class="info-section">
            <img src="images/taxi.png" alt="Taxi Icon" class="info-icon" />

            <div class="button-wrapper">
              <p>
                If you would like to transport by Taxi or Uber please get them
                to do drop-offs/pickups in the parking area. We have contacted
                this company if you would like to pre-book your transport. We
                recommend sorting this the previous day.
              </p>

              <button class="info-button">BOOK A TAXI</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="faqs">
      <img src="path/to/flower1.png" class="flower-top-right">
      <img src="path/to/flower2.png" class="flower-bottom-left">
      <div class="faq-content">
        <h2 class="faq-question">YOUR QUESTIONS ANSWERED...</h2>

        <h3 class="faq-question">What should I wear?</h3>
        <p>The vibe is formal casual but please wear what you feel good in. Our bridal party colours are copper & navy. Also, the venue is mostly grass so you have been warned when choosing your shoes.</p>

        <h3 class="faq-question">Can I help in any way?</h3>
        <p>Absolutely! We will be at the venue setting up Wednesday to Friday and packing down Saturday to midday Sunday, and lots of little jobs to giveaway on the day. Swing by if you want to join in! We will also never say no to any baking!</p>

        <h3 class="faq-question">The post-wedding brunch</h3>
        <p>We will be back at the venue the following day at about 10am for a bbq brunch which all are welcome to attend.</p>

        <h3 class="faq-question">What can I bring as a gift?</h3>
        <p>We honestly don't expect any gifts as we are asking you all to bring your own alcohol and most of you are from out of town. Though, we know some of you will not take no as an answer and in that case we would love a small koha to our honeymoon in Port Douglas.</p>
      </div>
    </section>

    <section id="rsvp">
      <div class="hello-text-container">
        <h2 class="lovelies-text">Hello lovelies,</h2>
      </div>
      <form action="" method="post">
        <div class="form-container">
          <!-- Left Column -->
          <div class="form-column">
            <div class="form-instruction">
              Kindly RSVP by the form below or on 02040162488
            </div>
            <div class="form-group">
              <label for="name">Full name:</label>
              <input type="text" id="name" name="name" required />
            </div>
            <div class="form-group">
              <label for="rsvp">RSVP:</label>
              <select id="rsvp" name="rsvp">
                <option value="yes">Yes</option>
                <option value="no">No</option>
              </select>
            </div>
            <div class="form-group">
              <label for="dietary">Dietary Restrictions:</label>
              <select id="dietary" name="dietary">
                <option value="none">None</option>
                <option value="vegetarian">Vegetarian</option>
                <option value="vegan">Vegan</option>
                <option value="gluten-free">Gluten Free</option>
              </select>
            </div>
          </div>

          <!-- Right Column -->
          <div class="form-column">
            <div class="form-instruction">
              Please hit us with a party starter song request:
            </div>
            <div class="form-group">
              <label for="song-title">Song Title:</label>
              <input type="text" id="song-title" name="song-title" />
            </div>
            <div class="form-group">
              <label for="artist">Artist:</label>
              <input type="text" id="artist" name="artist" />
            </div>
            <div class="form-group">
              <input type="submit" value="Submit" />
            </div>
          </div>
        </div>
      </form>

      <div class="see-you-text-container">
        <h2 class="see-you-soon">See you soon x</h2>
      </div>
    </section>

    <footer>
      <h2>15. 03. 2024</h2>
    </footer>
  </main>
  <script src="main.js"></script>
</body>

</html>