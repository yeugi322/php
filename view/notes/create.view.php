<?php require base_path('view/partials/head.php'); ?>
<?php require base_path('view/partials/nav.php'); ?>
<?php require base_path('view/partials/banner.php'); ?>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <p class="text-sm font-medium text-white">Welcome to Create Notes Page</p>
                <form method="POST" action="/notes/create">
                    <label for="title" class="text-sm font-medium text-white">Note</label>
                    <div>
                        <?php if(isset($errors['title'])) : ?>
                            <p class="text-sm font-medium text-red-300"><?= $errors['title'] ?></p>
                        <?php endif; ?>
                         <input
                                        id="title"
                                        name="title"
                                        rows="3"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="Here's an idea for a note..."
                                    ><?= $_POST['title'] ?? '' ?></input>
                        <button type="submit" class="text-sm font-medium text-white">Submit</button>
                    </div>
                    
                </form>   
            </div>
        </main>
        </div>

</body>
</html>