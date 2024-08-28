<?php require 'Partials/head.pview.php'; ?>

<?php require 'Partials/nav.pview.php'; ?>

<?php require 'Partials/banner.pview.php'?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold tracking-tight text-gray-900">
            Let's see directly from the database who are my favorite people!
        </h1>

        <ul>
            <?php foreach($favPeople as $person): ?>

                <li>
                    <?= "{$person['FirstName']} {$person['LastName']} - {$person['Age']} years old - {$person['JobTitle']}" ?>
                </li>

            <?php endforeach ?>
        </ul> <br />

        <h1 class="text-2xl font-bold tracking-tight text-gray-900">
            Now my favorite person!
        </h1>

        <p> <?= "{$favPerson['FirstName']} {$favPerson['LastName']} - {$favPerson['Age']} years old - {$favPerson['JobTitle']}" ?> </p>
    </div>
</main>
