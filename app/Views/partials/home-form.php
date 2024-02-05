<div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8 mb-20 border-2 rounded p-4 ">
    <label for="category"
           class="block text-sm font-medium leading-6 text-gray-900">Categories</label>
    <form class="mt-2 w-full flex"
          method="get">
        <select id="category"
                name="category"
                autocomplete="category-name"
                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset
                ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600  sm:text-sm sm:leading-6 p-4">
            <option value="all">All
            </option>
            <?php foreach ($categories as $category) : ?>
                <option value="<?= strtok($category, ' ') ?>"><?= $category ?></option>
            <?php endforeach; ?>
        </select>

        <button type="submit"
                class="px-4 py-2 rounded bg-indigo-400 text-white font-semibold text-sm ml-4">Filtrar
        </button>

    </form>
</div>


