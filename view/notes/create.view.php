<?php require base_path('view/partials/head.php'); ?>
<?php require base_path('view/partials/nav.php'); ?>
<?php require base_path('view/partials/banner.php'); ?>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <p class="text-sm font-medium text-white">Welcome to Create Notes Page</p>
                <form method="POST">
                    <label for="title" class="text-sm font-medium text-white">Note</label>
                    <div>
                        <?php if(isset($errors['title'])) : ?>
                            <p class="text-sm font-medium text-red-300"><?= $errors['title'] ?></p>
                        <?php endif; ?>
                        <textarea name="title" id="title"></textarea>
                        <button type="submit" class="text-sm font-medium text-white">Submit</button>
                    </div>
                    
                </form>   
            </div>
        </main>
        </div>

</body>
</html>