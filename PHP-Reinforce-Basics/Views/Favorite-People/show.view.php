<?php require base_path('/Views/Partials/head.pview.php'); ?>

<?php require base_path('/Views/Partials/nav.pview.php'); ?>

<?php require base_path('/Views/Partials/banner.pview.php'); ?>

<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <div class="px-4 sm:px-0">
        <h3 class="text-xl font-semibold leading-7 text-gray-900">Epic Person</h3>
        <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Personal details!</p>
    </div>
    <div class="mt-6 border-t border-black">
        <dl class="divide-y divide-gray-100">
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-sm font-medium leading-6 text-gray-900">Full name</dt>
                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                    <?= "{$person['FirstName']} {$person['LastName']}" ?>
                </dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-sm font-medium leading-6 text-gray-900">Age</dt>
                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                    <?= $person['Age'] ?>
                </dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-sm font-medium leading-6 text-gray-900">Job Title</dt>
                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                    <?= $person['JobTitle'] ?>
                </dd>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-sm font-medium leading-6 text-gray-900">About</dt>
                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                    <?= $person['About'] ?>
                </dd>
            </div>
        </dl>
    </div>
    <div class="flex mt-3">
        <a href="/people/list" class="ml-3 px-2 py-1 text-black-500 bg-slate-300 hover:bg-slate-400 border rounded-md">Back</a>
        <form class="ml-3" method="POST">
            <input type="hidden" name="_method" value="DELETE"/>
            <input type="hidden" name="ID" value="<?= $person['ID'] ?>"/>
            <button class="px-2 py-1 text-red-200 bg-stone-500 hover:bg-stone-900 border rounded-md ">Delete</button>
        </form>
    </div>
</div>

<?php require base_path('/Views/Partials/footer.pview.php') ?>