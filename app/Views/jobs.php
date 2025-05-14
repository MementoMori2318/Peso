<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PESO</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css">

  <style>
      body {
    background-color: #ffffff !important;
    color: #112D4E !important;
  }
    /* Remove background hover for Sign In / Sign Up */
.navbar-end .custom-link:hover {
  background-color: transparent !important;
  color: #112D4E !important;
  text-decoration: underline;
}

/* Optional: default color */
.navbar-end .custom-link {
  color: #112D4E !important;
}
  /* White navbar background */
  .navbar {
    background-color: #fff;
  }

  /* Default text color for navbar links */
  .navbar .navbar-item {
    color: #112D4E !important;
  }

  /* On hover: dark blue background, white text */
  .navbar .navbar-item:hover {
    background-color: #112D4E !important;
    color: #ffffff !important;
  }

  /* Ensure nested text like PESO and Cyber Squad also turns white */
  .navbar .navbar-item:hover * {
    color: #ffffff !important;
  }
  /* Apply Now button color */
  .button.is-primary {
    background-color: #3F72AF;
    border-color: #3F72AF;
  }
  .button.is-primary:hover {
    background-color: #2e5a8f;
    border-color: #2e5a8f;
  }

  /* Hover effect on job list items */
  .job-item:hover {
    border: 1px solid #3F72AF;
    cursor: pointer;
  }

  /* Reduce padding in job list box */
  .job-item {
    padding: 0.75rem !important;
  }


</style>
</head>
<body>

  <!-- Header -->
  <nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="/">
      <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo" style="max-height: 70px;">
      <div class="ml-3 has-text-weight-bold is-flex is-flex-direction-column is-align-items-start">
        <span class="is-size-5">PESO</span>
        <span class="is-size-7 has-text-grey">Cyber Squad</span>
      </div>
    </a>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasic">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasic" class="navbar-menu">
    <!-- Left side links -->
    <div class="navbar-start">
      <a class="navbar-item" href="/jobs">Find Jobs</a>
      <a class="navbar-item" href="/about">About</a>
      <a class="navbar-item" href="/contact">Profile</a>
    </div>

    <!-- Right side links (plain text style) -->
    <div class="navbar-end">
      <div class="navbar-item">
        <a class="navbar-item custom-link" href="/signin">Sign In</a>
    </div>
  </div>
</nav>
<!-- Secondary Navbar: Search + Filters -->
<section class="section py-4" style="background-color: #112D4E;">
  <div class="container">
    
    <!-- Full-width search bar -->
    <div class="field mb-3">
      <div class="control has-icons-left">
        <input class="input" type="text" placeholder="Search jobs or companies">
        <span class="icon is-left">
          <i class="fas fa-search"></i>
        </span>
      </div>
    </div>

    <!-- Filter dropdowns -->
    <div class="columns is-mobile is-multiline">
      <div class="column is-6-mobile is-3-tablet">
        <div class="select is-fullwidth">
          <select>
            <option disabled selected>Location</option>
            <option>Metro Manila</option>
            <option>Cebu</option>
            <option>Davao</option>
          </select>
        </div>
      </div>
      <div class="column is-6-mobile is-3-tablet">
        <div class="select is-fullwidth">
          <select>
            <option disabled selected>Job Type</option>
            <option>Full-Time</option>
            <option>Part-Time</option>
            <option>Freelance</option>
            <option>Remote</option>
          </select>
        </div>
      </div>
    </div>

  </div>
</section>


  <!-- Main Content -->
  <section class="section py-4" style="background-color: white;">
  <div class="container">
    <div class="columns" style="height: 80vh; gap: 1rem;">

      <!-- Job List -->     
  <div class="column is-3">
    <p class="has-text-weight-bold mb-3">Job Listings</p>

    <!-- Job item -->
    <div class="box job-item is-clickable" style="display: flex; align-items: center; gap: 0.75rem;">
      <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo" style="width: 48px; height: 48px;">
      <div class="is-flex-grow-1">
        <p class="has-text-weight-semibold mb-1">Software Engineer</p>
        <p class="is-size-7 has-text-grey mb-0">Cyber Squad Inc.</p>
        <p class="is-size-7 has-text-grey">Quezon City, Metro Manila</p>
      </div>
      <span class="icon has-text-grey-light" title="Save">🔖</span>
    </div>

    <!-- Another job -->
    <div class="box job-item is-clickable" style="display: flex; align-items: center; gap: 0.75rem;">
      <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo" style="width: 48px; height: 48px;">
      <div class="is-flex-grow-1">
        <p class="has-text-weight-semibold mb-1">Backend Developer</p>
        <p class="is-size-7 has-text-grey mb-0">NextGen Tech</p>
        <p class="is-size-7 has-text-grey">Taguig, Metro Manila</p>
      </div>
      <span class="icon has-text-grey-light" title="Save">🔖</span>
    </div>
  </div>

      <!-- Job Detail -->
      <div class="column is-9">
        <div class="box p-4" style="height: 100%; overflow-y: auto;">
          <h2 class="title is-4">Software Engineer</h2>
          <p class="subtitle is-6 has-text-grey">Cyber Squad Inc.</p>
          <p><strong>Location:</strong> Quezon City, Metro Manila</p>
          <p><strong>Salary:</strong> ₱50,000 - ₱70,000</p>
          <hr>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
          <!-- Add more content to simulate scroll -->
          <p>Lorem ipsum dolor sit amet...</p>
          <p>Lorem ipsum dolor sit amet...</p>
          <p>Lorem ipsum dolor sit amet...</p>
          <br>
          <button class="button is-primary">Apply Now</button>
        </div>
      </div>

    </div>
  </div>
</section>


  <!-- Footer -->
  <footer class="footer">
    <div class="content has-text-centered">
      <p>
        <strong>PESO</strong> by Your Organization. © <?= date('Y') ?>. All rights reserved.
      </p>
    </div>
  </footer>

  <!-- Bulma burger menu toggle script -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

      if ($navbarBurgers.length > 0) {
        $navbarBurgers.forEach(el => {
          el.addEventListener('click', () => {
            const target = el.dataset.target;
            const $target = document.getElementById(target);
            el.classList.toggle('is-active');
            $target.classList.toggle('is-active');
          });
        });
      }
    });
  </script>

</body>
</html> 