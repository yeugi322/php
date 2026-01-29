<?php require base_path('view/partials/head.php'); ?>
<?php require base_path('view/partials/nav.php'); ?>
<?php require base_path('view/partials/banner.php'); ?>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <p class="text-sm font-medium text-white">Welcome to Notes Page</p>
                <?php foreach($notes as $note) : ?>
                    <li class="text-sm font-medium text-white">
                        <a href="<?= url('/note?id=' . $note['id']) ?>" class="text-blue-500 hover:underline">
                            <?= $note['title'] ?>
                        </a>    
                    </li>
                <?php endforeach; ?>
                <br>
                <p class="text-m font-medium text-white">
                    <a href="<?= url('/notes/create') ?>" class="text-blue-500 hover:underline">
                        Create a new note
                    </a>
                </p>
            </div>
        </main>
        </div>

</body>
</html>