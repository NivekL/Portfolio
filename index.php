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
          I've graduated from an HVE-program, Web Developer in e-commerce at Medieinstitutet and I am currently looking for work as a Frontend Developer.
        </p>
        <br>
        <p class="about-text">
          Since my days behind the school bench I've kept myself busy with work ranging from; developing and updating campaign pages for Samsung, to various frontend work for e-commerce customers.
          I've always worked closely with other developers and ux-designers so in addition to what I learned in school and the main frontend tools, html, css and js. I've explored sass, vue and C# to name a few.
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
              In order to let people know what we are all about I created this website and it has put us on the map in the ArmA 3 community.
            </p>
          </div>
        </a>
        <a href="https://www.samsung.com/se/zlatan/" target="_blank">
          <div class="case-box">
            <img src="img/zlatan_case.png" alt="Viking PMC website case">
            <h2>Samsung</h2>
            <p style="font-size:12px; font-style: italic;">HTML, CSS</p>
            <p>
              To officially mark the beginning of a partnership between Samsung and Zlatan there had to be a landing page.
              At Cheil Nordic I created this page working closely with UX-designers and Samsung.
            </p>
          </div>
        </a>
        <a href="https://www.niveamen.se/upplev/Local/se/body-hair-the-truth" target="_blank">
          <div class="case-box">
            <img src="img/niveamen_case.png" alt="Viking PMC website case">
            <h2>Niveamen</h2>
            <p style="font-size:12px; font-style: italic;">HTML, CSS, JS</p>
            <p>At Cheil Nordic I made a landing page for visualizing survey data for a Niveamen campaign.</p>
          </div>
        </a>
      </div>
    </div>
    <section id="skills" class="tile-wrap hov hov-a">
      <h2 class="tile-title">Skills</h2>
    </section>
    <div class="tile-content skills">
      <div class="center-box">
        <div class="skillbar clearfix " data-percent="100%">
        	<div class="skillbar-title" style="background: #112F41;"><span>HTML5/CSS3</span></div>
        	<div class="skillbar-bar" style="background: #112F41;"></div>
        	<div class="skill-bar-percent" style="color:#fff;">100%</div>
        </div>

        <div class="skillbar clearfix " data-percent="70%">
        	<div class="skillbar-title" style="background: #068587;"><span>JavaScript/jQuery</span></div>
        	<div class="skillbar-bar" style="background: #068587;"></div>
        	<div class="skill-bar-percent">70%</div>
        </div>

        <div class="skillbar clearfix " data-percent="30%">
        	<div class="skillbar-title" style="background: #ED553B;"><span>PHP</span></div>
        	<div class="skillbar-bar" style="background: #ED553B;"></div>
        	<div class="skill-bar-percent">30%</div>
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
        </div>
      </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="main.js" type="text/javascript"></script>
  </body>
</html>
