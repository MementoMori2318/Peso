<footer class="footer">
  <div class="content has-text-centered">
    <p>
      <strong>PESO</strong> by Your Organization. © <?= date('Y') ?>. All rights reserved.
    </p>
  </div>
</footer>

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
