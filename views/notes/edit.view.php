<?php require base_path('views/partials/head.view.php') ?>
<?php require base_path('views/partials/nav.view.php') ?>
<?php require base_path('views/partials/banner.view.php') ?>

<main class="px-10">
  <form method="POST" action="/notes/edit">
    <input type="hidden" name="_method" value="PATCH">
    <input type="hidden" name="id" value="<?= $note['id'] ?>">

    <div class="space-y-12">
      <div class="border-b border-white/10 pb-12">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="col-span-full">
            <label for="body" class="block text-sm/6 font-medium text-white">Description</label>
            <div class="mt-2">
              <textarea
                id="body"
                name="body"
                rows="3"
                class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"><?= htmlspecialchars($note['body']) ?? '' ?></textarea>
            </div>
            <p class="mt-3 text-sm/6 text-red-400"><?= $errors['body'] ?? '' ?></p>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
      <a href="/notes" class="text-sm/6 font-semibold text-white">Cancel</a>
      <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
        Update
      </button>
    </div>
  </form>

  <p>
    <a class="text-blue-500 hover:underline" href="/notes">
      All notes
    </a>
  </p>
</main>

<?php require base_path('views/partials/footer.view.php') ?>