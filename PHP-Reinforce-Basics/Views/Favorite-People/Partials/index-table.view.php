<table class="min-w-full mt-6 table-auto border-collapse border">
    <thead>
    <tr class="bg-gray-100 text-center">
        <th class="border px-4 py-2">First Name</th>
        <th class="border px-4 py-2">Last Name</th>
        <th class="border px-4 py-2">Age</th>
        <th class="border px-4 py-2">Job Title</th>
        <th class="border px-4 py-2">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($favPeople as $person): ?>
        <tr class="hover:bg-gray-50 text-center">
            <td class="border px-4 py-2"><?= $person['FirstName'] ?></td>
            <td class="border px-4 py-2"><?= $person['LastName'] ?></td>
            <td class="border px-4 py-2"><?= $person['Age'] ?> years old</td>
            <td class="border px-4 py-2"><?= $person['JobTitle'] ?></td>
            <td class="border px-4 py-2 flex flex-row align-middle justify-center">
                <a href="/people?ID=<?= $person['ID'] ?>" class="px-2 py-1 text-white bg-emerald-950 hover:bg-emerald-800 border rounded-md">Details</a>
                <a href="" class="ml-3 px-2 py-1 text-black-500 bg-slate-300 hover:bg-slate-400 border rounded-md">Update</a>
                <form class="ml-3" method="POST">
                    <input type="hidden" name="_method" value="DELETE"/>
                    <input type="hidden" name="ID" value="<?= $person['ID'] ?>"/>
                    <button class="px-2 py-1 text-red-200 bg-stone-500 hover:bg-stone-900 border rounded-md ">Delete</button>
                </form>
            </td>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>