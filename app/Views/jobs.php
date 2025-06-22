<?= $this->include('layouts/header') ?>

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
  <section class="section " style="background-color: white;">
  <div class="container custom-narrow-container">
    <div class="columns" style="height: 80vh; gap: 1rem;">

      <!-- Job List -->     
      <div class="column is-3 mr-4">
        <p class="has-text-weight-bold mb-3">Job Listings</p>

        <!-- Job item -->
        <div class="box job-item is-clickable">
            <!-- Save Icon -->
            <span class="icon save-icon" title="Save">🔖</span>

            <!-- Logo centered at top -->
            <div class="has-text-centered mb-3">
              <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo" style="width: 56px; height: 56px;">
            </div>

            <!-- Job info stacked vertically -->
            <div>
              <p class="has-text-weight-semibold is-size-6 mb-1">Software Engineer</p>
              <p class="is-size-7 has-text-grey mb-1">Cyber Squad Inc.</p>
              <p class="is-size-7 has-text-grey mb-2">Quezon City, Metro Manila</p>

              <p class="is-size-7 has-text-weight-medium mb-1">₱50,000 - ₱70,000 / month</p>
              <p class="is-size-7 has-text-grey">
                Full-Time · 2+ Years Experience · Bachelor's Required
              </p>
            </div>
          </div>


        <!-- Another job -->
        <div class="box job-item is-clickable">
            <!-- Save Icon -->
            <span class="icon save-icon" title="Save">🔖</span>

            <!-- Logo centered at top -->
            <div class="has-text-centered mb-3">
              <img src="<?= base_url('assets/images/logo.png') ?>" alt="Logo" style="width: 56px; height: 56px;">
            </div>

            <!-- Job info stacked vertically -->
            <div>
              <p class="has-text-weight-semibold is-size-6 mb-1">Software Engineer</p>
              <p class="is-size-7 has-text-grey mb-1">Cyber Squad Inc.</p>
              <p class="is-size-7 has-text-grey mb-2">Quezon City, Metro Manila</p>

              <p class="is-size-7 has-text-weight-medium mb-1">₱50,000 - ₱70,000 / month</p>
              <p class="is-size-7 has-text-grey">
                Full-Time · 2+ Years Experience · Bachelor's Required
              </p>
            </div>
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
  <?= $this->include('layouts/footer') ?>
