<?php require __DIR__ . '/../Partials/head.pview.php'; ?>

<?php require  __DIR__ . '/../Partials/nav.pview.php'; ?>

<?php require  __DIR__ . '/../Partials/banner.pview.php' ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold tracking-tight text-gray-900">
            Epic Favorite People Add Form!
        </h1>

        <form method="POST">
            <div class="space-y-12">
                <div class="border-gray-900/10">
                    <p class="mt-1 text-sm leading-6 text-gray-600">This information will be displayed publicly so be careful what you share.</p>
                </div>

                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Personal Information</h2>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label for="fName" class="block text-sm font-medium leading-6 text-gray-900">First name</label>
                            <div class="mt-2">
                                <input
                                        type="text"
                                        name="fName"
                                        id="fName"
                                        autocomplete="given-name"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                        value="<?= $_POST['fName'] ?? "" ?>""
                                        required
                                >
                                <?php if(isset($errorMsgs['fName'])) : ?>

                                    <p class="text-red-500 text-xs mt-2"><?= $errorMsgs['fName'] ?></p>

                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="lName" class="block text-sm font-medium leading-6 text-gray-900">Last name</label>
                            <div class="mt-2">
                                <input
                                        type="text"
                                        name="lName"
                                        id="lName"
                                        autocomplete="family-name"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                        value="<?= $_POST['lName'] ?? "" ?>"
                                        required
                                >

                                <?php if(isset($errorMsgs['lName'])) : ?>

                                    <p class="text-red-500 text-xs mt-2"><?= $errorMsgs['lName'] ?></p>

                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="age" class="block text-sm font-medium leading-6 text-gray-900">Age</label>
                            <div class="mt-2">
                                <input
                                        type="number"
                                        name="age"
                                        id="age"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                        value="<?= $_POST['age'] ?? "" ?>"
                                        required
                                />

                                <?php if(isset($errorMsgs['age'])) : ?>

                                    <p class="text-red-500 text-xs mt-2"><?= $errorMsgs['age'] ?></p>

                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="jTitle" class="block text-sm font-medium leading-6 text-gray-900">Job Title</label>
                            <div class="mt-2">
                                <input
                                        type="text"
                                        name="jTitle"
                                        id="jTitle"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                        value="<?= $_POST['jTitle'] ?? '' ?>"
                                >

                                <?php if(isset($errorMsgs['jTitle'])) : ?>

                                    <p class="text-red-500 text-xs mt-2"><?= $errorMsgs['jTitle'] ?></p>

                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/people" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
        </form>
    </div>
</main>

<?php require( __DIR__ . '/../Partials/footer.pview.php') ?>
