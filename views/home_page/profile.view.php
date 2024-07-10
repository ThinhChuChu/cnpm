<?php require 'nav.php' ?>
<div class="container mx-auto my-5 p-5">
    <!-- about  -->
    <div class="md:flex no-wrap -mx-2 ">
        <div class="bg-white p-3 shadow-sm rounded-sm">
            <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                <span clas="text-green-500">
                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </span>
                <span class="tracking-wide">About</span>
            </div>
            <div class="text-gray-700 flex">
                <div class="grid md:grid-cols-2 text-sm">
                    <div class="grid grid-cols-2">
                        <div class="px-4 py-2 font-semibold">Full Name</div>
                        <div class="px-4 py-2"><?= $user['full_name'] ?></div>
                    </div>
                    <div class="grid grid-cols-2">
                        <div class="px-4 py-2 font-semibold">Email</div>
                        <div class="px-4 py-2"><?= $user['email'] ?></div>
                    </div>
                    <div class="grid grid-cols-2">
                        <div class="px-4 py-2 font-semibold">Phone number</div>
                        <div class="px-4 py-2"><?= $user['phone_number'] ?></div>
                    </div>
                    <div class="grid grid-cols-2">
                        <div class="px-4 py-2 font-semibold">Address</div>
                        <div class="px-4 py-2"><?= $user['address'] ?></div>
                    </div>
                </div>
                <div class="flex ml-5 items-center ">
                    <a x-data="{ tooltip: 'Edite' }" href="users/edit?id=<?= $user['id'] ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-8 w-8 border-3 rounded-lg " x-tooltip="tooltip">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- bookiing list -->
    <div class="bg-white p-3 shadow-sm rounded-sm w-1/2 -mx-2   ">

        <div class="">
            <div>
                <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                    <span clas="text-green-500">
                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </span>
                    <span class="tracking-wide">Booked tour</span>
                </div>
                <ul class="list-inside space-y-2">
                    <?php foreach ($booked_tours as $book) : ?>
                        <li>
                            <div class="flex items-center ">
                                <div class="">
                                    <div class="text-teal-600 text-lg"><?= $book['name'] ?></div>
                                    <div class="text-gray-500 text-xs">Thời gian: <?= $book['start_date'] ?></div>
                                    <div class="text-gray-500 text-xs">Địa điểm: <?= $book['location'] ?></div>
                                </div>
                                <div class="ml-auto flex <?= ($book['status'] === 'done' ? 'text-green-500' : 'text-gray-500') ?>">
                                    <?= $book['status'] ?>
                                    <form class="block" method="POST" action="/profile">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="id" value="<?= $book['id'] ?>">
                                        <button type="submit" class="text-red-500 mr-auto">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>
    </div>