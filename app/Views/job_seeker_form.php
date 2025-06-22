<?= $this->include('layouts/header') ?>
<section class="section">
  <div class="container">
    <h1 class="title has-text-centered">Job Seeker Information</h1>

    <form action="/seeker/save" method="post" enctype="multipart/form-data" class="box">

      <div class="field">
        <label class="label">Full Name</label>
        <div class="control">
          <input class="input" type="text" name="full_name" required>
        </div>
      </div>

      <div class="field">
        <label class="label">Contact Number</label>
        <div class="control">
          <input class="input" type="text" name="contact" required>
        </div>
      </div>

      <div class="field">
        <label class="label">Address</label>
        <div class="control">
          <textarea class="textarea" name="address" required></textarea>
        </div>
      </div>

      <div class="field">
        <label class="label">Highest Education</label>
        <div class="control">
          <div class="select is-fullwidth">
            <select name="education">
              <option>Elementary</option>
              <option>High School</option>
              <option>College</option>
              <option>Vocational</option>
              <option>None</option>
            </select>
          </div>
        </div>
      </div>

      <div class="field">
        <label class="label">Skills</label>
        <div class="control">
          <textarea class="textarea" name="skills" placeholder="e.g., Cooking, Driving, Carpentry"></textarea>
        </div>
      </div>

      <div class="field">
        <label class="label">Preferred Job Types</label>
        <div class="control">
          <label class="checkbox"><input type="checkbox" name="job_type[]" value="Household"> Household</label><br>
          <label class="checkbox"><input type="checkbox" name="job_type[]" value="Driver"> Driver</label><br>
          <label class="checkbox"><input type="checkbox" name="job_type[]" value="Cashier"> Cashier</label><br>
          <label class="checkbox"><input type="checkbox" name="job_type[]" value="Helper"> Helper</label>
        </div>
      </div>

      <div class="field">
        <label class="label">Expected Pay (Monthly or Daily)</label>
        <div class="control">
          <input class="input" type="text" name="expected_pay">
        </div>
      </div>

      <div class="field">
        <label class="label">Bio / Short Description</label>
        <div class="control">
          <textarea class="textarea" name="bio" placeholder="Tell us about yourself..."></textarea>
        </div>
      </div>

      <div class="field">
        <label class="label">Upload Photo (Optional)</label>
        <div class="control">
          <input class="file-input" type="file" name="photo">
        </div>
      </div>

      <div class="field mt-4">
        <button class="button is-primary is-fullwidth">Submit</button>
      </div>
    </form>
  </div>
</section>
<?= $this->include('layouts/footer') ?>