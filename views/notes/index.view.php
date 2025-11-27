<?php require base_path('views/partials/head.view.php') ?>
<?php require base_path('views/partials/nav.view.php') ?>
<?php require base_path('views/partials/banner.view.php') ?>

<main class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
  <ul class="divide-y divide-white/5 mb-6">
    <?php foreach ($notes as $note) : ?>
      <li class="flex justify-between gap-x-6">
        <a class="flex w-full py-4 px-4 text-sm/6 font-semibold hover:bg-gray-800/50 text-white duration-150 cursor-pointer" href="/note?id=<?= $note['id'] ?>">
          <?= htmlspecialchars($note['body']) ?>
        </a>
      </li>
    <?php endforeach ?>
  </ul>

  <p>
    <a class="flex items-center w-max text-sm font-medium duration-150 ml-auto bg-gray-800 border border-gray-800 hover:bg-gray-800/50 py-3 px-4 leading-none rounded-md text-white" href="/notes/create">
      Create
    </a>
  </p>
</main>

<?php require base_path('views/partials/footer.view.php') ?>