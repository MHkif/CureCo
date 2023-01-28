<style>
    /* width */
    ::-webkit-scrollbar {
        width: 4px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        background: #F8F8F8;

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

<!-- Available Medicines -->
<section class="container mx-auto  font-mono" style="font-family: 'Poppins', sans-serif;">
    <div class="flex w-full items-center justify-between mb-4 md:mb-6">
        <h1 class="text-2xl font-semibold leading-relaxed text-gray-800 p-4">All Medicines (<?php echo $params['medicineCount']; ?>)</h1>

        <section class="flex gap-4" id='searchBar'>

            <div>
                <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-green-200 border border-green-400 rounded hover:bg-green-200 focus:ring-2 focus:outline-none focus:ring-green-400 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800" type="button">Sort <svg aria-hidden="true" class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div id="dropdown" class="z-10 hidden bg-white divide-y divide-green-500 rounded shadow w-44 ">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                        <li>
                            <a href="<?php echo URLROOT ?>/admin/sortMedicine/0" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">ASC Price</a>

                        </li>
                        <li>
                            <a href="<?php echo URLROOT ?>/admin/sortMedicine/1" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">DESC Price</a>

                        </li>
                        <li>
                            <a href="<?php echo URLROOT ?>/admin/sortMedicine/2" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">ASC Date</a>

                        </li>
                        <li>
                            <a href="<?php echo URLROOT ?>/admin/sortMedicine/3" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">DESC Date</a>
                        </li>

                    </ul>
                </div>
            </div>
            <form class="container-fluid " action="<?php echo URLROOT ?>/admin/searchMedicine" method="POST">
                <div class="relative w-full">
                    <input type="search" id="search-dropdown" name="searched" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded  border border-green-400 focus:ring-green-300 focus:border-green-300  " placeholder="Search" required>
                    <button type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-green-600 rounded-r border border-green-300 hover:bg-green-500 focus:ring-2 focus:outline-none focus:ring-green-400"><svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg></button>
                </div>
            </form>
        </section>

        <button class="inline-flex gap-x-2 items-center py-2.5 px-6 text-white bg-green-600 rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-1" data-modal-target="medicine-modal" data-modal-toggle="medicine-modal">

            <span class="text-sm font-semibold tracking-wide">+ Add</span>
        </button>
    </div>

    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
        <div class="w-full overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="text-sm font-semibold tracking-wide text-left text-white bg-green-600 rounded uppercase border-b border-gray-600">
                        <th class="py-4 px-6 ">Image</th>
                        <th class="py-4 px-6 ">Name</th>
                        <th class="py-4 px-6 ">Price</th>
                        <th class="py-4 px-6 ">Category</th>
                        <th class="py-4 px-6 ">Created</th>
                        <th class="py-4 px-6  ">Expired</th>
                        <th class="py-4 px-6  ">Action</th>


                    </tr>
                </thead>
                <tbody class="bg-white">
                    <?php foreach ($params['medicines'] as $medicine) : ?>
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
                            <td class="py-4 px-6 text-sm border space-x-2 text-center ">
                                <a href="<?php echo URLROOT . '/admin/editPanel/' . $medicine->id ?>"> <i class="ri-edit-box-fill text-green-600 text-xl"></i></a>

                                <a href="<?php echo URLROOT . '/admin/delete/' . $medicine->id ?>"> <i class="ri-delete-bin-2-fill text-red-600 text-xl"></i></a>

                            </td>
                        </tr>
                    <?php endforeach ?>

                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Medicine modal -->
<div id="medicine-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
    <div class="relative w-full h-full max-w-md md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="medicine-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-4" style="font-family: 'Poppins', sans-serif;">
                <!-- <div class="flex items-center justify-center py-4" aria-label="Home" role="img" style="font-family: 'Prosto One', cursive;">
                </div> -->
                <p class="text-center text-lg  font-bold text-dark dark:text-white py-4">Create Medicines</p>

                <form class="space-y-4" action="<?php echo URLROOT ?>/admin/addForm" method="POST" enctype="multipart/form-data">
                    <!--  -->
                    <div id="form" class="space-y-4 px-3">
                        <hr>
                        </hr>
                        <p class="text-center text-base  font-bold text-dark dark:text-white">Medicine 1</p>
                        <input type="hidden" name="total" id="total" value="1">
                        <div class="flex gap-4">

                            <div class="w-full">
                                <label for="name1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Medicine name</label>
                                <input type="text" name="name1" id="name1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500  block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="medicine name">
                                <small id="name1Span"></small>
                            </div>

                            <div class="w-full">
                                <label for="category1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                <!-- <input type="text" name="category1" id="category1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="select category" required> -->
                                <select required name="category1" id="category1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" aria-label="Default select example">
                                    <option value="" disabled selected>Select category </option>
                                    <?php foreach ($params['categories'] as $category) : ?>
                                        <option value="<?php echo $category->id ?>"><?php echo $category->name ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <span id="category1Span"></span>

                            </div>
                        </div>
                        <div class="flex gap-4">

                            <div class="w-full">
                                <label for="capacity1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Capacity</label>
                                <input type="number" name="capacity1" id="capacity1" placeholder="capacity of medicine" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500  block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                <span id="capacity1Span"></span>
                            </div>

                            <div class="w-full">
                                <label for="price1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                <input type="number" name="price1" id="price1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="medicine's price" required>
                                <span id="price1Span"></span>

                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-full ">
                                <label for="image1" class="block mb-2  text-sm font-medium text-gray-900 dark:text-white">Image</label>
                                <input type="file" name="image1" id="image1" class=" mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-green-500 focus:border-green-500  block w-full px-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="medicine's image" required>
                                <span id="image1Span"></span>

                            </div>
                            <div class="w-full ">
                                <label for="expired1" class="block mb-2  text-sm font-medium text-gray-900 dark:text-white">Expired Date</label>
                                <input type="date" name="expired1" id="expired1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="expired date" required>
                                <span id="expired1Span"></span>

                            </div>
                        </div>

                    </div>
                    <!--  -->

                    <div class="px-3 text-sm  font-medium text-gray-500 dark:text-green-600">
                        <button type="submit" class="w-full rounded-md px-5 py-2 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-green-400 ring-inset  hover:ring-green-400 hover:ring-0 hover:bg-green-400 hover:text-white">Create</button>
                    </div>
                </form>
                <div class="px-3 text-sm mt-4 font-medium text-gray-500 dark:text-gray-300">
                    <button onclick="addForm()" type="button" class="w-full text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-md text-sm px-5 py-2.5 text-center">New Medicine</button>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="<?php echo URLROOT . './src/js/addForm.js' ?>"></script>
<script>
    var categories =
        <?php echo json_encode($params['categories']); ?>;
    let arr = Object.assign({}, categories);
    console.log(arr[0]["id"])
    localStorage.setItem("categories", JSON.stringify(arr))
</script>