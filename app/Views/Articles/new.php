<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>New Article
<?= $this->endSection() ?>

<?= $this->section("content") ?>
<div class="container">

  <h1 class="display-1 ">Create Article</h1>
  <div class="row justify-content-center">

    <?= form_open("articles") ?>
    <?= $this->include("Articles/form") ?>

    </form>


  </div>
  <?= $this->endSection() ?>