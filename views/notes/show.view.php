<?php require base_path('views/partials/head.view.php') ?>
<?php require base_path('views/partials/nav.view.php') ?>
<?php require base_path('views/partials/banner.view.php') ?>

<main class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
  <div class="flex w-full py-4 text-sm/6 font-semibold text-white border-b border-white/10 mb-6">
    <?= htmlspecialchars($note['body']) ?>
  </div>

  <div class="flex justify-end items-center gap-x-2">
    <a class="text-sm font-medium px-2" href="/notes">
      Cancel
    </a>

    <form method="POST" action="/notes">
      <input type="hidden" name="_method" value="DELETE">
      <input type="hidden" name="id" value="<?= $note['id'] ?>">

      <button class="flex items-center w-max text-sm font-medium duration-150 bg-gray-800 border border-gray-800 hover:bg-gray-800/50 py-3 px-4 leading-none rounded-md text-white" type="submit">
        Delete
      </button>
    </form>

    <a class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500" href="/notes/edit?id=<?= $note['id'] ?>">
      Edit
    </a>
  </div>
</main>

<?php require base_path('views/partials/footer.view.php') ?>