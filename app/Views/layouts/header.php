<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PESO</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css">
  <meta name="color-scheme" content="light">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
      :root {
    color-scheme: light !important;
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

/* Add transition and glow effect on hover */
.job-item {
  position: relative;
  padding: 1rem !important;
  transition: box-shadow 0.3s ease, border 0.3s ease;
  border: 1px solid transparent;
  text-align: left;
}

.job-item:hover {
  border: 1px solid #3F72AF;
  box-shadow: 0 0 10px #3F72AF66;
  cursor: pointer;
}

.save-icon {
  position: absolute;
  top: 0.5rem;
  right: 0.5rem;
  color: #ccc;
  font-size: 1.2rem;
  cursor: pointer;
}

.save-icon:hover::after {
  content: "Save";
  position: absolute;
  top: -1.5rem;
  right: 0;
  background-color: #112D4E;
  color: white;
  font-size: 0.7rem;
  padding: 2px 6px;
  border-radius: 4px;
  white-space: nowrap;
  z-index: 10;
}

  .custom-narrow-container {
  padding-left: 0.75rem !important;
  padding-right: 0.75rem !important;
  max-width: 100% !important; /* optional, to ensure it stretches full width */
  }
  /* .footer {
    background-color: #112D4E;
  } */

</style>
</head>
<body>

  <!-- Header -->
  <nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="<?= base_url('jobs') ?>">
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
      <a class="navbar-item" href="<?= base_url('jobs') ?>">Find Jobs</a>
      <a class="navbar-item" href="<?= base_url('about') ?>">About</a>
      <a class="navbar-item" href="<?= base_url('seeker/profile') ?>">Profile</a>
    </div>

    <!-- Right side links -->
    <div class="navbar-end">
      <div class="navbar-item">
        <a class="navbar-item custom-link" href="<?= base_url('signin') ?>">Sign In</a>
      </div>
    </div>
  </div>
</nav>
