<?php require base_path('view/partials/head.php'); ?>
<?php require base_path('view/partials/nav.php'); ?>
<?php require base_path('view/partials/banner.php'); ?>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <p class="text-sm font-medium text-white">
                    <?= htmlspecialchars($note['title']) ?> 
                </p>              
                <footer class="mt-6">
                    <a href="/note/edit?id=<?= $note['id'] ?>" class="text-gray-500 border border-current px-3 py-1">Edit</a>
                </footer>
                


                
            </div>
        </main>
        </div>

</body>
</html>