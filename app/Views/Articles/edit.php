<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Edit Article
<?= $this->endSection() ?>

<?= $this->section("content") ?>
<div class="container">

  <h1 class="display-1 ">Edit Article</h1>
  <div class="row justify-content-center">

    <?= form_open("articles/" . $article->id) ?>
    <input type="hidden" name="_method" value="patch">
    <?= $this->include("Articles/form") ?>
    </form>

  </div>
</div>
<?= $this->endSection() ?>