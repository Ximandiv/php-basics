<?php require base_path('/Views/Partials/head.pview.php'); ?>

<?php require base_path('/Views/Partials/nav.pview.php'); ?>

<?php require base_path('/Views/Partials/banner.pview.php'); ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold tracking-tight text-gray-900">
            Let's see directly from the database who are my favorite people!
        </h1>

        <?php require base_path("/Views/Favorite-People/Partials/index-table.view.php"); ?>

        <p class="mt-6 mb-6">
            <a href="/people/create" class="text-blue-500 hover:underline">
                Add new Person
            </a>
        </p>

        <h1 class="text-2xl font-bold tracking-tight text-gray-900">
            Now my favorite person!
        </h1>

        <p> <?= "{$favPerson['FirstName']} {$favPerson['LastName']} - {$favPerson['Age']} years old - {$favPerson['JobTitle']}" ?> </p>
    </div>
</main>

<?php require base_path('/Views/Partials/footer.pview.php') ?>
