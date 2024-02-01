<?= $this->extend('default') ?>

<?= $this->section('content') ?>
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">


    <ul role="list"
        class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        <?php
        foreach ($entries as $entry) {
            ?>
            <li class="col-span-1 divide-y divide-gray-200 rounded-lg bg-white shadow">
                <div class="flex w-full items-center justify-between space-x-6 p-6">
                    <div class="flex-1 truncate">
                        <div class="flex items-center space-x-3">
                            <h3 class="truncate text-sm font-medium text-gray-900"><?php echo $entry->API ?></h3>
                            <span class="inline-flex flex-shrink-0 items-center rounded-full bg-indigo-50 px-1.5 py-0.5
                        text-xs font-medium text-indigo-700 ring-1 ring-inset ring-indigo-600/20"><?php echo
                                $entry->Category
                                ?></span>
                        </div>
                        <p class="mt-1 truncate text-sm text-gray-500"><?php echo $entry->Description ?></p>
                    </div>
                    <img class="h-10 w-10 flex-shrink-0 rounded-full bg-gray-300"
                         src="/images/api-logo.png"
                         alt="">
                </div>
                <div>
                    <div class="-mt-px flex divide-x divide-gray-200">
                        <div class="flex w-0 flex-1">
                            <p class="relative inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-br-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                <?php if ($entry->HTTPS): ?>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         fill="none"
                                         viewBox="0 0 24 24"
                                         stroke-width="1.5"
                                         stroke="green"
                                         class="w-6 h-6">
                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                    </svg>
                                <?php else: ?>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         fill="none"
                                         viewBox="0 0 24 24"
                                         stroke-width="1.5"
                                         stroke="red"
                                         class="w-6 h-6">
                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              d="M15 12H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                    </svg>
                                <?php endif ?>
                                HTTPS
                            </p>
                        </div>
                        <div class="-ml-px flex w-0 flex-1">
                            <a href="<?php echo $entry->Link ?>"
                               target="_blank"
                               class="relative inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-br-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     fill="none"
                                     viewBox="0 0 24 24"
                                     stroke-width="1.5"
                                     stroke="currentColor"
                                     class="w-6 h-6">
                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"/>
                                </svg>
                                Link
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <?php
        }
        ?>
    </ul>

</div>
<?= $this->endSection() ?>
