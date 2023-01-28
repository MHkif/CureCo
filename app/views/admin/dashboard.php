<div class="flex justify-between items-center md:pb-10">
    <h1 class="text-2xl font-semibold leading-relaxed text-gray-800 p-4" style="font-family: 'Poppins', sans-serif;">Statistics</h1>

    <section class="hidden sm:flex gap-4" id='searchBar'>

        <div>
            <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-green-100 border border-green-300 rounded hover:bg-green-200 focus:ring-2 focus:outline-none focus:ring-green-400 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800" type="button">Sort <svg aria-hidden="true" class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-green-400 rounded shadow w-44 ">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                    <li>
                        <a href="<?php echo URLROOT ?>/admin/sortDarshboard/0" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">ASC Price</a>

                    </li>
                    <li>
                        <a href="<?php echo URLROOT ?>/admin/sortDarshboard/1" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">DESC Price</a>

                    </li>
                    <li>
                        <a href="<?php echo URLROOT ?>/admin/sortDarshboard/2" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">ASC Date</a>

                    </li>
                    <li>
                        <a href="<?php echo URLROOT ?>/admin/sortDarshboard/3" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">DESC Date</a>
                    </li>

                </ul>
            </div>
        </div>
        <form class="container-fluid " action="<?php echo URLROOT ?>/admin/searchDashboard" method="POST">
            <div class="relative w-full">
                <input type="search" id="search-dropdown" name="searched" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded  border border-green-300 focus:ring-green-200 focus:border-green-200  " placeholder="Search" required>
                <button type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-green-400 rounded-r border border-green-300 hover:bg-green-500 focus:ring-2 focus:outline-none focus:ring-green-400"><svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg></button>
            </div>
        </form>
    </section>
</div>

<section class="flex pb-10 px-1 sm:hidden gap-4" id='searchBar'>
    <div>
        <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-green-100 border border-green-300 rounded hover:bg-green-200 focus:ring-2 focus:outline-none focus:ring-green-400 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800" type="button">Sort <svg aria-hidden="true" class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>
        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-green-400 rounded shadow w-44 ">
            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                <li>
                    <a href="<?php echo URLROOT ?>/admin/sortDarshboard/0" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">ASC Price</a>

                </li>
                <li>
                    <a href="<?php echo URLROOT ?>/admin/sortDarshboard/1" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">DESC Price</a>

                </li>
                <li>
                    <a href="<?php echo URLROOT ?>/admin/sortDarshboard/2" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">ASC Date</a>

                </li>
                <li>
                    <a href="<?php echo URLROOT ?>/admin/sortDarshboard/3" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">DESC Date</a>
                </li>

            </ul>
        </div>
    </div>

    <form class="container-fluid w-full" action="<?php echo URLROOT ?>/admin/searchDashboard" method="POST">
        <div class="relative w-full">
            <input type="search" id="search-dropdown" name="searched" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded  border border-green-300 focus:ring-green-200 focus:border-green-200  " placeholder="Search" required>
            <button type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-green-400 rounded-r border border-green-300 hover:bg-green-500 focus:ring-2 focus:outline-none focus:ring-green-400"><svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg></button>
        </div>
    </form>
</section>

<!-- Statistics -->
<div class="grid grid-cols-1 gap-8 mb-8 sm:grid-cols-2 items-start  md:grid-cols-3 lg:grid-cols-4">


    <div class="container mx-auto">
        <div class="w-full bg-white  border-b-4 border-red-500 max-w-md mx-auto rounded-lg overflow-hidden shadow-xl hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer">
            <div class="h-14 bg-red-500 flex items-center justify-between">
                <p class="mx-auto text-white text-lg ">Medicines</p>
            </div>
            <div class="flex justify-between px-5 pt-4 mb-2 text-sm text-gray-600">
                <p>TOTAL</p>
            </div>
            <p class="py-3 text-3xl ml-5">20,456</p>
            <!-- <hr > -->
        </div>
    </div>

    <div class="container mx-auto">
        <div class="w-full bg-white  border-b-4 border-green-500 max-w-md mx-auto rounded-lg overflow-hidden shadow-xl hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer">
            <div class="h-14 bg-green-500 flex items-center justify-between">
                <p class="mx-auto text-white text-lg ">Customers</p>
            </div>
            <div class="flex justify-between px-5 pt-4 mb-2 text-sm text-gray-600">
                <p>TOTAL</p>
            </div>
            <p class="py-3 text-3xl ml-5">56</p>
            <!-- <hr > -->
        </div>
    </div>

    <div class="container mx-auto">
        <div class="w-full bg-white border-b-4 border-blue-500 max-w-md mx-auto rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer">
            <div class="h-14 bg-blue-500 flex items-center justify-between">
                <p class="mx-auto text-white text-lg pl-5">Total Sales</p>
            </div>
            <div class="flex justify-between px-5 pt-4 mb-2 text-sm text-gray-600">
                <p>TOTAL</p>
            </div>
            <p class="py-3 text-3xl ml-5">19,694</p>
            <!-- <hr > -->
        </div>
    </div>

    <div class="container mx-auto">
        <div class="w-full bg-white  border-b-4 border-orange-500 max-w-md mx-auto rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer">
            <div class="h-14 bg-orange-500 flex items-center justify-between">
                <p class="mx-auto text-white text-lg pl-5">Total Profit</p>
            </div>
            <div class="flex justify-between pt-4 px-5 mb-2 text-sm text-gray-600">
                <p>TOTAL</p>
            </div>
            <p class="py-3 text-3xl ml-5">711</p>
            <!-- <hr > -->
        </div>
    </div>

</div>


<!-- Available Medicines -->
<section class="container mx-auto  font-mono" style="font-family: 'Poppins', sans-serif;">
    <h1 class="text-2xl font-semibold leading-relaxed text-gray-800 p-4">Available Medicines (<?php echo $params['availableCount']; ?>)</h1>

    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
        <div class="w-full overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="text-sm font-semibold tracking-wide text-left text-white bg-green-500 rounded uppercase border-b border-gray-600">
                        <th class="py-4 px-6 ">Image</th>
                        <th class="py-4 px-6 ">Name</th>
                        <th class="py-4 px-6 ">Price</th>
                        <th class="py-4 px-6 ">Category</th>
                        <th class="py-4 px-6 ">Created</th>
                        <th class="py-4 px-6  ">Expired</th>


                    </tr>
                </thead>
                <tbody class="bg-white">
                    <?php foreach ($params['available_medicines'] as $medicine) : ?>
                        <tr class="text-gray-700">
                            <td class="px-4 py-3 border">
                                <div class="flex items-center text-sm">
                                    <div class="relative w-14 h-14 mr-3  md:block">
                                        <img class="object-contain w-full h-full" src="<?php echo URLROOT . "/uploads/medicine/" . $medicine->image ?>" alt="" loading="lazy" />

                                    </div>

                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm font-semibold border"><?php echo  $medicine->name ?></td>

                            <td class="px-4 py-3 text-sm font-semibold border"><?php echo  $medicine->price ?></td>
                            <td class="px-4 py-3 text-sm font-semibold border"><?php echo  $medicine->category_name ?></td>

                            <td class="px-4 py-3 text-sm border"><?php echo  $medicine->created_date ?></td>
                            <td class="px-4 py-3 text-sm border"><?php echo  $medicine->expired_date ?></td>
                        </tr>
                    <?php endforeach ?>

                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Expired Medicines -->
<section class="container mx-auto  font-mono" style="font-family: 'Poppins', sans-serif;">
    <h1 class="text-2xl font-semibold leading-relaxed text-gray-800 p-4">Expired Medicines (<?php echo $params['expiredCount']; ?>)</h1>

    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
        <div class="w-full overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="text-sm font-semibold tracking-wide text-left text-white bg-green-500 rounded uppercase border-b border-gray-600">
                        <th class="py-4 px-6 ">Image</th>
                        <th class="py-4 px-6 ">Name</th>
                        <th class="py-4 px-6 ">Price</th>
                        <th class="py-4 px-6 ">Category</th>
                        <th class="py-4 px-6 ">Created</th>
                        <th class="py-4 px-6  ">Expired</th>


                    </tr>
                </thead>
                <tbody class="bg-white">
                    <?php foreach ($params['expired_medicines'] as $medicine) : ?>
                        <tr class="text-gray-700">
                            <td class="px-4 py-3 border">
                                <div class="flex items-center text-sm">
                                    <div class="relative w-14 h-14 mr-3  md:block">
                                        <img class="object-contain w-full h-full" src="<?php echo URLROOT . "/uploads/medicine/" . $medicine->image ?>" alt="" loading="lazy" />

                                    </div>

                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm font-semibold border"><?php echo  $medicine->name ?></td>

                            <td class="px-4 py-3 text-sm font-semibold border"><?php echo  $medicine->price ?></td>
                            <td class="px-4 py-3 text-sm font-semibold border"><?php echo  $medicine->category_name ?></td>

                            <td class="px-4 py-3 text-sm border"><?php echo  $medicine->created_date ?></td>
                            <td class="px-4 py-3 text-sm border"><?php echo  $medicine->expired_date ?></td>
                        </tr>
                    <?php endforeach ?>

                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Dispensers -->
<section class="container mx-auto  font-mono" style="font-family: 'Poppins', sans-serif;">
    <h1 class="text-2xl font-semibold leading-relaxed text-gray-800 p-4">Dispensers (<?php echo $params['medicineCount']; ?>)</h1>

    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
        <div class="w-full overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="text-sm font-semibold tracking-wide text-left text-white bg-green-500 rounded uppercase border-b border-gray-600">
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Company</th>
                        <th class="px-4 py-3">Status</th>
                        <th class="px-4 py-3">Date</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    <?php foreach ($params['dispensers'] as $dispenser) : ?>
                        <tr class="text-gray-700">
                            <td class="px-4 py-3 border">
                                <div class="flex items-center text-sm">
                                    <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                        <img class="object-cover w-full h-full rounded-full" src="<?php echo URLROOT . "/uploads/dispenser/" . $dispenser->avatar ?>" alt="" loading="lazy" />
                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-black"><?php echo  $dispenser->name ?></p>
                                        <!-- <p class="text-xs text-gray-600">Developer</p> -->
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm font-semibold border"><?php echo  $dispenser->company ?></td>
                            <td class="px-4 py-3 text-xs border">
                                <span class="px-2 py-1 font-semibold  leading-tight text-<?php echo $dispenser->status ? "green" : "red" ?>-700 bg-<?php echo $dispenser->status ? "green" : "red" ?>-100 rounded-sm"><?php echo $dispenser->status ? "Active" : "Unactive" ?> </span>
                            </td>
                            <td class="px-4 py-3 text-sm border"><?php echo  $dispenser->activity ?></td>
                        </tr>
                    <?php endforeach ?>

                </tbody>
            </table>
        </div>
    </div>
</section>