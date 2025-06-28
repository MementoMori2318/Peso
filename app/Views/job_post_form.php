<?= $this->include('layouts/header') ?>

<section class="section" style="background-color: #112D4E;">
  <div class="container">
    <h1 class="title has-text-centered has-text-white-ter">Post a Job</h1>

    <form action="/employer/save_job" method="post" enctype="multipart/form-data" class="box">

      <div class="field">
        <label class="label">Job Title</label>
        <div class="control">
          <input class="input" type="text" name="title" placeholder="e.g., Cashier, Household Helper" required>
        </div>
      </div>

      <div class="field">
        <label class="label">Company or Business Name</label>
        <div class="control">
          <input class="input" type="text" name="company" placeholder="Optional for informal jobs">
        </div>
      </div>

      <div class="field">
        <label class="label">Location</label>
        <div class="control">
          <input class="input" type="text" name="location" placeholder="e.g., Barangay, Municipality" required>
        </div>
      </div>

      <div class="field">
        <label class="label">Job Type</label>
        <div class="control">
          <div class="select is-fullwidth">
            <select name="job_type">
              <option disabled selected>Select job type</option>
              <option>Full-Time</option>
              <option>Part-Time</option>
              <option>Household</option>
              <option>One-time Gig</option>
              <option>Remote</option>
            </select>
          </div>
        </div>
      </div>

      <div class="field">
        <label class="label">Salary / Pay</label>
        <div class="control">
          <input class="input" type="text" name="salary" placeholder="e.g., ₱500/day or ₱15,000/month">
        </div>
      </div>

      <div class="field">
        <label class="label">Requirements / Qualifications</label>
        <div class="control">
          <textarea class="textarea" name="requirements" placeholder="e.g., Trustworthy, 2 years experience, etc."></textarea>
        </div>
      </div>

      <div class="field">
        <label class="label">Additional Notes</label>
        <div class="control">
          <textarea class="textarea" name="notes" placeholder="Other things applicants should know..."></textarea>
        </div>
      </div>

      <div class="field mt-4">
        <button class="button is-primary is-fullwidth">Post Job</button>
      </div>

    </form>
  </div>
</section>

<?= $this->include('layouts/footer') ?>
