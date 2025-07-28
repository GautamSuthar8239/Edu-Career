<?php
require "templates/head.html";
if (!isset($_SESSION)) {
  session_start();
}
?>

<head>
  <title>Home</title>
</head>

<body>
  <section class="hero is-info is-medium">
    <div class="hero-head">
      <nav class="navbar">
        <div class="container">
          <div id="navbarMenuHeroA" class="navbar-menu">
            <div class="navbar-end">
              <a class="navbar-item" href="dashboard">Go To Dashboard</a>
            </div>
          </div>
        </div>
      </nav>
    </div>

    <div class="hero-body">
      <div class="container has-text-centered">
        <h1 class="title">Edu Career </h1>
      </div>
    </div>

  </section>
  <footer class="footer">
    <div class="content has-text-centered">
      <!-- intro and welcome -->
       <p>
  👋 Welcome to <strong>EduCareer</strong> — your personalized career companion platform!
</p>
<p>
  Explore job listings, build your professional profile, and track your progress towards your dream career.
</p>
<p>
  Ready to get started? <a href="dashboard">Go to your dashboard</a> and take the next step in your career journey!
</p>

    </div>
  </footer>
  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</body>

</html>
