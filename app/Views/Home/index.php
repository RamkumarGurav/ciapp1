<?= $this->extend("layouts/default") ?>


<?= $this->section("title") ?>Home
<?= $this->endSection() ?>

<?= $this->section("content") ?>
<h1 class="text-red-400 text-center font-bold hover:text-black">Welcome Home</h1>

<?php if (auth()->loggedIn()): ?>
  <a href="<?= site_url("/logout") ?>" class="btn btn-primary">Logout</a>

<?php else: ?>
  <a href="<?= site_url("/login") ?>" class="btn btn-primary">Login</a>
  <a href="<?= site_url("/register") ?>" class="btn btn-primary">Register</a>
<?php endif; ?>

<?= $this->endSection() ?>