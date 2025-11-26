<?php require base_path('views/partials/head.view.php') ?>
<?php require base_path('views/partials/nav.view.php') ?>
<?php require base_path('views/partials/banner.view.php') ?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <p class="text-white">
      <?= $note['body'] ?>
    </p>

    <p>
      <a class="text-blue-500" href="/notes">All notes</a>
    </p>

    <form method="POST" action="/notes">
      <input type="hidden" name="_method" value="DELETE">
      <input type="hidden" name="id" value="<?= $note['id'] ?>">

      <button class="text-red-400" type="submit">
        Delete note
      </button>
    </form>
  </div>
</main>

<?php require base_path('views/partials/footer.view.php') ?>