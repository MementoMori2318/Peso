<?= $this->include('layouts/header') ?>

<!-- Profile Header -->
<section class="section has-background-light">
  <div class="container">
    <div class="columns is-vcentered is-variable is-6">
      <!-- Profile Image -->
      <div class="column is-3 has-text-centered">
        <?php if (!empty($employer['photo'])): ?>
          <figure class="image is-128x128 is-inline-block">
            <img class="is-rounded" src="<?= base_url('uploads/' . $employer['photo']) ?>" alt="Profile Photo">
          </figure>
        <?php else: ?>
          <figure class="image is-128x128 is-inline-block">
            <img class="is-rounded" src="https://bulma.io/assets/images/placeholders/128x128.png" alt="Default Profile">
          </figure>
        <?php endif; ?>
      </div>

      <!-- Basic Info -->
      <div class="column has-text-left">
        <h1 class="title is-4"><?= esc($employer['contact_person']) ?></h1>
        <?php if (!empty($employer['organization_name'])): ?>
          <p class="subtitle is-6"><strong><?= esc($employer['organization_name']) ?></strong></p>
        <?php endif; ?>
        <p><i class="fas fa-map-marker-alt mr-2"></i><?= esc($employer['address']) ?></p>
        <p><i class="fas fa-phone mr-2"></i><?= esc($employer['contact']) ?></p>
        <?php if (!empty($employer['email'])): ?>
          <p><i class="fas fa-envelope mr-2"></i><?= esc($employer['email']) ?></p>
        <?php endif; ?>
        <?php if (!empty($employer['bio'])): ?>
          <p class="mt-2"><?= esc($employer['bio']) ?></p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<!-- Posted Jobs -->
<section class="section">
  <div class="container">
    <div class="level mb-4">
      <div class="level-left">
        <h2 class="title is-5">Your Job Posts</h2>
      </div>
      <div class="level-right">
        <a href="<?= base_url('employer/post-job') ?>" class="button is-primary">Post New Job</a>
      </div>
    </div>
    <!-- Job Item -->
    <div class="box job-item">
      <p class="title is-6 mb-1">House Cleaner Needed</p>
      <p><strong>Type:</strong> Part-Time | <strong>Salary:</strong> ₱500/day</p>
      <p><strong>Location:</strong> Barangay San Jose, Pili</p>
      <p class="mt-2">Looking for a reliable and experienced house cleaner for 3 days a week.</p>

      <div class="buttons mt-3">
        <button class="button is-small is-info" onclick="openJobModal('House Cleaner Needed')">
          <i class="fas fa-edit mr-1"></i> Edit
        </button>
        <button class="button is-small is-link" onclick="openApplicantsModal()">
          <i class="fas fa-users mr-1"></i> Applicants
        </button>
      </div>
    </div>


    <!-- Add more job posts here if needed -->
  </div>
</section>
<!-- Job Modal -->
<div class="modal" id="jobModal">
  <div class="modal-background" onclick="closeJobModal()"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Edit Job</p>
      <button class="delete" aria-label="close" onclick="closeJobModal()"></button>
    </header>

    <form action="/employer/update_job" method="post" class="modal-card-body">
      <!-- Simulated form; you can add method spoofing or job ID if needed -->
      <div class="field">
        <label class="label">Job Title</label>
        <div class="control">
          <input class="input" type="text" name="job_title" id="editJobTitle" required>
        </div>
      </div>

      <div class="field">
        <label class="label">Description</label>
        <div class="control">
          <textarea class="textarea" name="description" id="editJobDescription" required></textarea>
        </div>
      </div>

      <div class="field">
        <label class="label">Job Type</label>
        <div class="control">
          <div class="select is-fullwidth">
            <select name="type" id="editJobType" required>
              <option>Full-Time</option>
              <option>Part-Time</option>
              <option>Contract</option>
              <option>Temporary</option>
            </select>
          </div>
        </div>
      </div>

      <div class="field">
        <label class="label">Salary</label>
        <div class="control">
          <input class="input" type="text" name="salary" id="editJobSalary">
        </div>
      </div>

      <div class="field">
        <label class="label">Status</label>
        <div class="control">
          <button type="button" class="button is-warning is-light" id="statusToggle" onclick="toggleStatus()">
            <i class="fas fa-toggle-on mr-1" id="statusIcon"></i> <span id="statusText">Set as Active</span>
          </button>
          <input type="hidden" name="is_active" id="isActiveHidden" value="1">
        </div>
      </div>

    </form>

    <footer class="modal-card-foot is-justify-content-space-between">
      <button type="submit" class="button is-primary">Save Changes</button>
      <button type="button" class="button is-danger is-light" onclick="deleteJob()">Delete Job</button>
    </footer>
    <!-- applicantsModal -->
  </div>
</div>
<div class="modal" id="applicantsModal">
  <div class="modal-background" onclick="closeApplicantsModal()"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Job Applicants</p>
      <button class="delete" aria-label="close" onclick="closeApplicantsModal()"></button>
    </header>

    <section class="modal-card-body" id="applicantsContent">
      <!-- Example applicant -->
      <article class="media mb-3">
        <figure class="media-left">
          <p class="image is-48x48">
            <img class="is-rounded" src="https://bulma.io/assets/images/placeholders/96x96.png">
          </p>
        </figure>
        <div class="media-content">
          <p><strong>Maria Santos</strong><br><small>09123456789 • High School • House Cleaning</small></p>
          <p class="is-size-7">"I have 2 years of experience and live nearby."</p>
          <div class="buttons mt-2">
            <button class="button is-small is-success" onclick="acceptApplicant(this)">Accept</button>
            <button class="button is-small is-danger" onclick="denyApplicant(this)">Deny</button>
          </div>
        </div>
      </article>


    </section>

    </footer>
  </div>
</div>
<script>
  let isActive = true;

  function openJobModal(title = '', desc = '', type = '', salary = '', active = true) {
    isActive = active;
    document.getElementById("jobModal").classList.add("is-active");

    document.getElementById("editJobTitle").value = title;
    document.getElementById("editJobDescription").value = desc;
    document.getElementById("editJobType").value = type;
    document.getElementById("editJobSalary").value = salary;

    updateToggleUI();
  }

  function toggleStatus() {
    isActive = !isActive;
    updateToggleUI();
  }

  function updateToggleUI() {
    const statusIcon = document.getElementById("statusIcon");
    const statusText = document.getElementById("statusText");
    const hiddenField = document.getElementById("isActiveHidden");

    if (isActive) {
      statusIcon.classList.remove("fa-toggle-off");
      statusIcon.classList.add("fa-toggle-on");
      statusText.textContent = "Set as Active";
      hiddenField.value = "1";
    } else {
      statusIcon.classList.remove("fa-toggle-on");
      statusIcon.classList.add("fa-toggle-off");
      statusText.textContent = "Set as Inactive";
      hiddenField.value = "0";
    }
  }

  function closeJobModal() {
    document.getElementById("jobModal").classList.remove("is-active");
  }

  function deleteJob() {
    if (confirm("Are you sure you want to delete this job?")) {
      alert("Job deleted (simulated).");
      closeJobModal();
    }
  }
  function toggleApplicants() {
    const box = document.getElementById("applicantsBox");
    box.style.display = box.style.display === "none" ? "block" : "none";
  }
  function openApplicantsModal() {
    document.getElementById("applicantsModal").classList.add("is-active");
  }

  function closeApplicantsModal() {
    document.getElementById("applicantsModal").classList.remove("is-active");
  }

  function acceptApplicant(button) {
    alert("Applicant accepted (simulated).");
    button.parentElement.innerHTML = "<span class='has-text-success'><i class='fas fa-check'></i> Accepted</span>";
  }

  function denyApplicant(button) {
    alert("Applicant denied (simulated).");
    button.parentElement.innerHTML = "<span class='has-text-danger'><i class='fas fa-times'></i> Denied</span>";
  }

</script>




<?= $this->include('layouts/footer') ?>