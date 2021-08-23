<?php
  date_default_timezone_set("Europe/Stockholm");
  $birthday = new DateTime('1995-09-11'); // Enter your birthday in YYYY-MM-DD format
  $currentDate = new DateTime('now');
  $interval = $birthday->diff($currentDate);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kevin Leskinen | Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/logo.png" type="image/png" sizes="16x16">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  </head>
  <body>
    <section id="about" class="tile-wrap hov hov-a">
      <h2 class="tile-title">About</h2>
    </section>
    <div class="tile-content about">
      <div class="center-box">
        <div id="profile-wrap"><img id="profile-pic" src="img/profil-cirkel.png" alt="Image of Kevin Leskinen"></div>
        <h1 class="about-title">Hi, my name is Kevin Leskinen and I am a <?php echo $interval->format('%y'); ?> year old Web Developer from Stockholm.</h1>
        <p class="about-text">
          Other than my interest for movies, videogames and training I enjoy creating beautiful things with code.
          I'm currently studying Frontend development at Jensen Education to sharpen my skills so that I am ready to start working full-time again as a developer when I graduate in June next year.
        </p>
        <br>
        <p class="about-text">
          Before I went back to studying I actively worked as a Frontend Developer, first at Cheil Nordic and later at Carismar. I have approximately 2,5 years of working
          experience as a developer. During which time I've developed campaign pages for Samsung Nordic and agile development of e-commerce projects.
          <br>
          <br>
          I would like to grow in the role of a Frontend Developer and bridge the gap between design and backend. By having some knowledge from both the design and backend area
          I am on the road to becoming a more well rounded developer which may be beneficial in the future and therefore I am open and willing to learn more
          about the technologies out there and also contribute with the knowledge that I have. If you think I could fit in at your workplace I would be more than happy to meet for a chat.
        </p>
      </div>
    </div>
    <section id="cases" class="tile-wrap hov hov-a">
      <h2 class="tile-title">Cases</h2>
    </section>
    <div class="tile-content cases">
      <div class="center-box">
        <a href="https://www.vikingpmc.com/" target="_blank">
          <div class="case-box">
            <img src="img/vkn_logo_crop.png" alt="Viking PMC website case">
            <h2>Viking PMC</h2>
            <p style="font-size:12px; font-style: italic;">HTML, CSS, Bootstrap, Sass, JS, PHP</p>
            <p>
              This is a unit in the ArmA 3 community that I am a part of.
              In order to let people know who we are and what we do I helped create this website.
            </p>
          </div>
        </a>
        <a href="https://www.samsung.com/se/zlatan/" target="_blank">
          <div class="case-box">
            <img src="img/zlatan_case.png" alt="Samsung Zlatan case">
            <h2>Samsung</h2>
            <p style="font-size:12px; font-style: italic;">HTML, CSS</p>
            <p>
              To officially mark the beginning of a partnership between Samsung and Zlatan there had to be a landing page.
              At Cheil Nordic I created this page working closely with UX-designers and Samsung.
            </p>
          </div>
        </a>
        <a href="javascript:void(0);">
          <div class="case-box">
            <img src="img/niveamen_case.png" alt="Nivea men case">
            <h2>Niveamen</h2>
            <p style="font-size:12px; font-style: italic;">
              HTML, CSS, JS
              <br>
              (page no longer viewable)
            </p>
            <p>At Cheil Nordic I made a landing page for visualizing survey data for a Niveamen campaign.</p>
          </div>
        </a>
      </div>
    </div>
    <section id="skills" class="tile-wrap hov hov-a">
      <h2 class="tile-title">Skills</h2>
    </section>
      <div class="tile-content">
        <div class="skills-container">
          <div class="skills-box">
            <h2 class="skills-title">Primary skills</h2>
            <ul class="skills-list">
              <li class="skills-list-item">HTML5</li>
              <li class="skills-list-item">CSS3</li>
              <li class="skills-list-item">JavaScript ES6</li>
            </ul>
          </div>
          <div class="skills-box">
            <h2 class="skills-title">General skills</h2>
            <ul class="skills-list">
              <li class="skills-list-item">UX/UI Design</li>
              <li class="skills-list-item">React.js</li>
              <li class="skills-list-item">Sass</li>
              <li class="skills-list-item">Git</li>
              <li class="skills-list-item">Scrum</li>
            </ul>
          </div>
        </div>
      </div>

    <section id="contact">
      <div class="contact-wrap">
        <h2>Contact</h2>
        <div class="info-wrap">
          <a href="mailto:info@kevinleskinen.se">info@kevinleskinen.se</a><a href="tel:+46736310661">+46(0)73-631 06 61</a>
        </div>
        <div class="social">
          <a href="https://www.linkedin.com/in/kevinleskinen/" target="_blank"><i class="fab fa-linkedin-in fa-2x"></i></a>
          <a href="https://github.com/NivekL" target="_blank"><i class="fab fa-github fa-2x"></i></a>
        </div>
      </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="main.js" type="text/javascript"></script>
  </body>
</html>
