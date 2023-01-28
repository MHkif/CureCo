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


    <!-- <div class="flex w-full"> -->
    <!-- <a class="inline-flex rounded-md px-3 py-1.5 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-green-500 ring-inset  hover:ring-green-500 hover:ring-0 hover:bg-green-500 hover:text-white" data-modal-target="Login-modal" data-modal-toggle="Login-modal" type="button">Back   <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg></a> -->

    <div class="w-full flex gap-4 items-align p-3 fixed">
        <a href="<?php echo URLROOT . "/admin/dashboard" ?>" class=" inline-flex justify-center px-6 py-2.5  font-medium text-xs leading-normal uppercase rounded shadow-md shadow-sm ring-1 ring-green-500 ring-inset  hover:ring-green-500 hover:ring-0 hover:bg-green-500 hover:text-white active:shadow-md transition duration-150 ease-in-out">
            <svg aria-hidden="true" class="rotate-180 w-4 h-4  mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
            Back

        </a>
    </div>
    <!-- </div> -->

    <div class="w-full h-screen flex items-center justify-center">


        {{content}}
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.js"></script>

</body>

</html>