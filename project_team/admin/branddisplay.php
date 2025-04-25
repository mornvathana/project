<?php include('includes/header.php') ?>
<!-- end header -->
<div class="h-full px-2 py-2 bg-blue-50">
    <div class="w-full bg-[#ffffff] h-[100vh] rounded-md p-5">
        <div class="w-full h-[10%] flex justify-between items-center">
            <div>
                <h1 class="font-medium">Brand List</h1>
                <a href="brand.php" class="bg-blue-500 text-[12px] text-white px-2 py-1 font-medium rounded-md">
                    Create Brand <i class="fa-solid fa-plus pl-1"></i>
                </a>
            </div>
            <div>
                <div class="flex">
                    <!-- Previous Button -->
                    <a href="#" id="back_btn" class="flex items-center justify-center px-2 h-7 me-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
                        </svg>
                        Previous
                    </a>

                    <!-- Page Number -->
                    <a href="#" class="flex items-center justify-center px-3 h-8 me-3 text-sm font-medium text-gray-500 rounded-lg dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <span id="startPage">1</span> / <span id="totalPage">10</span>
                    </a>

                    <!-- Next Button -->
                    <a href="#" id="next_btn" class="flex items-center justify-center px-2 h-7 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        Next
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="w-full h-[70%] mt-5 overflow-x-auto">
            <table class="text-center w-full table-auto">
                <thead>
                    <tr>
                        <th width="30" class="py-2 text-[11px] md:text-[13px] border border-gray-200 font-medium">ID</th>
                        <th width="100" class="py-2 text-[11px] md:text-[13px] border border-gray-200 font-medium">Name</th>
                        <th width="100" class="py-2 text-[11px] md:text-[13px] border border-gray-200 font-medium">Image</th>
                        <th width="60" class="py-2 text-[11px] md:text-[13px] border border-gray-200 font-medium">Status</th>
                        <th width="60" class="py-2 text-[11px] md:text-[13px] border border-gray-200 font-medium">Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $brand_title = getAll("brands");
                    if (mysqli_num_rows($brand_title)) {
                        foreach ($brand_title as $brand) {
                    ?>
                            <tr id="brand-<?= $brand['id'] ?>">
                                <td class="text-[11px] md:text-[13px] py-2 border border-gray-200"><?= $brand['id'] ?></td>
                                <td id="brandName" class="text-[11px] md:text-[13px] py-2 border border-gray-200"><?= $brand['name'] ?></td>
                                <td class="flex justify-center items-center">
                                    <img src="
                                        <?= !empty($brand['image']) ? '../uploads/brand/' . $brand['image'] : '../uploads/default/default.jpg'; ?>
                                    " class="w-[60px] h-[60px]" alt="image" />
                                </td>
                                <td class="border border-gray-200 text-[11px] md:text-[13px] py-2">
                                    <form action="code.php" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="brand_id" value="<?= $brand['id'] ?>">
                                        <?php if ($brand['status'] == 1) { ?>
                                            <button type="submit" name="btn_active" class="bg-green-500 text-white px-2 py-[1px] text-[11px] md:text-[13px] rounded-md">Active</button>
                                        <?php } else { ?>
                                            <button type="submit" name="btn_disable" class="bg-red-500 text-white px-2 py-[1px] text-[11px] md:text-[13px] rounded-md">Disable</button>
                                        <?php } ?>
                                    </form>
                                </td>
                                <td class="border border-gray-200 text-[11px] md:text-[13px] py-2 flex justify-center items-center gap-5">
                                    <form action="brandedit.php?id=<?= $brand['id'] ?>" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="brand_id" value="<?= $brand['id'] ?>">
                                        <button type="submit" name="btn_delete" class="bg-blue-500 text-white px-2 py-[1px] text-[11px] md:text-[13px] rounded-md"><i class="fas fa-edit"></i></button>
                                    </form>
                                    <form action="code.php" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="brand_id" value="<?= $brand['id'] ?>">
                                        <input type="hidden" name="image" value="<?= $brand['image'] ?>">
                                        <button type="submit" name="btn_delete" class="bg-red-500 text-white px-2 py-[1px] text-[11px] md:text-[13px] rounded-md"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!--  -->
<script>
    $(document).ready(function(){
        let currentPage = 1;
        let totalPage = 10;

        $("#next_btn").click(function(){
            if(currentPage < totalPage){
                currentPage = currentPage + 1;
            }
            alert(currentPage);
        });
    });
</script>
<!--  -->
<?php include('includes/footer.php') ?>
