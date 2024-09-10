<?php require base_path('/Views/Partials/head.pview.php'); ?>

<?php require base_path('/Views/Partials/nav.pview.php'); ?>

<?php require base_path('/Views/Partials/banner.pview.php'); ?>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1>
                Welcome to my test page!
            </h1> <br /> <br />

            <h2>
                Let me greet two people!
            </h2> <br /> <br />

            <p>
                <?= $supGreet() . ' ' . $personName() ?>
            </p> <br />
            <p>
                <?= $helloGreet() . ' ' . $world() ?>
            </p> <br /> <br />

            <h2>
                Now I will proceed with a list of my favorite people!
            </h2> <br /> <br />

            <ul>
                <?php foreach ($favoritePeopleList as $favPerson) : ?>

                    <li>
                        - <?= $favPerson ?>
                    </li>

                <?php endforeach; ?>
            </ul> <br /> <br />

            <h2>
                That's no fun. We need to know about my favorite people!
                Let's try again.
            </h2> <br /> <br />

            <ul>
                <?php foreach ($favPeopleWDetailsList as $favPersonDetailed) : ?>

                    <li>
                        - <?= $favPersonDetailed["name"] ?> -
                        <?= "{$favPersonDetailed["age"]} years old" ?> -
                        <?= $favPersonDetailed["gender"] ?> -
                        <?= $favPersonDetailed["job"] ?>
                    </li>

                <?php endforeach; ?>
            </ul> <br /> <br />

            <h2>
                Let's count to 10!
            </h2> <br /> <br />

            <ul>
                <?php for($i = 0; $i <= 10; $i++) : ?>

                    <li>
                        - <?= $i ?>
                    </li>

                <?php endfor; ?>
            </ul>
        </div>
    </main>

<?php require base_path('/Views/Partials/footer.pview.php') ?>
