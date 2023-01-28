
<!-- Dispensers -->
<section class="container mx-auto  font-mono" style="font-family: 'Poppins', sans-serif;">
    <h1 class="text-2xl font-semibold leading-relaxed text-gray-800 p-4">Dispensers (<?php echo $params['dispenserCount']; ?>)</h1>

    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
        <div class="w-full overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="text-sm font-semibold tracking-wide text-left text-white bg-green-500 rounded uppercase border-b border-gray-600">
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Company</th>
                        <th class="px-4 py-3">Status</th>
                        <th class="px-4 py-3">Date</th>
                        <th class="px-4 py-3">Action</th>
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
                            <td class="py-4 px-6 text-sm border space-x-2 text-center ">
                                        <a href="<?php echo URLROOT . '/admin/editPanel/' . $medicine->id ?>"> <i class="ri-edit-box-fill text-green-600 text-xl"></i></a>
                                        <i class="ri-delete-bin-2-fill text-red-600 text-xl"></i>
                                    </td>
                        </tr>
                    <?php endforeach ?>

                </tbody>
            </table>
        </div>
    </div>
</section>
