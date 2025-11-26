<?php require base_path('views/partials/head.view.php') ?>
<?php require base_path('views/partials/nav.view.php') ?>
<?php require base_path('views/partials/banner.view.php') ?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <ul>
      <?php foreach ($notes as $note) : ?>
        <li>
          <a class="text-blue-500 hover:underline" href="/note?id=<?= $note['id'] ?>">
            <?= $note['body'] ?>
          </a>
        </li>
      <?php endforeach ?>
    </ul>

    <p>
      <a class="flex items-center w-max text-sm font-semibold bg-green-400 mt-4 py-1 px-2 rounded text-white" href="/notes/create">
        Create a note
      </a>
    </p>
  </div>
</main>

<?php require base_path('views/partials/footer.view.php') ?>