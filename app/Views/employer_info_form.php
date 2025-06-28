<!-- employer_info_form.php -->
<?= $this->include('layouts/header') ?>

<section class="section" style="background-color: #112D4E;">
  <div class="container">
    <h1 class="title has-text-centered has-text-white-ter">Employer Information</h1>

    <form action="/employer/save-info" method="post" class="box">

      <div class="field">
        <label class="label">Full Name / Contact Person</label>
        <div class="control">
          <input class="input" type="text" name="contact_person" required>
        </div>
      </div>

      <div class="field">
        <label class="label">Company / Business / Household Name <small>(Optional)</small></label>
        <div class="control">
          <input class="input" type="text" name="organization_name">
        </div>
      </div>

      <div class="field">
        <label class="label">Industry <small>(Optional)</small></label>
        <div class="control">
          <input class="input" type="text" name="industry" placeholder="e.g. IT, Construction, Household">
        </div>
      </div>

      <div class="field">
        <label class="label">Contact Number</label>
        <div class="control">
          <input class="input" type="text" name="contact_number" required>
        </div>
      </div>

      <div class="field">
        <label class="label">Email <small>(Optional)</small></label>
        <div class="control">
          <input class="input" type="email" name="email">
        </div>
      </div>

      <div class="field">
        <label class="label">Address</label>
        <div class="control">
          <textarea class="textarea" name="address" required></textarea>
        </div>
      </div>

      <div class="field">
        <label class="label">Short Description <small>(Optional)</small></label>
        <div class="control">
          <textarea class="textarea" name="bio" placeholder="Tell job seekers about your business or household"></textarea>
        </div>
      </div>

      <div class="field mt-4">
        <button class="button is-primary is-fullwidth">Continue to Post a Job</button>
      </div>
    </form>
  </div>
</section>

<?= $this->include('layouts/footer') ?>
