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
    <link rel="stylesheet" href="<?php echo URLROOT . './src/css/navbar.css' ?>">
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



</head>

<body>
    <!-- Modals -->
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



                <?php if (isset($_SESSION['client_id']) or isset($_SESSION['admin_id'])) : ?>
                    <li class="w-1/2 inline-flex rounded-md justify-center py-2 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-green-400 ring-inset  hover:ring-green-400 hover:ring-0 hover:bg-green-400 hover:text-white">
                        <a href="<?php echo URLROOT ?>/client/logout">Logout</a>
                    </li>


                <?php else : ?>

                    <li class="w-1/2 inline-flex rounded-md justify-center py-2 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-green-400 ring-inset  hover:ring-green-400 hover:ring-0 hover:bg-green-400 hover:text-white">
                        <a data-modal-target="Login-modal" data-modal-toggle="Login-modal" type="button">Log in</a>
                    </li>
                    <li class="w-1/2 inline-flex rounded-md justify-center py-2 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-green-400 ring-inset  hover:ring-green-400 hover:ring-0 hover:bg-green-400 hover:text-white">

                        <a data-modal-hide="Login-modal" data-modal-target="register-modal" data-modal-toggle="register-modal" type="button">Sign up</a>
                    </li>
                <?php endif; ?>

            </ul>
        </div>
    </div>

    <!-- End Modals -->


    <!-- Login modal -->
    <div id="Login-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-md md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="Login-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <div class="flex items-center justify-center py-4" aria-label="Home" role="img" style="font-family: 'Prosto One', cursive;">
                        <img class="cursor-pointer w-8 h-8 sm:w-auto" src="./src/assets/logo.svg" alt="logo" />
                        <p class="ml-2 lg:ml-4 text-base  font-bold text-dark dark:text-white">WeCare</p>
                    </div>
                    <form class="space-y-4" action="admin/login" method="POST" id="loginForm">
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                            <input type="text" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com">
                            <small id="emailSpan"></small>
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                            <span id="passwordSpan"></span>
                        </div>
                        <div class="flex justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800">
                                </div>
                                <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                            </div>
                            <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a>
                        </div>
                        <button onclick="validate(event)" type="submit" class="w-full text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Login</button>
                        <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                            Not registered? <a data-modal-hide="Login-modal" class="text-green-700 hover:underline" data-modal-target="register-modal" data-modal-toggle="register-modal" type="button">Create account</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Register Modal -->
    <div id="register-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-md md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="register-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <div class="flex items-center justify-center" aria-label="Home" role="img" style="font-family: 'Prosto One', cursive;">
                        <div class="flex items-center justify-center py-4" aria-label="Home" role="img" style="font-family: 'Prosto One', cursive;">
                            <img class="cursor-pointer w-8 h-8 sm:w-auto" src="./src/assets/logo.svg" alt="logo" />
                            <p class="ml-2 lg:ml-4 text-base  font-bold text-dark dark:text-white">WeCare</p>
                        </div>
                    </div>
                    <form class="space-y-4" action="client/register" method="POST">
                        <div class="flex gap-4">

                            <div class="w-full">
                                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First name</label>
                                <input type="text" name="first_name" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Loyal" required>
                            </div>
                            <div class="w-full">
                                <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last name</label>
                                <input type="text" name="last_name" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Frank" required>

                            </div>
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                        </div>
                        <div>
                            <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm Password</label>
                            <input type="password" name="confirm_password" id="confirm_password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                        </div>
                        <div class="flex justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800">
                                </div>
                                <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                            </div>
                            <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a>
                        </div>
                        <button type="submit" class="w-full text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Sign up</button>
                        <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                            Already have an account? <a class="text-green-700" data-modal-hide="register-modal" data-modal-target="Login-modal" data-modal-toggle="Login-modal" class="text-orange-700 hover:underline">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <nav class="bg-opacity-0 w-full" id="nav_ID">
        <!-- <div class="container mx-auto p-4 flex items-center justify-between"> -->

        <div class="container mx-auto p-4 flex items-center justify-between" aria-label="Home" role="img" style="font-family: 'Courgette', cursive; ">
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

                        <ul id="myList" class="flex flex-col gap-6 text-3xl md:text-base items-center justify-center  bg-white  md:flex-row md:bg-transparent z-20">
                            <li>
                                <a href="<?php echo URLROOT ?>/pages" class="inline-block rounded-md px-3 py-1.5 text-sm font-semibold leading-6 shadow-sm   ring-1 ring-green-400 ring-inset hover:ring-green-600 hover:ring-0 hover:text-white">Home</a>
                                <!-- bg-gradient-to-r from-green-500 via-green-600 to-green-700 -->
                            </li>

                            <li>
                                <a href="<?php echo URLROOT ?>/pages/medicine" class="inline-block rounded-md px-3 py-1.5 text-sm font-semibold leading-6 shadow-sm  ring-1 ring-green-400 ring-inset hover:ring-green-600 hover:ring-0 hover:text-white">Medicine</a>
                            </li>



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

                <?php if (isset($_SESSION['client_id']) or isset($_SESSION['admin_id'])) : ?>
                    <a href="<?php echo URLROOT ?>/client/logout" class="inline-block rounded-md px-3 py-1.5 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-green-400 ring-inset  hover:ring-green-400 hover:ring-0 hover:bg-green-400 hover:text-white">Logout</a>

                <?php else : ?>
                    <a class="inline-block rounded-md px-3 py-1.5 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-green-500 ring-inset  hover:ring-green-500 hover:ring-0 hover:bg-green-500 hover:text-white" data-modal-target="Login-modal" data-modal-toggle="Login-modal" type="button">Log in</a>
                    <a data-modal-hide="Login-modal" class="inline-block rounded-md px-3 py-1.5 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-green-500 ring-inset  hover:ring-green-500 hover:ring-0 hover:bg-green-500 hover:text-white" data-modal-target="register-modal" data-modal-toggle="register-modal" type="button">Sign up</a>

                <?php endif; ?>


            </div>

        </div>

    </nav>



    <div class="container w-full min-h-screen ">


        {{content}}
    </div>


    <script src="<?php echo URLROOT . './src/js/selectNavbar.js' ?>"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.js"></script>
    <script>
        function validateEmail(email) {
            let res = /^[a-zA-Z0-9.!#$%&'+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)$/;
            return res.test(email)
        }

        function validatePassword(password) {
            let res = /^[a-zA-Z0-9]+$/;
            return res.test(password)
        }

        function validatenumber(number) {
            let res = /[-+]?[0-9]*.?[0-9]+/;
            return res.test(number)
        }

        // function validatetext(text) {
        //     if(text!=''){
        //       return true
        //     }
        //     return false
        // }



        function validate(event) {
            let form = document.getElementById('loginForm');
            let erremail = document.getElementById('emailSpan');
            let errpassword = document.getElementById('passwordSpan');
            let email = document.getElementById('email').value;
            let password = document.getElementById('password').value;
            event.preventDefault();
            let bol = true;

            erremail.innerText = "";
            if (!validateEmail(email)) {
                erremail.innerText = '"' + email + '"' + "Email is not valid";
                erremail.style.color = 'red';
                bol = false;
            }

            errpassword.innerText = "";
            if (!validatePassword(password)) {
                errpassword.innerText = "password is not valid";
                errpassword.style.color = 'red';
                bol = false;

            }
            if (bol) {
                form.submit();
            }


            return false;
        }
    </script>

</body>

</html>