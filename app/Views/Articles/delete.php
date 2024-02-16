<?= $this->extend("layouts/default") ?>


<?= $this->section("title") ?>Delete Article
<?= $this->endSection() ?>


<?= $this->section("content") ?>
<h1 class="text-red-400 text-center font-bold">Delete Article</h1>

<div>
  <h1 class="text-lg font-bold">
    Are you sure?
  </h1>

  <?= form_open("articles/" . $article->id) ?>
  <input type="hidden" name="_method" value="delete">
  <button type="submit" class="btn btn-danger">Yes</button>
  </form>

</div>

<?= $this->endSection() ?>