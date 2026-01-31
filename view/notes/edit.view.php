<?php require base_path('view/partials/head.php'); ?>
<?php require base_path('view/partials/nav.php'); ?>
<?php require base_path('view/partials/banner.php'); ?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <p class="text-sm font-medium text-white">Welcome to Create Notes Page</p>
        <form method="POST" action="/note">
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">
            <label for="title" class="text-sm font-medium text-white">Note</label>
            <div class="justify-end">
                <?php if (isset($errors['title'])) : ?>
                    <p class="text-sm font-medium text-red-300"><?= $errors['title'] ?></p>
                <?php endif; ?>
                <textarea name="title"><?= htmlspecialchars($note['title']) ?></textarea>
                <a href="/notes" class="text-sm font-medium text-white border border-transparent bg-gray-500">Cancel</a>
                <button type="submit" class="text-sm font-medium text-white">Update</button>

                <!-- <form class="mt-6" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="id" value="<?= $note['id'] ?>">
                    <button class="text-sm text-red-100">delete</button>
                </form> -->

            </div>

        </form>
    </div>
</main>
</div>

</body>

</html>