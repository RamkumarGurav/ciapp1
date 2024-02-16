<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= site_url() ?>">Dashboard</a>
    <div class="d-flex gap-2 ">
      <a class="navbar-brand" href="<?= site_url() ?>">Home</a>
      <a class="navbar-brand" href="<?= site_url('/articles') ?>">Articles</a>
      <a class="navbar-brand" href="<?= url_to("new_article") ?>">
        <?= "+New" ?>
      </a>
    </div>

  </div>
</nav>