<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.css" rel="stylesheet" />

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Lobster&family=Poppins:wght@400;500&family=Prosto+One&family=Zen+Dots&display=swap" rel="stylesheet">
    <!-- ICONS -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/58c375ca00.js" crossorigin="anonymous"></script>

    <title><?php echo SITENAME; ?></title>
    <style>
        /* width */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: rgb(22 163 74);
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>


</head>

<body>
    <div id="drawer-navigation" class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-full dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-navigation-label">

        <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Close menu</span>
        </button>
        <div class="space-y-12 py-4">
            <div class="flex justify-center items-center" style="font-family: 'Courgette', cursive; ">
                <img class="cursor-pointer w-8 h-8 sm:w-auto" src="<?php echo URLROOT ?>/src/assets/logo.svg" alt="logo" />
                <p class="ml-2  text-base lg:text-2xl font-bold text-dark dark:text-white">WeCare</p>
            </div>

            <ul class="flex flex-col items-center space-y-4 " style="font-family: 'Poppins', sans-serif; ">
                <?php if (isset($_SESSION['admin_id'])) : ?>
                    <li class="w-1/2 inline-flex rounded-md justify-center py-2 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-green-400 ring-inset  hover:ring-green-400 hover:ring-0 hover:bg-green-400 hover:text-white">
                        <a href="<?php echo URLROOT ?>/admin/dashboard">Dashboard</a>
                    </li>

                <?php endif; ?>
                <li class="w-1/2 inline-flex rounded-md justify-center py-2 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-green-400 ring-inset  hover:ring-green-400 hover:ring-0 hover:bg-green-400 hover:text-white">
                    <a href="<?php echo URLROOT ?>/pages">Home</a>
                </li>

                <li class="w-1/2 inline-flex rounded-md justify-center py-2 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-green-400 ring-inset  hover:ring-green-400 hover:ring-0 hover:bg-green-400 hover:text-white">
                    <a href="<?php echo URLROOT ?>/pages/medicine">Medicine</a>
                </li>




                <li class="w-1/2 inline-flex rounded-md justify-center py-2 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-green-400 ring-inset  hover:ring-green-400 hover:ring-0 hover:bg-green-400 hover:text-white">
                    <a href="<?php echo URLROOT ?>/admin/logout">Logout</a>
                </li>




            </ul>
        </div>
    </div>

    <nav class="bg-white fixed w-full top-0 left-0 z-10 ">
        <div class="container mx-auto p-4  flex items-center justify-between">
            <div class="flex items-center justify-start gap-16">
                <div class="flex">
                    <img class="cursor-pointer w-8 h-8 sm:w-auto" src="<?php echo URLROOT ?>/src/assets/logo.svg" alt="logo" />
                    <p class="ml-2  text-base lg:text-2xl font-bold text-dark dark:text-white">WeCare</p>
                </div>
                <div class="hidden md:block">


                    <div id="menu" class="md:block lg:block hidden" style="font-family: 'Poppins', sans-serif;">
                        <button class=" dark:bg-white rounded block md:hidden lg:hidden text-gray-500 hover:text-gray-700 focus:text-gray-700 fixed focus:outline-none focus:ring-2 focus:ring-gray-500 bg-white md:bg-transparent z-30 top-0 mt-3">
                            <img class="h-8 w-8" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/center_aligned_with_image-svg5.svg" alt="hide" />
                        </button>

                        <ul class="flex flex-col gap-6 text-3xl md:text-base items-center justify-center  bg-white  md:flex-row md:bg-transparent z-20">
                            <li>
                                <a href="<?php echo URLROOT ?>/pages" class="inline-block rounded-md px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm  bg-gradient-to-r from-green-500 via-green-600 to-green-700  hover:bg-green-600 hover:text-white">Home</a>
                            </li>

                            <li>
                                <a href="<?php echo URLROOT ?>/pages/medicine" class="inline-block rounded-md px-3 py-1.5 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-green-400 ring-inset  hover:ring-green-400 hover:ring-0 hover:bg-green-400 hover:text-white">Medicine</a>
                            </li>
                            <!-- <li>
                                <a href="<?php echo URLROOT ?>/pages/" class="inline-block rounded-md px-3 py-1.5 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-green-400 ring-inset  hover:ring-green-400 hover:ring-0 hover:bg-green-400 hover:text-white">Destinations</a>
                            </li> -->


                            <?php if (isset($_SESSION['admin_id'])) : ?>
                                <li class="inline-block rounded-md px-3 py-1.5 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-green-400 ring-inset  hover:ring-green-400 hover:ring-0 hover:bg-green-400 hover:text-white">
                                    <a href="<?php echo URLROOT ?>/admin/dashboard">Dashboard</a>
                                </li>

                            <?php endif; ?>


                        </ul>


                    </div>
                </div>
            </div>

            <!-- Menu Button -->
            <button data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation" class=" dark:bg-white rounded sm:block md:hidden lg:hidden text-gray-500 hover:text-gray-700 focus:text-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500">
                <img class="h-8 w-8" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/center_aligned_with_image-svg4.svg" alt="show" />
            </button>
            <!-- End Menu Button -->

            <!-- AUTHENTICATION BUTTONS -->
            <div class="hidden md:flex gap-4" style="font-family: 'Poppins', sans-serif; ">
                <a href="<?php echo URLROOT ?>/client/logout" class="inline-block rounded-md px-3 py-1.5 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-green-400 ring-inset  hover:ring-green-400 hover:ring-0 hover:bg-green-400 hover:text-white">Logout</a>
            </div>
        </div>



    </nav>



    <div class="w-full min-h-screen font-sans text-gray-900 bg-gray-50 flex overflow-hidden pt-16">

        <aside class="hidden py-2 w-52 hover:bg-green-500 shadow-sm bg-white fixed left-0  min-h-screen md:block">
            <div class="px-3 py-4 overflow-y-auto rounded">
                <ul class="space-y-2">
                    <li class="p-0.2 bg-gradient-to-r from-green-600 via-green-700 to-green-800 rounded">
                        <a href="<?php echo URLROOT ?>/admin/dashboard" class="flex items-center p-2 text-base font-medium text-gray-900 rounded dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg aria-hidden="true" class="w-6 h-6 text-white transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                            </svg>
                            <span class="ml-3 text-white">Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo URLROOT ?>/admin/medicinePanel" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Medicines</span>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="<?php echo URLROOT ?>/admin/purchasePanel" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Purchases</span>
                        </a>
                    </li> -->

                    <li>
                        <a href="<?php echo URLROOT ?>/admin/dispenserPanel" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Dispenser</span>
                        </a>
                    </li>
                    <a href="<?php echo URLROOT ?>/admin/customerPanel" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Customers</span>
                    </a>
                    </li>





                </ul>
            </div>

        </aside>
        <main class="md:ml-52 flex-1 p-6 overflow-auto">

            {{content}}
        </main>


    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.js"></script>

</body>

</html>