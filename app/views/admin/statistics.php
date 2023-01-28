<div class="grid grid-cols-1 gap-4 sm:grid-cols-2 items-start  md:grid-cols-3 lg:grid-cols-4">


    <div class="container mx-auto pr-4">
        <div class="w-full bg-white max-w-xs mx-auto rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer">
            <div class="h-14 bg-red-400 flex items-center justify-between">
                <p class="mx-auto text-white text-lg ">Medicines</p>
            </div>
            <div class="flex justify-between px-5 pt-4 mb-2 text-sm text-gray-600">
                <p>TOTAL</p>
            </div>
            <p class="py-3 text-3xl ml-5">20,456</p>
            <!-- <hr > -->
        </div>
    </div>

    <div class="container mx-auto pr-4">
        <div class="w-full bg-white max-w-xs mx-auto rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer">
            <div class="h-14 bg-green-400 flex items-center justify-between">
                <p class="mx-auto text-white text-lg ">Customers</p>
            </div>
            <div class="flex justify-between px-5 pt-4 mb-2 text-sm text-gray-600">
                <p>TOTAL</p>
            </div>
            <p class="py-3 text-3xl ml-5">56</p>
            <!-- <hr > -->
        </div>
    </div>

    <div class="container mx-auto pr-4">
        <div class="w-full bg-white max-w-xs mx-auto rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer">
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

    <div class="container mx-auto pr-4">
        <div class="w-full bg-white max-w-xs mx-auto rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer">
            <div class="h-14 bg-orange-400 flex items-center justify-between">
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


<div class="grid grid-cols-1 my-10 gap-4 items-start   ">
    <div class="container-fluid  shadow-xl">
        <div class="w-full mx-auto">
            <div class="bg-white p-4 rounded-lg flex flex-col gap-4" style="font-family: 'Poppins', sans-serif;">
                <h1 class="text-2xl font-semibold leading-relaxed text-gray-800">Expired Medicines</h1>

                <table class="text-left w-full border-collapse rounded-lg" > 
                    <thead>

                        <tr>
                            <th class="py-4 px-6 rounded-l-lg bg-green-500 font-medium uppercase text-sm text-white border-b border-grey-light">Image</th>
                            <th class="py-4 px-6 text-center bg-green-500 font-medium uppercase text-sm text-white border-b border-grey-light">Name</th>
                            <th class="py-4 px-6 text-center bg-green-500 font-medium uppercase text-sm text-white border-b border-grey-light">Price</th>
                            <th class="py-4 px-6 text-center bg-green-500 font-medium uppercase text-sm text-white border-b border-grey-light">Category</th>
                            <th class="py-4 px-6 text-center bg-green-500 font-medium uppercase text-sm text-white border-b border-grey-light">Created</th>
                            <th class="py-4 px-6 rounded-r-lg text-center bg-green-500 font-medium uppercase text-sm text-white border-b border-grey-light">Expired</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($params['expired_medicines'] as $medicine) : ?>
                            <tr class="hover:bg-grey-lighter">
                                <td class="py-4 px-6 border-b border-grey-light">
                                    <div class="avatar">
                                        <div class="w-20  rounded">
                                            <img src="<?php echo URLROOT . "/uploads/medicine/" . $medicine->image ?>" />
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4 px-6  text-left font-medium border-b border-grey-light">
                                    <?php echo $medicine->name; ?>
                                </td>
                                <td class="py-4 px-6  text-left font-medium border-b border-grey-light">
                                    <?php echo $medicine->price; ?> MAD
                                </td>
                                <td class="py-4 px-6  text-left font-medium border-b border-grey-light">
                                    <?php echo $medicine->category; ?>
                                </td>
                                <td class="py-4 px-6  text-left font-medium border-b border-grey-light">
                                    <?php echo $medicine->created_date; ?>
                                </td>
                                <td class="py-4 px-6  text-left font-medium border-b border-grey-light">
                                    <?php echo $medicine->expired_date; ?>
                                </td>
                             
                             
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>