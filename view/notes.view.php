    <?php require 'partials/head.php'; ?>
    <?php require 'partials/nav.php'; ?>
    <?php require 'partials/banner.php'; ?>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <p class="text-sm font-medium text-white">Welcome to Notes Page</p>
                <?php foreach($notes as $note) : ?>
                    <li class="text-sm font-medium text-white">
                        <a href="<?= BASE_URL ?>/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                            <?= $note['title'] ?>
                        </a>    
                    </li>
                <?php endforeach; ?>
                <br>
                <p class="text-m font-medium text-white">
                    <a href="<?= BASE_URL ?>/notes/create" class="text-blue-500 hover:underline">
                        Create a new note
                    </a>
                </p>
            </div>
        </main>
        </div>

</body>
</html>