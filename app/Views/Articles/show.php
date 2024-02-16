<?= $this->extend("layouts/default") ?>


<?= $this->section("title") ?>Single Article
<?= $this->endSection() ?>


<?= $this->section("content") ?>
<h1 class="text-red-400 text-center font-bold">Article Details</h1>

<article>
  <h1 class="text-lg font-bold">
    <?= esc($article->title) ?>
  </h1>
  <p class="text-gray-700 font-semibold">
    <?= esc($article->content) ?>
  </p>
  <a href="<?= url_to("Articles::edit", $article->id) ?>" class="btn btn-warning">edit</a>
  <!-- 
  <a href="<?= site_url("articles/{$article->id}/edit") ?>" class="btn btn-warning">edit</a> -->
  <a href="<?= url_to("Articles::confirmDelete", $article->id) ?>" class="btn btn-warning">delete</a>
</article>

<?= $this->endSection() ?>