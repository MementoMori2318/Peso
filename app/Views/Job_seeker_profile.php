<?= $this->include('layouts/header') ?>

<!-- Hero-style header section (full-width look, no box) -->
<section class="section" style="background-color: #112D4E;">
  <div class="container">
    <div class="columns is-vcentered is-variable is-6">
      <!-- User Photo -->
      <div class="column is-3 has-text-centered">
        <?php if (!empty($user['photo'])): ?>
          <figure class="image is-128x128 is-inline-block">
            <img class="is-rounded" src="<?= base_url('uploads/' . $user['photo']) ?>" alt="Profile Photo">
          </figure>
        <?php else: ?>
          <figure class="image is-128x128 is-inline-block">
            <img class="is-rounded" src="https://bulma.io/assets/images/placeholders/128x128.png" alt="Default Profile">
          </figure>
        <?php endif; ?>
      </div>

        <!-- Basic Info -->
        <div class="column has-text-white">
        <h1 class="title is-4 has-text-white mb-2"><?= esc($user['full_name']) ?></h1>
        <p class="subtitle is-6 has-text-white-ter mb-3"><?= esc($user['bio']) ?></p>

        <p>
          <span class="icon"><i class="fas fa-phone-alt"></i></span>
          <?= esc($user['contact']) ?>
        </p>

        <p>
          <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
          <?= esc($user['address']) ?>
        </p>
      </div>

    </div>
  </div>
</section>

<!-- Main Details Section -->
<section class="section pt-2">
  <div class="container">
    <div class="columns is-centered">
      <div class="column is-half">
        <div class="box">
          <h2 class="title is-5 has-text-centered">Professional Information</h2>
          <hr>

          <p><strong>Education:</strong> <?= esc($user['education']) ?></p>
          <hr class="my-2">

          <p><strong>Skills:</strong> <?= esc($user['skills']) ?></p>
          <hr class="my-2">

          <p><strong>Preferred Jobs:</strong>
            <?= isset($user['job_type']) ? esc(implode(', ', (array)$user['job_type'])) : 'N/A' ?>
          </p>
          <hr class="my-2">

          <p><strong>Expected Pay:</strong> <?= esc($user['expected_pay']) ?></p>

          <div class="has-text-right mt-4">
            <a href="<?= base_url('job_seeker_form') ?>" class="button is-warning">Edit Profile</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->include('layouts/footer') ?>
