<style>
        /* width */
        ::-webkit-scrollbar {
            width: 5px;
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


<!-- All -->
<section id="sante" class="bg-gray-50 bg-opacity-75" style="font-family: 'Poppins';">
    <!-- <h1 class="max-w-md text-1xl font-bold text-center mb-6 md:text-2xl md:text-left md:mb-10">
        All Medicines
        
    </h1> -->
    <div class="flex w-full items-center justify-between mb-4 md:mb-6">

        <h1 class="text-1xl  max-w-md  font-bold text-center  md:text-2xl md:text-left leading-relaxed "> All Medicines</h1>



        <button class="inline-flex gap-x-2 items-center py-2.5 px-6 text-white bg-green-600 rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-1" data-modal-target="medicine-modal" data-modal-toggle="medicine-modal">

            <span class="text-sm font-semibold tracking-wide">+ Add</span>
        </button>

        <!--  Modal -->
        <div id="medicine-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full ">
            <div class="relative w-full h-full max-w-md md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="medicine-modal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="px-4 py-8 lg:px-6 flex flex-col gap-8">
                        <!-- <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Sign in to our platform</h3> -->
                        <div class="flex items-center justify-center" aria-label="Home" role="img" style="font-family: 'Poppins', sans-serif;">
                            <p class="ml-2  text-base  font-bold text-dark dark:text-white">Create New Medicine</p>
                        </div>
                        <div class="h-96 overflow-y-scroll overflow-x-hidden px-6 space-y-10 custom">
                            <form id="first" class="space-y-4" action="" method="POST" enctype="multipart/form-data">
                                <div class="flex items-center justify-center" aria-label="Home" role="img" style="font-family: 'Poppins', sans-serif;">
                                    <p class=" text-sm  font-bold text-left text-dark dark:text-white">Medicine 1</p>
                                </div>

                                <div class="space-y-4">
                                    <div class="w-full flex gap-4">
                                        <div class="w-full">
                                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Medicine name</label>
                                            <input type="text" name="name" id="name" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Cruise name" required>

                                        </div>
                                        <div class="w-full">
                                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                            <!-- <input type="text" name="ship" id="ship" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Ship name" required> -->
                                            <select name="category" id="category" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" aria-label="Default select example" required>
                                                <option value="" disabled selected>Select category </option>
                                                <?php foreach ($data['categories'] as $category) : ?>


                                                    <option value="<?php echo $category->id ?>"><?php echo $category->name ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="w-full flex gap-4">
                                        <div class="w-full">
                                            <label for="mein" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mein</label>
                                            <input type="text" name="mein" id="mein" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Cruise name" required>

                                        </div>
                                        <div class="w-full ">
                                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                            <input type="number" name="price" id="price" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Cruise name" required>

                                        </div>
                                    </div>
                                    <div class="w-full ">
                                        <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                                        <input type="file" name="image" id="image" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full px-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Cruise Price" required>

                                    </div>
                                </div>

                                <button type="submit" class="w-full  text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-md text-sm px-5 py-2.5 text-center">Create</button>

                            </form>

                            <form id="second" class="space-y-4" action="" method="POST" enctype="multipart/form-data">
                                <div class="flex items-center justify-center" aria-label="Home" role="img" style="font-family: 'Poppins', sans-serif;">
                                    <p class=" text-sm  font-bold  text-dark dark:text-white">Medicine 2</p>
                                </div>
                                <div class="w-full flex gap-4">
                                    <div class="w-full">
                                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Medicine name</label>
                                        <input type="text" name="name" id="name" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Cruise name" required>

                                    </div>
                                    <div class="w-full">
                                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                        <!-- <input type="text" name="ship" id="ship" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Ship name" required> -->
                                        <select name="category" id="category" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" aria-label="Default select example" required>
                                            <option value="" disabled selected>Select category </option>
                                            <?php foreach ($data['categories'] as $category) : ?>


                                                <option value="<?php echo $category->id ?>"><?php echo $category->name ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="w-full flex gap-4">
                                    <div class="w-full">
                                        <label for="mein" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mein</label>
                                        <input type="text" name="mein" id="mein" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Cruise name" required>

                                    </div>
                                    <div class="w-full">
                                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                        <input type="number" name="price" id="price" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Cruise name" required>

                                    </div>
                                </div>
                                <div class="w-full">
                                    <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                                    <input type="file" name="image" id="image" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full px-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Cruise Price" required>

                                </div>

                                <button type="submit" class="w-full  text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-md text-sm px-5 py-2.5 text-center">Create</button>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 items-start  md:grid-cols-3 lg:grid-cols-4">
        <!-- Items -->
        <?php foreach ($params['medicines'] as $medicine) : ?>
            <div class="w-full bg-white border border-gray-50 rounded-md shadow-sm dark:bg-gray-800 dark:border-gray-700 pb-2">

                <div class="h-60 flex items-center justify-center">
                    <img class="w-44  h-52 rounded-t-md sm:max-h-56" src='<?php echo URLROOT . "/uploads/medicine/" . $medicine->image ?>' alt="" />

                </div>
                <div class="p-3 flex flex-col gap-4 md:gap-6 md:p-5 h-16 overflow-hidden">

                    <h5 class="text-sm tracking-tight font-bold text-gray-900 dark:text-white "><?php echo $medicine->name ?></h5>



                </div>
            </div>
        <?php endforeach; ?>


    </div>


</section>