<div class="flex flex-col justify-center  px-6 lg:px-8">

    <div class=" sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-6 lg:px-8">

            <form class="space-y-4" action="<?php echo URLROOT . "/admin/update/" . $params['prod']->id ?>" method="POST">
                <div class="space-y-4">
                    <div class="w-full flex gap-4">
                        <div class="w-full">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Medicine name</label>
                            <input type="text" name="name" id="name" value="<?php echo $params['prod']->name; ?>" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Medicine name" required>

                        </div>
                        <div class="w-full">
                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                            <select name="category"  class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" aria-label="Default select example">
                                <option value="<?php echo $params['prod']->cat_id; ?>" disabled selected><?php echo $params['prod']->category_name; ?></option>
                                <?php foreach ($params['categories'] as $category) : ?>


                                    <option value="<?php echo $category->id ?>"><?php echo $category->name ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="w-full flex gap-4">
                        <div class="w-full">
                            <label for="mein" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mein</label>
                            <input type="text" name="mein" id="mein" value="<?php echo $params['prod']->contenance; ?>" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Medicine Mein" required>

                        </div>

                        <div class="w-full ">
                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                            <input type="number" name="price" id="price" value="<?php echo $params['prod']->price; ?>" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Medicine Price" required>

                        </div>
                    </div>

                    <div class="w-full ">
                        <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                        <input type="file" value="<?php echo $params['prod']->image; ?>" name="image" id="image" class="bg-white border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full px-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Medicine image" >

                    </div>
                </div>

                <button type="submit" class="w-full text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Update</button>

            </form>
        </div>
    </div>
</div>