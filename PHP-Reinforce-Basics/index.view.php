<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Test</title>
    </head>
    <body>
        <h1>
            Welcome to my test page!
        </h1>

        <h2>
            Let me greet two people!
        </h2>

        <p>
            <?= greetPerson($supGreet, $personName) ?>
        </p>
        <p>
            <?= greetPerson($helloGreet, $world); ?>
        </p>

        <h2>
            Now I will proceed with a list of my favorite people!
        </h2>

        <ul>
            <?php foreach ($favoritePeopleList as $favPerson) : ?>

                <li>
                    <?= $favPerson ?>
                </li>

            <?php endforeach; ?>
        </ul>

        <h2>
            That's no fun. We need to know about my favorite people!
            Let's try again.
        </h2>

        <ul>
            <?php foreach ($favPeopleWDetailsList as $favPersonDetailed) : ?>

                <li>
                    <?= $favPersonDetailed["name"] ?> -
                    <?= "{$favPersonDetailed["age"]} years old" ?> -
                    <?= $favPersonDetailed["gender"] ?> -
                    <?= $favPersonDetailed["job"] ?>
                </li>

            <?php endforeach; ?>
        </ul>

        <h2>
            Let's count to 10!
        </h2>

        <ul>
            <?php for($i = 0; $i <= 10; $i++) : ?>

                <li>
                    <?= $i ?>
                </li>

            <?php endfor; ?>
        </ul>
    </body>
</html>