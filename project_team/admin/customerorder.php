<?php include('includes/header.php') ?>
<div class="h-full px-4 py-4 bg-blue-50 min-h-screen">
    <div class="w-full bg-white rounded-xl p-6">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-semibold text-gray-700">📊 Report Overview</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Summary Cards -->
            <div class="grid gap-4 grid-cols-1 sm:grid-cols-3">
                <div class="bg-gray-800 text-white rounded-xl p-4 shadow hover:shadow-lg transition">
                    <p class="text-sm">Finished</p>
                    <p class="text-2xl font-bold mt-1">0</p>
                </div>
                <div class="bg-gray-800 text-white rounded-xl p-4 shadow hover:shadow-lg transition">
                    <p class="text-sm">Processing</p>
                    <p class="text-2xl font-bold mt-1">0</p>
                </div>
                <div class="bg-gray-800 text-white rounded-xl p-4 shadow hover:shadow-lg transition">
                    <p class="text-sm">Pending</p>
                    <p class="text-2xl font-bold mt-1">0</p>
                </div>
            </div>

            <!-- Date Filter -->
            <div class="hidden md:flex items-center justify-end gap-4">
                <div class="relative w-full max-w-xs">
                    <input datepicker id="default-datepicker-1" type="text"
                        class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm"
                        placeholder="Start Date">
                    <div class="absolute left-3 top-2.5 text-gray-400">
                        <i class="fa-regular fa-calendar"></i>
                    </div>
                </div>
                <div class="relative w-full max-w-xs">
                    <input datepicker id="default-datepicker-2" type="text"
                        class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm"
                        placeholder="End Date">
                    <div class="absolute left-3 top-2.5 text-gray-400">
                        <i class="fa-regular fa-calendar"></i>
                    </div>
                </div>
                <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition">Search</button>
            </div>
        </div>

        <!-- Orders List -->
        <div class="mt-8 grid gap-4 grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-5">
            <?php
            $order = getAll('orders');
            if ($order->num_rows > 0) {
                foreach ($order as $item) {
            ?>
                <div class="bg-blue-100 border border-blue-200 rounded-xl shadow hover:shadow-lg p-4 space-y-2 transition">
                    <div class="flex justify-between items-center">
                        <h4 class="font-semibold text-gray-700 text-sm"><?= $item['first_name'] ?> <?= $item['last_name'] ?></h4>
                        <?php if ($item['status'] == 1) { ?>
                            <span class="text-red-500 text-xs"><i class="fa-solid fa-circle"></i></span>
                        <?php } else { ?>
                            <span class="text-green-500 text-xs"><i class="fa-solid fa-circle"></i></span>
                        <?php } ?>
                    </div>
                    <hr>
                    <div class="flex justify-between text-xs text-gray-600">
                        <span>ID</span><span><?= $item['id'] ?></span>
                    </div>
                    <div class="flex justify-between text-xs text-gray-600">
                        <span><i class="fa-regular fa-clock"></i></span>
                        <span><?= $item['created_at'] ?></span>
                    </div>
                    <div class="flex justify-between mt-2 gap-1">
                        <button class="bg-green-600 hover:bg-green-700 text-white text-xs px-2 py-1 rounded">Verify</button>
                        <button class="bg-blue-600 hover:bg-blue-700 text-white text-xs px-2 py-1 rounded">Check</button>
                        <button class="bg-red-600 hover:bg-red-700 text-white text-xs px-2 py-1 rounded">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </div>
                </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</div>
<?php include('includes/footer.php') ?>
