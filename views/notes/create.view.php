<?php require base_path('views/partials/head.view.php') ?>
<?php require base_path('views/partials/nav.view.php') ?>
<?php require base_path('views/partials/banner.view.php') ?>

<main class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
  <form method="POST" action="/notes/create">
    <div class="space-y-12">
      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="col-span-full">
          <label for="body" class="block text-sm/6 font-medium text-white">Description</label>
          <div class="mt-2">
            <textarea
              id="body"
              name="body"
              rows="3"
              class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"><?= $_POST['body'] ?? '' ?></textarea>
          </div>
          <p class="mt-3 text-sm/6 text-red-400"><?= $errors['body'] ?? '' ?></p>
        </div>
      </div>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
      <a class="text-sm/6 font-semibold text-white" href="/notes">
        Cancel
      </a>
      <button class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500" type="submit">
        Save
      </button>
    </div>
  </form>
</main>

<?php require base_path('views/partials/footer.view.php') ?>