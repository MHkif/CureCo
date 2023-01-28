
<section class="flex pt-12 pb-8" id='searchBar'>
    <form class="container px-10" action="<?php echo URLROOT ?>/medicines/searchMedicine" method="POST">
        <div class=" flex w-full md:w-1/2 mx-auto">
            <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-green-100 border border-green-300 rounded-l hover:bg-green-200 focus:ring-2 focus:outline-none focus:ring-green-400 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800" type="button">All categories <svg aria-hidden="true" class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg></button>
            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-green-400 rounded shadow w-44 ">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Vitalité</a>

                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ophtalmologie</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Gastro-entérologie</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Circulation & Coeur</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">ORL</a>
                    </li>
                </ul>
            </div>
            <div class="relative w-full">
                <input type="search" id="search-dropdown" name="searched" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r border-l-green-300 border-l-2 border border-green-300 focus:ring-green-200 focus:border-green-200  " placeholder="Search" required>
                <button type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-green-400 rounded-r border border-green-300 hover:bg-green-500 focus:ring-2 focus:outline-none focus:ring-green-400"><svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg></button>
            </div>
        </div>
    </form>
</section>

<!-- All -->
<section id="all" class="my-10 mx-6  py-6 px-6 md:px-8 md:py-8 rounded-lg  md:mx-8 md:my-14 bg-gray-50 bg-opacity-75" style="font-family: 'Poppins';">
    <h1 class="max-w-md text-1xl font-bold text-center mb-6 md:text-3xl md:text-left md:mb-8">
        All
    </h1>
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 items-start  md:grid-cols-3 lg:grid-cols-4">
        <!-- Items -->
        <?php foreach ($params['medicine'] as $medicine) : ?>
            <div class="w-full bg-white  rounded-md  dark:bg-gray-800 dark:border-gray-700">

                <div class="h-60 flex items-center justify-center">
                    <img class="w-44  h-52 rounded-t-md sm:max-h-56" src='<?php echo URLROOT . "/uploads/medicine/" . $medicine->image ?>' alt="" />

                </div>
                <div class="p-3 flex flex-col gap-4 md:gap-6 md:p-5">

                    <h5 class="text-md tracking-tight font-bold text-gray-900 dark:text-white "><?php echo $medicine->name ?></h5>


                    <!-- <div class="w-full flex items-align justify-center">
                        <a href="#" class="w-full inline-flex justify-center px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-normal uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-orange-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-600 active:shadow-lg transition duration-150 ease-in-out">
                            Add to Cart
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div> -->
                </div>
            </div>
        <?php endforeach; ?>


    </div>


</section>


<!-- Vitamines -->
<section id="vitamines" class="my-10 mx-6  py-6 px-6 md:px-8 md:py-8 rounded-lg  md:mx-8 md:my-14 bg-gray-50 bg-opacity-75" style="font-family: 'Poppins';">
    <h1 class="max-w-md text-1xl font-bold text-center mb-6 md:text-3xl md:text-left md:mb-8">
        Vitamines
    </h1>
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 items-start  md:grid-cols-3 lg:grid-cols-4">
        <!-- Items -->
        <?php foreach ($params['vitamines'] as $vitamines) : ?>
            <div class="w-full bg-white   rounded-md  dark:bg-gray-800 dark:border-gray-700">

                <div class="h-60 flex items-center justify-center">
                    <img class="w-44  h-52 rounded-t-md sm:max-h-56" src='<?php echo URLROOT . "/uploads/medicine/" . $vitamines->image ?>' alt="" />

                </div>
                <div class="p-3 flex flex-col gap-4 md:gap-6 md:p-5 ">

                    <h5 class="text-md leading-normal font-bold text-gray-900 dark:text-white"><?php echo $vitamines->name ?></h5>


                    <!-- <div class="w-full flex items-align justify-center">
                        <a href="#" class="w-full inline-flex justify-center px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-normal uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-orange-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-600 active:shadow-lg transition duration-150 ease-in-out">
                            Add to Cart
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div> -->
                </div>
            </div>
        <?php endforeach; ?>


    </div>


</section>

<!-- Stress & Sleep -->
<section id="stress" class="my-10 mx-6  py-6 px-6 md:px-8 md:py-8 rounded-lg  md:mx-8 md:my-14 bg-gray-50 bg-opacity-75" style="font-family: 'Poppins';">
    <h1 class="max-w-md text-1xl font-bold text-center mb-6 md:text-3xl md:text-left md:mb-8">
        Stress & Sleep
    </h1>
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 items-start  md:grid-cols-3 lg:grid-cols-4">
        <!-- Items -->
        <?php foreach ($params['stress'] as $stress) : ?>
            <div class="w-full bg-white  rounded-md  dark:bg-gray-800 dark:border-gray-700">

                <div class="h-60 flex items-center justify-center">
                    <img class="w-44  h-52 rounded-t-md sm:max-h-56" src='<?php echo URLROOT . "/uploads/medicine/" . $stress->image ?>' alt="" />

                </div>
                <div class="p-3 flex flex-col gap-4 md:gap-6 md:p-5">

                    <h5 class="text-md tracking-tight font-bold text-gray-900 dark:text-white "><?php echo $stress->name ?></h5>


                    <!-- <div class="w-full flex items-align justify-center">
                        <a href="#" class="w-full inline-flex justify-center px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-normal uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-orange-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-600 active:shadow-lg transition duration-150 ease-in-out">
                            Add to Cart
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div> -->
                </div>
            </div>
        <?php endforeach; ?>


    </div>


</section>

<!-- Minerals -->
<section id="bain" class="my-10 mx-6  py-6 px-6 md:px-8 md:py-8 rounded-lg  md:mx-8 md:my-14 bg-gray-50 bg-opacity-75" style="font-family: 'Poppins';">
    <h1 class="max-w-md text-1xl font-bold text-center mb-6 md:text-3xl md:text-left md:mb-8">
        Minerals
    </h1>
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 items-start  md:grid-cols-3 lg:grid-cols-4">
        <!-- Items -->
        <?php foreach ($params['minerals'] as $minerals) : ?>
            <div class="w-full bg-white  rounded-md  dark:bg-gray-800 dark:border-gray-700">

                <div class="h-60 flex items-center justify-center">
                    <img class="w-44  h-52 rounded-t-md sm:max-h-56" src='<?php echo URLROOT . "/uploads/medicine/" . $minerals->image ?>' alt="" />

                </div>
                <div class="p-3 flex flex-col gap-4 md:gap-6 md:p-5">

                    <h5 class="text-md tracking-tight font-bold text-gray-900 dark:text-white "><?php echo $minerals->name ?></h5>


                    <!-- <div class="w-full flex items-align justify-center">
                        <a href="#" class="w-full inline-flex justify-center px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-normal uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-orange-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-600 active:shadow-lg transition duration-150 ease-in-out">
                            Add to Cart
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div> -->
                </div>
            </div>
        <?php endforeach; ?>


    </div>


</section>


<!-- Bain -->
<section id="bain" class="my-10 mx-6  py-6 px-6 md:px-8 md:py-8 rounded-lg  md:mx-8 md:my-14 bg-gray-50 bg-opacity-75" style="font-family: 'Poppins';">
    <h1 class="max-w-md text-1xl font-bold text-center mb-6 md:text-3xl md:text-left md:mb-8">
        Bain
    </h1>
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 items-start  md:grid-cols-3 lg:grid-cols-4">
        <!-- Items -->
        <?php foreach ($params['bain'] as $bain) : ?>
            <div class="w-full bg-white  rounded-md  dark:bg-gray-800 dark:border-gray-700">

                <div class="h-60 flex items-center justify-center">
                    <img class="w-44  h-52 rounded-t-md sm:max-h-56" src='<?php echo URLROOT . "/uploads/medicine/" . $bain->image ?>' alt="" />

                </div>
                <div class="p-3 flex flex-col gap-4 md:gap-6 md:p-5">

                    <h5 class="text-md tracking-tight font-bold text-gray-900 dark:text-white "><?php echo $bain->name ?></h5>


                    <!-- <div class="w-full flex items-align justify-center">
                        <a href="#" class="w-full inline-flex justify-center px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-normal uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-orange-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-600 active:shadow-lg transition duration-150 ease-in-out">
                            Add to Cart
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div> -->
                </div>
            </div>
        <?php endforeach; ?>


    </div>


</section>

<!-- Vitality -->
<section id="bain" class="my-10 mx-6  py-6 px-6 md:px-8 md:py-8 rounded-lg  md:mx-8 md:my-14 bg-gray-50 bg-opacity-75" style="font-family: 'Poppins';">
    <h1 class="max-w-md text-1xl font-bold text-center mb-6 md:text-3xl md:text-left md:mb-8">
        Vitality
    </h1>
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 items-start  md:grid-cols-3 lg:grid-cols-4">
        <!-- Items -->
        <?php foreach ($params['vitality'] as $vitality) : ?>
            <div class="w-full bg-white  rounded-md  dark:bg-gray-800 dark:border-gray-700">

                <div class="h-60 flex items-center justify-center">
                    <img class="w-44  h-52 rounded-t-md sm:max-h-56" src='<?php echo URLROOT . "/uploads/medicine/" . $vitality->image ?>' alt="" />

                </div>
                <div class="p-3 flex flex-col gap-4 md:gap-6 md:p-5">

                    <h5 class="text-md tracking-tight font-bold text-gray-900 dark:text-white "><?php echo $vitality->name ?></h5>

<!-- 
                    <div class="w-full flex items-align justify-center">
                        <a href="#" class="w-full inline-flex justify-center px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-normal uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-orange-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-600 active:shadow-lg transition duration-150 ease-in-out">
                            Add to Cart
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div> -->
                </div>
            </div>
        <?php endforeach; ?>


    </div>


</section>


<!-- Minerals -->
<section id="bain" class="my-10 mx-6  py-6 px-6 md:px-8 md:py-8 rounded-lg  md:mx-8 md:my-14 bg-gray-50 bg-opacity-75" style="font-family: 'Poppins';">
    <h1 class="max-w-md text-1xl font-bold text-center mb-6 md:text-3xl md:text-left md:mb-8">
        Minerals
    </h1>
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 items-start  md:grid-cols-3 lg:grid-cols-4">
        <!-- Items -->
        <?php foreach ($params['minerals'] as $minerals) : ?>
            <div class="w-full bg-white  rounded-md  dark:bg-gray-800 dark:border-gray-700">

                <div class="h-60 flex items-center justify-center">
                    <img class="w-44  h-52 rounded-t-md sm:max-h-56" src='<?php echo URLROOT . "/uploads/medicine/" . $minerals->image ?>' alt="" />

                </div>
                <div class="p-3 flex flex-col gap-4 md:gap-6 md:p-5">

                    <h5 class="text-md tracking-tight font-bold text-gray-900 dark:text-white "><?php echo $minerals->name ?></h5>

<!-- 
                    <div class="w-full flex items-align justify-center">
                        <a href="#" class="w-full inline-flex justify-center px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-normal uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-orange-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-600 active:shadow-lg transition duration-150 ease-in-out">
                            Add to Cart
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div> -->
                </div>
            </div>
        <?php endforeach; ?>


    </div>


</section>