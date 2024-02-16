<div class="mb-3">
  <label for="title" class="form-label">Title</label>
  <input type="text" name="title" class="form-control" id="title" value="<?= old("title", esc($article->title)) ?>"
    placeholder="Enter Title">
  <?php if (session()->has("errors")): ?>
    <p class="text-danger">
      <?= session("errors")["title"] ?? "" ?>
    </p>

  <?php endif; ?>
</div>
<div class="mb-3">
  <label for="content" class="form-label">Content</label>
  <textarea class="form-control" id="content" name="content" rows="3"
    placeholder="Enter content"><?= old("content", esc($article->content)) ?></textarea>
  <?php if (session()->has("errors")): ?>
    <p class="text-danger">
      <?= session("errors")["content"] ?? "" ?>
    </p>
  <?php endif; ?>
</div>

<button class="btn btn-primary" type="submit">submit</button>