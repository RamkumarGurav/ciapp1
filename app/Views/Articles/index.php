<?= $this->extend("layouts/default") ?>


<?= $this->section("title") ?>Articles
<?= $this->endSection() ?>


<?= $this->section("content") ?>
<h1 class="text-red-400 text-center font-bold">Acticles</h1>

<?php foreach ($articles as $article): ?>
  <article>
    <h1 class="text-lg font-bold"><a href="<?= site_url('/articles/' . $article->id) ?>">
        <?= esc($article->title) ?>
      </a></h1>
    <p class="text-gray-700 font-semibold">
      <?= esc($article->content) ?>
    </p>
  </article>
<?php endforeach; ?>

<?= $this->endSection() ?>